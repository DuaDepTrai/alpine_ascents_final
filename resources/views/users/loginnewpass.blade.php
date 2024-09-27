
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New password</title>
</head>
<body>
    <div class="container w-50 mx-auto mt-3">
        <h2 class="mt-5 mb-3 text-center">Change your password</h2>
        <form action="{{ route('update.login.forget') }}" method="post" class="form-control p-3">
            @csrf
            @method('put')
            <span>New password :</span>
            <input type="password" name="password" class="form-control" required>
            <br>
            <span>Confirm New Password :</span>
            <input type="password" name="password_confirm" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-3">Confirm</button>
        </form>
    </div>
</body>
</html>