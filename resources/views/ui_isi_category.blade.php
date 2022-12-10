<html>
    <body>
        <center>
            <h1>Isi Category</h1>
            <table border=1px>
                <tr>
                    <th>product id</th>
                    <th>product name</th>
                    <th>unit price</th>
                </tr>
                @foreach($detil_category as $produk)
                    <tr>
                        <td>{{ $produk->ProductID }}</td>
                        <td><a href="/detil-product/{{ $produk->ProductID }}">{{ $produk->ProductName }}</a></td>
                        <td>{{ $produk->UnitPrice }}</td>
                    </tr>
                @endforeach
            </table>
        </center>
    </body>
</html>