@extends('main.layout')
@section('protitle')
<title>Products</title>
@endsection
@section('Product')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    <center>
    <u><h1>Products</h1></u>
    </center>
    <button style="border-radius:10px; float:right;" class="btn btn-primary"><a href="addProduct" style="text-decoration:none;color:white;">ADD PRODUCT</a></button>
<table class="table">
    <tr>
    <th>productId</th>
        <th>productName</th>
        <th>productPrice</th>
        <th>productDescription</th>
        <th>categoryId</th>
        <th>productImage</th>
       
    </tr>

@foreach($Product as $p)
<tr>
<td>{{$p->id}}</td>
<td>{{$p->productName}}</td>
<td>{{$p->productPrice}}</td>
<td>{{$p->productDecript}}</td>
<td>{{$p->categoryId}}</td>
<td><img src="image/{{$p->productImage}}" height="70px" width="70px" alt=""></td>
<td><a href="deleteProduct/{{$p->id}}">DELETE</a></td>
</tr>
@endforeach

    


</table>
</body>
</html>
@endsection
