@php
    $prefixed =Request::route()->getPrefix();
    $route = Route::current()->getName();

@endphp
{{-- @dd($route) --}}
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{route('dashboard')}}" data-active="{{($prefixed==null) ? 'true' :''}}"  aria-expanded="{{($prefixed==null) ? 'true' :''}}"" class="dropdown-toggle  ">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>

                </a>

            </li>

            <li class="menu">
                <a href="#users" data-toggle="collapse" data-active="{{($prefixed=='/users') ? 'true' :''}}" aria-expanded="{{($prefixed=='/users') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Manage Users</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('user.view')}}"> User List </a>
                    </li>
                    <li>
                        <a href="{{route('user.create')}}"> Create User </a>
                    </li>
                </ul>
            </li>



            <li class="menu">
                <a href="#Profile" data-toggle="collapse" data-active="{{($prefixed=='/profile') ? 'true' :''}}" aria-expanded="{{($prefixed=='/profile') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Manage Profile</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="Profile" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('profile.view')}}"> Your Profile </a>
                    </li>
                    <li>
                        <a href="{{route('profile.reset')}}"> Change Password </a>
                    </li>
                </ul>
            </li>


            <li class="menu">
                <a href="#class" data-toggle="collapse" data-active="{{($route=='student.class' || $route=='student.class.create') ? 'true' :''}}" aria-expanded="{{($route=='student.class'|| $route=='student.class.create') ? 'true' :''}}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Manage Student Class</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="class" data-parent="#accordionExample">
                    <li>
                        <a href="{{route('student.class')}}"> Class List </a>
                    </li>
                    <li>
                        <a href="{{route('student.class.create')}}"> Create Class </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- <div class="shadow-bottom"></div> -->

    </nav>

</div>
