<html>
    <body>
        <center>
            <h1>Semua Category</h1>
            <table border=1px>
                <tr>
                    <td>
                        No
                    </td>
                    <td>
                        Category Name
                    </td>
                </tr>
                @foreach($semua_category as $category)
                    <tr>
                        <td>{{ $category->CategoryID }}</td>
                        <td><a href="/isi-category/{{$category->CategoryID}}">{{ $category->CategoryName }}</a></td>
                    </tr>
                @endforeach
            </table>
        </center>
    </body>
</html>