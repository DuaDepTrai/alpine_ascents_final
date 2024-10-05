@extends('layouts.app')

@section('content')

<h1 style="text-align: center;">User Account Main Page</h1>
<div class="container">
    <div class="container_sidebar_uac">
        <button id="personalinfo">Personal Info</button>
        <button id="account_setting">Account Setting</button>
        <button id="bookingHistory">Tour Booking History</button>
        <button id="logout">Log Out</button>
    </div>
    <div class="container_content_uac">
        <div class="main_content_uac">
            <div class="avatar_uac">
                <img src="">
            </div>
            <div class="name_role_uac">
                <div class="name_uac">John Doe</div>
                <div class="role_uac">Software Engineering</div>
            </div>
            <div class="phone_email_uac">
                <div class="phone_uac">Phone Number : 0991277852</div>
                <div class="email_uac">Email : hoangnguyen23567@gmail.com</div>
            </div>
        </div>


        <form action="" method="POST"></form>
            <div class="container_change">
                    <h2>Wanna change your information ?</h2>
                    <input type="text" class="name_change" id="name_change" placeholder="Change your name....">
                    <input type="text" class="role_change" id="role_change" placeholder="Change your role....">
                    <input type="number" class="phone_change" id="phone_change" placeholder="What's your new phone number ?">
                    <input type="emaill" class="email_change" id="email_change" placeholder="Change your email ?">
            </div>
        </form>

    </div>
</div>

@endsection


