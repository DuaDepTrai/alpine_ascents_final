@include('users.users_style')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget password</title>
</head>
<body>
    <div class="container w-50 mx-auto mt-3">
        <h2 class="mt-5 mb-3 text-center">Forget your password ?</h2>
        <form action="{{ route('send.mail') }}" method="post" class="form-control p-3">
            @csrf
            <p>Please enter your email.</p>
            <input type="email" name="email" class="form-control" placeholder="Your current email" required pattern="{{ session('true_email') }}">
            <button type="submit" class="btn btn-primary mt-3">Send code</button>
        </form>
    </div>
</body>
</html>