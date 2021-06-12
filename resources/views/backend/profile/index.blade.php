@extends('backend.layouts.app')

@section('title','User Profile')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Profile</span></li>
@endsection
@section('style')
<link href="{{asset('admin')}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing ">


            <div class="user-profile layout-spacing mt-4">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between p-4">
                        <h3 class="">Profile</h3>
                        <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                    </div>

                    <div class="text-center user-info mt-0 ">
                        <img src="{{url('storage/'.$user->profile_photo_path)}}" width='80' class='rounded-full h-20 w-20 object-cover' alt="avatar">
                        <p class="">{{$user->name}}</p>
                    </div>
                    <div class="user-info-list">

                        <div class="">
                            <ul class="contacts-block list-unstyled">
                                <li class="contacts-block__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> {{strtoupper($user->usertype)}}
                                </li>


                                <li class="contacts-block__item">
                                    <a href="mailto:{{$user->email}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{$user->email}}</a>
                                </li>
                             </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



    </div>

</div>
<!--  END CONTENT AREA  -->

@endsection
@section('script')

@endsection
