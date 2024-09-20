@extends('layouts.app')

@section('content')

<div class="container d-flex mx-auto mt-5 rounded">
    <div class="btn_container w-25">
        <button class="btn_personal_infor mx-auto mb-3 mt-4" id="btn_personal_infor">Personal Info</button>
        <button class="btn_account_setting mx-auto mb-3" id="btn_account_setting">Account Setting</button>
        <button class="btn_logout mx-auto mb-3" id="btn_logout">Log Out</button>
    </div>
    <div class="seperate1 h-100"></div>

    <div class="content_container w-75 d-block">
        <div class="avatar mt-4 bg-white rounded-circle">
            <img src="" alt="">
        </div>

        <div class="seperate2 mx-auto mt-4 mb-4"></div>
        <h3 class="ms-4 mb-3">Personal Information</h3>
        <div class="name">
            <span class="infor_field">Username:</span>
            <span id="output_name">John Doe</span>
        </div>
        <div class="role">
            <span class="infor_field">Role:</span>
            <span id="output_role">Software Engineering</span>
            </div>

        <div class="seperate2 mx-auto mt-4 mb-4"></div>
        <h3 class="ms-4 mb-3">Account Information</h3>
        <div class="phone">
            <span class="infor_field">Phone Number:</span>
            <span id="output_phone">0992133755</span>
        </div>
        <div class="email">
            <span class="infor_field">Email:</span>
            <span id="output_email">johndoe1998@gmail.com</span>
        </div>
    </div>
</div>
<div class="logout_messagebox d-none"></div>
    <p class="fs-3 text-center text-primary mt-5">Alert !</p>
    <p class="fs-4 text-center mt-2">Do you want to log out ?</p>
    <button class="btn_logout_yes btn btn-primary" id="btn_logout_yes">Yes</button>
    <button class="btn_logout_no btn btn-primary" id="btn_logout_no">No</button>
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
            alert('Log out succesfully');
            logout_messagebox.style.display = "none";
        });

        btn_logout_no.addEventListener('click',function(){
            logout_messagebox.style.display = "none";
        });
    });
});
</script>
@endpush
