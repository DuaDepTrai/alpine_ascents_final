@extends('layouts.app')

@section('content')

<div class="mycontainer w-75 mx-auto d-flex rounded">
    <div class="btn_container w-25">
        <form action="{{ route('users.personalinfo') }}">
            <button class="btn_personal_infor mx-auto mb-3 mt-4" id="btn_personal_infor">Personal Info</button>
        </form>
        <form action="{{ route('users.settings') }}">
            <button class="btn_account_setting mx-auto mb-3" id="btn_account_setting" onclick="window.location'{{ route('users.settings') }}'">Account Setting</button>
        </form>  
        <form action="{{ route('users.bookingHistory') }}">
            <button class="btn_booking_history mx-auto mb-3" id="btn_booking_history">Tour Booking History</button>
        </form>
            <button class="btn_logout mx-auto mb-3" id="btn_logout">Log Out</button>    
    </div>

    <div class="seperate1 h-100"></div>

    <div class="content_container w-75 d-block" style="margin: 20px">
        <h3 class="mb-4" style="text-align: center">Booking History</h3>

    @if($orders->isEmpty())
        <div class="alert alert-warning">
            Quý khách chưa book tour!
        </div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Tour</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->tour->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ number_format($order->total, 0, ',', '.') }} VNĐ</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->note }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</div>

@endsection


@push('styles')
<style>
    .table {
        background-color: #fff;
        border: 1px solid #999999;
    }
    .table thead {
        text-align: center;
    }
    .mycontainer{
        height: 39vw;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    
    .name,.phone,.email{
        font-weight: bold;
        font-style: italic;
        font-size: 18px;
    }

    /* Seperators */
    .seperate1{
        width: 3px;
        background-color: white;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .seperate2{
        width: 90%;
        height: 3px;
        background-color: white;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    
    /* Buttons */
    .btn_personal_infor,
    .btn_account_setting,
    .btn_booking_history,
    .btn_logout{
        display: block;
        width: 80%;
        height: 40px;
        background-color: white;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        font-family: 'Montserrat',sans-serif ; font-size: 17px;
    }

    .avatar{
        display: flex;
        border-radius: 50%;
        max-width: 130px;
        max-height: 130px;
        margin-left: 38px;
        object-fit: cover;
        width: 130px;
        height: 130px;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    
    .logout_messagebox{
        display: none;
        width: 350px;
        height: 350px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #d6d6d6;
        box-shadow:
        0 4px 8px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3),
        inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    }
    .btn_logout_yes,.btn_logout_no{
        width: 100px;
        margin-left: 47px;
        margin-top: 30px;
    }
    
</style>
@endpush

@push('scripts')
<script> 
    addEventListener('DOMContentLoaded',function(){
        var btn_personal_infor = this.document.getElementById('btn_personal_infor');
        var btn_account_setting = this.document.getElementById('btn_account_setting');
        var btn_booking_history = this.document.getElementById('btn_booking_history');
        var btn_logout = this.document.getElementById('btn_logout');
        var logout_messagebox = this.document.getElementById("logout_messagebox");
    
        var btn_logout_yes = this.document.getElementById('btn_logout_yes');
        var btn_logout_no = this.document.getElementById('btn_logout_no');
    
        btn_logout.addEventListener('click',function(){
            logout_messagebox.style.display = "block";
            btn_logout_yes.addEventListener('click',function(){
                logout_messagebox.style.display = "none";
            });
    
            btn_logout_no.addEventListener('click',function(){
                logout_messagebox.style.display = "none";
            });
        });
    });
    </script>
@endpush



