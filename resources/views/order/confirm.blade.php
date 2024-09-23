@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Confirm Your Booking</h2>

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name: </label>
            <p>{{ $name }}</p>
            <input type="hidden" name="name" value="{{ $name }}">
        </div>
        <div class="form-group">
            <label>Phone Number: </label>
            <p>{{ $phone }}</p>
            <input type="hidden" name="phone" value="{{ $phone }}">
        </div>
        <div class="form-group">
            <label>Email: </label>
            <p>{{ $email }}</p>
            <input type="hidden" name="email" value="{{ $email }}">
        </div>
        <div class="form-group">
            <label>Tour: </label>
            <p>{{ $tour->name }}</p>
            <input type="hidden" name="tour_id" value="{{ $tour->id }}">
        </div>
        <div class="form-group">
            <label>Quantity: </label>
            <p>{{ $quantity }}</p>
            <input type="hidden" name="quantity" value="{{ $quantity }}">
        </div>
        <div class="form-group">
            <label>Total Price: </label>
            <p>{{ number_format($total, 0, ',', '.') }} VND</p>
            <input type="hidden" name="total" value="{{ $total }}">
        </div>
        <div class="form-group">
            <label>Notes: </label>
            <p>{{ $note }}</p>
            <input type="hidden" name="note" value="{{ $note }}">
        </div>
        <div class="button-group" style="text-align: center;"> 
            <button type="submit" class="btn custom-btn">Confirm</button> 
            <a href="{{ route('order.create') }}" class="btn custom-btn">Cancel</a>
        </div>
    </form>
</div>
<style>
    .container {
        max-width: 600px; 
        margin: 20px auto; 
        padding: 20px; 
        background-color: #f9f9f9; 
        border-radius: 8px; 
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
    }

    h2 {
        text-align: center; 
        color: #333; 
        margin-bottom: 40px; 
    }

    .form-group {
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        margin-bottom: 15px; 
    }

    label {
        font-weight: bold; 
        color: #555; 
        width: 30%; 
        padding-top: 6px; 
    }

    p {
        margin: 0; 
        color: #333; 
        flex-grow: 1; 
        width: 66.67%; 
        text-align: left; 
       
        
    }

    input[type="hidden"] {
        display: none; 
    }

    .custom-btn {
        background-color: #4BC0C8; 
        color: white; 
        text-decoration: none; 
        padding: 10px 20px; 
        border-radius: 5px; 
        display: inline-block; 
        transition: background-color 0.3s ease;
        margin: 5px; 
    }

    .custom-btn:hover {
        background-color: #3BB9B1; 
    }
</style>

@endsection
