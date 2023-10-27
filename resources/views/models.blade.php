<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">

        <br>
        <form action="/save_model" method="POST">
            @csrf

            <label for="">Product</label>

            <select name="product" id="">
                @foreach ($products as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>


            <label for="">Name</label>
            <input type="text" name="name">

            <button type="submit" class="btn btn-success">OK</button>
        </form>

        <br>
        <br>
        <table class="table table-hover" style="text-align: center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->get_product->name }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/delete_product/{{ $item->id }}">Delete</a>
                            <a class="btn btn-primary" href="/edit_product/{{ $item->id }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</body>

</html>
