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
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method='POST' action="addProductPost">
                @csrf    
                <center>
                        <h1>Add Product</h1>
                    </center>
                    <br><br><br>
                    <input name='productName' class='form-control' type="text" placeholder='Add productName'>
                    <br><br>
                    <input name='productPrice' class='form-control' type="text" placeholder='Add productPrice'>
                    <br><br>
                    <input name='productDescript' class='form-control' type="text" placeholder='Add productDescript'>
                    <br><br>
                    <select name="categoryId">
                        @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->categoryName}}</option>   
                    @endforeach
                </select>
<br><br>
                    <button type='submit' class='form-control btn btn-primary'>Add</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>