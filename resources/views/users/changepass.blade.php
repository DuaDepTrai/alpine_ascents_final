<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Change password</title>
</head>
<body>
    <div class="container w-50 mx-auto mt-5 fs-2">
        <h2 class="fs-1 text-center mb-5">Forget your password when logging in ?</h2>
        <form action="{{ route('update.password') }}" method="post" >
            @csrf
            @method('put')
            <span>Enter new password here</span>
            <input type="password" name="new_password" class="form-control border-5" placeholder="New password">
            <br>
            <span>Enter your current password to confirm</span>
            <input type="password" name="old_password" class="form-control border-5" placeholder="Enter the OLD password here">
            <button type="submit" class="btn btn-primary mt-3">Confirm</button>
        </form>
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</body>
</html>

