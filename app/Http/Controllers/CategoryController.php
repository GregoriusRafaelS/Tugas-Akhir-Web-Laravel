<?php

namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController extends Controller{
    public function semua_category(){
        $data_kategori = Category::all();
        // var_dump($data_kategori);
        return view('ui_semua_category', [
            'semua_category' => $data_kategori
        ]);
    }
}