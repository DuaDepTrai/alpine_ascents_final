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
h3{
    font-family: 'Space Grotesk'; font-size: 25px;
}
.container{
    width: 80%;
    height: 560px;
    /* Windows Border */
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}

/* Seperators */
.seperate1{
    width: 0.1px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}
.seperate2{
    width: 90%;
    height: 0.1px;
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
    font-family: 'Space Grotesk'; font-size: 17px;
}
.changeinfo_confirm,.changeinfo_forgetpass{
    margin-top: 15px;
    margin-right: 20px;
    display: inline-block;
    width: 100px;
    height: 30px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    font-family: 'Space Grotesk'; font-size: 17px;
}
.changeinfo_forgetpass{
    width: 200px;
}

/* Content */
.uac_old_container_infor{
    line-height: 1.6;
}
.avatar{
    margin-left: 38px;
    width: 130px;
    height: 130px;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
}

/* Span */
span{
    font-family: 'Space Grotesk';
    font-size: 20px;
}
.name,.role,.phone,.email{
    width: 80%;
    height: 40px;
    margin-left: 35px;
    background-color: white;
}
.infor_field{
    margin-right: 15px;
    font-style: italic;
    font-weight: bold;
}


/* Form, Input */
form{
    margin-left: 35px;
}
input{
    display: block;
    width: 270px;
    background-color: white;
    border: 1px solid #d6d6d6;
    box-shadow:
    0 4px 8px rgba(0, 0, 0, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.3),
    inset 0 -1px 0 rgba(0, 0, 0, 0.2);
    border-radius: 30px;
}
.changeinfo_spans{
    margin-right: 15px;
    line-height: 2.2;
}

.logout_messagebox{
    display: none;
    width: 350px;
    height: 350px;
    position: fixed;
    z-index: 10;
    top: 25%;
    left: 37%;
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


@push(scripts)
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
