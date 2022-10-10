@extends('main.layout')
@section('Category')
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
    
<table class="table">
    <tr>
        <th>categoryId</th>
        <th>categoryName</th>
    </tr>

@foreach($category as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->categoryName}}</td>
<td><a href="categoryDelete/{{$c->id}}">DELETE</a></td>
<td><a href="categoryUpdate/{{$c->id}}">UPDATE</a></td>
</tr>
@endforeach
</table>
</body>
</html>
@endsection

