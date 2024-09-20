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
        <div class="avatar mt-4 bg-white rounded-circle">
            <img src="" alt="">
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
        <button class="btn_logout_yes btn btn-primary" id="btn_logout_yes">Yes</button>
        <button class="btn_logout_no btn btn-primary" id="btn_logout_no">No</button>
    </div>
</div>


@endsection


@push('scripts')

@endpush