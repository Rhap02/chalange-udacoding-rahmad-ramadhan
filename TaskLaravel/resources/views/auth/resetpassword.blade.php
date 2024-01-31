<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
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

<body>
    {{-- JS --}}
    <div class="main">
        <div class="form">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(Session()->has('status'))
        <div class="alert alert-success">
            {{Session()->get('status')}}
        </div>
    @endif

    <form action="{{ route('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request('token') }}">
        <input type="hidden" name="email" value="{{ request('email') }}">
    
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    
        <label for="password_confirmation" class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation">
    
        <input type="submit" value="Update Password" class="btn btn-primary w-100 mt-3">
    </form>
        </div>
    </div>
</body>
</html>