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
            <button class="btn_logout mx-auto mb-3" id="btn_logout">Log Out</button>    
    </div>

    <div class="seperate1 h-100"></div>

    <div class="content_container w-75 d-block">
        <div class="avatar mt-4 bg-white rounded-circle">
            <img src="{{ $user->avatar }}" alt="">
        </div>
        <div class="seperate2 mx-auto mt-4 mb-4"></div>
        <h3 class="ms-4 mb-3">Personal Information</h3>
        <div class="name ms-4">Username: {{ $user->name }}</div>
        <div class="seperate2 mx-auto mt-4 mb-4"></div>
        <h3 class="ms-4 mb-3">Account Information</h3>
        <div class="phone ms-4">Phone Number: {{ $user->phone }}</div>
        <div class="email ms-4">Email: {{ $user->email }}</div>
    </div>

    <div class="logout_messagebox" id="logout_messagebox">
        <p class="fs-3 text-center text-primary mt-5">Alert !</p>
        <p class="fs-4 text-center mt-2">Do you want to log out ?</p>
        <div class="logout d-flex">
            <form action="{{ route('logout') }}">
                <button class="btn_logout_yes btn btn-primary" id="btn_logout_yes">Yes</button>
            </form>
            <button class="btn_logout_no btn btn-primary" id="btn_logout_no">No</button>    
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
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
    .btn_personal_infor,.btn_account_setting,.btn_logout{
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
    
    img{
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        max-width: 130px;
        max-height: 130px;
    }
    /* Form, Input */
    
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

