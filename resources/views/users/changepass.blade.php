@extends('users.users_style')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change password</title>
</head>
<body>
    <div class="container w-50 mx-auto mt-3">
        <h2 class="mt-5 mb-3 text-center">Change your password</h2>
        <form action="{{ route('update.password') }}" method="post" class="form-control p-3">
            @csrf
            @method('put')
            <span>Enter new password here</span>
            <input type="password" name="new_password" class="form-control" placeholder="New password" required pattern=".{6,15}" >
            <br>
            <span>Enter your current password to confirm</span>
            <input type="password" name="old_password" class="form-control" placeholder="Enter your current password" required pattern=".{6,15}" >
            <button type="submit" class="btn btn-primary mt-3">Confirm</button>
        </form>
    </div>
</body>
</html>