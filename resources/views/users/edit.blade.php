@extends('layouts.app')

@section('content')

<div class="mycontainer d-flex mt-3 rounded">
    <div class="btn_container w-25">
        <form action="{{ route('users.personalinfo') }}">
            <button type="submit" class="btn_personal_infor mx-auto mb-3 mt-4" id="btn_personal_infor">Personal Info</button>
        </form>
        <form action="{{ route('users.settings') }}">
            <button class="btn_account_setting mx-auto mb-3" id="btn_account_setting" onclick="window.location'{{ route('users.settings') }}'">Account Setting</button>
        </form>        
        <button class="btn_logout mx-auto mb-3" id="btn_logout">Log Out</button>
    </div>
    <div class="seperate1 h-100"></div>

    <div class="content_container w-75 d-block">
        <div class="row">
            <div class="col-3">
                <div class="avatar mt-4 bg-white rounded-circle">
                    <img src="" alt="">            
                </div>
            </div>
            <div class="col mt-4 ms-4 lh-lg fs-5">
                <div class="name">Username : {{ $user->name }}</div>
                <div class="phone">Phone number : {{ $user->phone }}</div>
                <div class="email">Email : {{ $user->email }}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mt-4">
                <form action="{{ route('users.update',['user'=> $user]) }}" class="form-control ms-4" method="post">
                    @csrf
                    @method('put')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="form-group">
                        <label for="name">New Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}">                       
                    </div>
                    <div class="form-group">
                        <label for="email">New Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">New Phone Number</label>
                        <input type="number" name="phone" class="form-control" id="phone" value="{{ $user->phone }}">
                    </div> 
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-primary ms-3" onclick="window.location='{{ route('forgetpass.form') }}'">Forgot password ?</button>
                    <button type="button" class="btn btn-primary ms-3" onclick="window.location='{{ route('changepass.form') }}'">Change your password</button>
                </form>
            </div>
        </div>
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
    
    h3{
        font-family: 'Montserrat',sans-serif ; font-size: 25px;
    }
    .mycontainer{
        width: 100%;
        height: 48vw;
        justify-content: center;
        align-content: center;
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
        font-family: 'Montserrat',sans-serif ; font-size: 17px;
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
        font-family: 'Montserrat',sans-serif ; font-size: 17px;
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
        font-family: 'Montserrat',sans-serif ;
        font-size: 17px;
    }
    
    .infor_field{
        margin-right: 15px;
        font-style: italic;
        font-weight: bold;
    }
    
    
    /* Form, Input */
    
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



