<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products_edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body> 
    <div class="container">
        <h1>Product_edit</h1>
        <br>
        <form action="/save_edit_product/{{ $product->id }}" method="POST">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $product->name }}">
            
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>


</body>

</html>
