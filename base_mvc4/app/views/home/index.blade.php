<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table border="1">
        <tr>
            <td>Name </td>
        </tr>
        @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->name_product }}</td>
        </tr>
        @endforeach
        
    </table>
</body>
</html>