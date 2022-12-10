<html>
    <body>
        <h1>Details Product</h1>

        <table border="1px">
            <tr>
                <th colspan="8">Product</th>
                <th colspan="5">Supplier</th>
                <th colspan="1">Category</th>
            <tr>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity Per Unit</th>
                <th>Unit Price</th>
                <th>Units In Stock</th>
                <th>Units On Order</th>
                <th>Reorder Level</th>
                <th>Discontinued</th>

                <th>Company Name</th>
                <th>Contact Name</th>
                <th>Contact Title</th>
                <th>Address</th>
                <th>Phone</th>

                <th>Category Name</th>
            </tr>
            <tr>
                <td>{{$detil_product->ProductID}}</td>
                <td>{{$detil_product->ProductName}}</td>
                <td>{{$detil_product->QuantityPerUnit}}</td>
                <td>{{$detil_product->UnitPrice}}</td>
                <td>{{$detil_product->UnitsInStock}}</td>
                <td>{{$detil_product->UnitsOnOrder}}</td>
                <td>{{$detil_product->ReorderLevel}}</td>
                <td>{{$detil_product->Discontinued}}</td>

                <td>{{$detil_product->supplier->CompanyName}}</td>
                <td>{{$detil_product->supplier->ContactName}}</td>
                <td>{{$detil_product->supplier->ContactTitle}}</td>
                <td>{{$detil_product->supplier->Address}}</td>
                <td>{{$detil_product->supplier->Phone}}</td>
                
                <td>{{$detil_product->category->CategoryName}}</td>
            </tr>
        </table>

        <br>

        <form action="/add-shopping-cart" method="POST">
            @csrf
            <input type="hidden" name="ProductID" value="{{$detil_product->ProductID}}">
            <input type="hidden" name="ProductName" value="{{$detil_product->ProductName}}">
            <input type="hidden" name="UnitPrice" value="{{$detil_product->UnitPrice}}">
            Beli sebanyak: <input type="number" min="1" name="qty" required>
            <input type="submit" value="Beli">
        </form>
    </body>
</html>