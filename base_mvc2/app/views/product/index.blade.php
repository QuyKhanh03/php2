<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <table>
        <tr>
            <td>Name Product</td>
            <td>Price</td>
            <td>Description</td>
            {{-- <td></td> --}}
        </tr>
        @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->name_product }}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
</body>
</html>