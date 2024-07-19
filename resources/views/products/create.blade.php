<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #fff;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #555;
            color: #fff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Product</h1>
        <div>
            @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" />
            </div>
            <div>
                <label>Qty</label>
                <input type="text" name="qty" placeholder="Qty" />
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" placeholder="Price" />
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description" />
            </div>
            <input type="submit" value="Save a New Product">
        </form>
    </div>
</body>
</html>
