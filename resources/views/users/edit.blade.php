@extends('layouts.app')

@include('users.users_script')
@include('users.users_style')

@section('content')

<div class="mycontainer d-flex mt-3 rounded">
    <div class="btn_container w-25">
        <button class="btn_personal_infor mx-auto mb-3 mt-4" id="btn_personal_infor">Personal Info</button>
        <button class="btn_account_setting mx-auto mb-3" id="btn_account_setting">Account Setting</button>
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
                <form action="{{ route('users.update',['user' => $user]) }}" class="form-control border-0" method="post">
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
                    <button class="btn btn-primary ms-3">Change your password</button>
                </form>
            </div>
        </div>
    </div>

    

    <div class="logout_messagebox" id="logout_messagebox">
        <p class="fs-3 text-center text-primary mt-5">Alert !</p>
        <p class="fs-4 text-center mt-2">Do you want to log out ?</p>
        <button class="btn_logout_yes btn btn-primary" id="btn_logout_yes">Yes</button>
        <button class="btn_logout_no btn btn-primary" id="btn_logout_no">No</button>
    </div>
</div>

@endsection


