@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order placed successfully!</h2>
    <p>{{ session('success') }}</p>
    <a href="{{ route('order.create') }}" class="btn custom-btn">Go back</a>
</div>

<style>
    .container {
        max-width: 600px; 
        margin: 40px auto; 
        padding: 20px; 
        background-color: #f9f9f9; 
        border-radius: 8px; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
        text-align: center; 
    }

    h2 {
        color: #4CAF50; 
        margin-bottom: 20px; 
    }

    p {
        color: #333; 
        font-size: 18px; 
        margin-bottom: 30px; 
    }

    .custom-btn {
        background-color: #4BC0C8; 
        color: white; 
        text-decoration: none; 
        padding: 10px 20px;
        border-radius: 5px; 
        transition: background-color 0.3s;
        display: inline-block; 
        font-weight: bold; 
    }

    .custom-btn:hover {
        background-color: #3BB9B1; 
    }
</style>

@endsection
