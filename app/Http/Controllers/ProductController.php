<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller{
    public function isi_category($cid){
        $data_produk = Product::where('CategoryID', $cid)->get();
        // var_dump($data_produk);
        return view('ui_isi_category', [
            'detil_category' => $data_produk
        ]);
    }

    public function detil_product($pid){
        $data_produk = Product::find($pid);
        // var_dump($data_produk);
        return view('ui_detil_product', [
            'detil_product' => $data_produk
        ]);
    }

    public function simpan_cart(Request $request)
    {
        $cart = session('cart');

        $productID = $request->input('ProductID');
        $productName = $request->input('ProductName');
        $quantity = $request->input('qty');
        $price = $request->input('UnitPrice');

        $cart["$productID"] = [
            'ProductName' => $productName,
            'Quantity' => $quantity,
            'UnitPrice' => $price,
        ];
        // save to session
        session(['cart' => $cart]);
        return redirect('shopping-cart');
    }

    public function getShoppingCart()
    {
        $cart = session('cart');
        return view('shopping-cart', compact(['cart']));
    }

}