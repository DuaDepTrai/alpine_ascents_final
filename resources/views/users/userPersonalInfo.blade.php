@extends('layouts.app')

@section('content')

<h1>User Account Main Page</h1>
<div class="container">
    <div class="container_sidebar_pri">
        <button id="personalinfo">Personal Info</button>
        <button id="account_setting">Account Setting</button>
        <button id="logout">Log Out</button>
    </div>
    <div class="container_content_pri">
        <div class="avt_name_role_pri">
            <div class="avatar_pri">
                <img src="">
            </div>
            <div class="name_role_pri">
                <div class="name_pri">John Doe</div>
                <div class="role_pri">Software Engineering</div>
            </div>
        </div>
        <div class="phone_email_pri">
            <div class="phone_pri">Phone Number : 0991277852</div>
            <div class="email_pri">Email : hoangnguyen23567@gmail.com</div>
        </div>
    </div>
</div>

@endsection


@push('styles')
<style>
    h1,h2{
    text-align: center;
    font-family: 'Montserrat', sans-serif;
}
h2{
    margin-left: -30px;
}
.container{
    margin-top: 10px;
    margin-left: 40px;
    margin-right: 40px;
    display: flex;
    height: 570px;
    font-family: 'Montserrat', sans-serif;
}
.container_sidebar_pri,.container_sidebar_uac{
    width: 20vw;
    background-color: white;
    margin-right: 7px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    text-align: center;
}
.container_content_pri{
    width: 80vw;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    display: block;
}
.container_content_uac{
    width: 80vw;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    display: block;
}
.main_content_uac{
    display: flex;
}
.container_change{
    margin-left: 35px;
    margin-top: 60px;
}
.avt_name_role_pri{
    display: flex;
}
.name_role_pri,.name_role_uac{
    display: block;
}
.phone_email_pri,.phone_email_uac{
    display: block;
}
button{
    width: 80%;
    height: 50px;
    border: none;
    margin: 10px;
    background-color: white;
    border: 1px solid black;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    font-size: 17px;
}
#personalinfo{
    margin-top: 20px;
}
.avatar_pri,.avatar_uac{
    width: 110px;
    height: 110px;
    border: 2px solid black;
    margin: 20px 20px 20px 35px;
}
.name_pri,.name_uac{
    width: 300px;
    height: 50px;
    border: 2px solid black;
    margin-top: 20px;
    line-height: 50px;
    align-items: center;
    font-size: 24px;
}
.role_pri,.role_uac{
    width: 300px;
    height: 50px;
    border: 2px solid black;
    margin-top: 6px;
    line-height: 50px;
    align-items: center;
    font-size: 17px;
    font-style: italic;
}

.phone_pri{
    width: 400px;
    height: 50px;
    border: 2px solid black;
    margin: 20px 20px 20px 35px;
    line-height: 50px;
    align-items: center;
    font-size: 17px;
    font-style: italic;
}
.phone_uac{
    width: 400px;
    height: 50px;
    border: 2px solid black;
    margin-top: 20px;
    margin-left: 20px;
    line-height: 50px;
    align-items: center;
    font-size: 17px;
    font-style: italic;
}
.email_pri{
    width: 400px;
    height: 50px;
    border: 2px solid black;
    margin: 20px 20px 20px 35px;
    line-height: 50px;
    align-items: center;
    font-size: 17px;
    font-style: italic;
}
.email_uac{
    width: 400px;
    height: 50px;
    border: 2px solid black;
    margin-top: 6px;
    margin-left: 20px;
    line-height: 50px;
    align-items: center;
    font-size: 17px;
    font-style: italic;
}
.name_change,.role_change,.phone_change,.email_change{
    font-family: 'Montserrat', sans-serif;
    font-size: 17px;
    width: 393px;
    height: 50px;
    border: 2px solid black;
    margin-right: 20px;
    margin-top: 20px;
}
</style>
@endpush


@push(scripts)
<script>

</script>
@endpush
