<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background: #0c944e;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            background: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form h2 {
            margin-bottom: 20px;
        }

        .form p {
            margin-bottom: 30px;
            color: #555;
        }

        .form-label {
            margin-bottom: 8px;
            display: block;
            text-align: left;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #0c944e;
            border-color: #0c944e;
        }
    </style>
</head>

<body>
    {{-- JS --}}
    <div class="form">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(Session()->has('status'))
        <div class="alert alert-success">
            {{Session()->get('status')}}
        </div>
        @endif

        <p>Forgot Password</p>
        
        <form action="{{ route('password.email')}}" method="post">
            @csrf
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
            <input type="submit" value="Request Password Reset" class="btn btn-primary w-100 mt-3">
            Alredy Have a Account??<a class="small" href="{{ route('login') }}"> Click Here</a>
        </form>
    </div>
</body>

</html>
