@php
$prefixed = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp
{{-- @dd($route) --}}
<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{ route('dashboard') }}" data-active="{{ $prefixed == null ? 'true' : '' }}"
                    aria-expanded="{{ $prefixed == null ? 'true' : '' }}"" class=" dropdown-toggle ">
                    <div class="">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
</div>

</a>

</li>

<li class="menu">
    <a href="#users" data-toggle="collapse" data-active="{{ $prefixed == '/users' ? 'true' : '' }}"
        aria-expanded="{{ $prefixed == '/users' ? 'true' : '' }}" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span>Manage Users</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
        <li>
            <a href="{{ route('user.view') }}"> User List </a>
        </li>
        <li>
            <a href="{{ route('user.create') }}"> Create User </a>
        </li>
    </ul>
</li>



<li class="menu">
    <a href="#Profile" data-toggle="collapse" data-active="{{ $prefixed == '/profile' ? 'true' : '' }}"
        aria-expanded="{{ $prefixed == '/profile' ? 'true' : '' }}" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Manage Profile</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="Profile" data-parent="#accordionExample">
        <li>
            <a href="{{ route('profile.view') }}"> Your Profile </a>
        </li>
        <li>
            <a href="{{ route('profile.reset') }}"> Change Password </a>
        </li>
    </ul>
</li>


<li class="menu">
    <a href="#class" data-toggle="collapse"
        data-active="{{ $route == 'student.class' || $route == 'student.class.create' || $route == 'student.class.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.class' || $route == 'student.class.create' || $route == 'student.class.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Student Class</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="class" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.class') }}"> Class List </a>
        </li>
        <li>
            <a href="{{ route('student.class.create') }}"> Create Class </a>
        </li>
    </ul>
</li>


<li class="menu">
    <a href="#year" data-toggle="collapse"
        data-active="{{ $route == 'student.year' || $route == 'student.year.create' || $route == 'student.year.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.year' || $route == 'student.year.create' || $route == 'student.year.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Student Year</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="year" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.year') }}"> Year List </a>
        </li>
        <li>
            <a href="{{ route('student.year.create') }}"> Create Year </a>
        </li>
    </ul>
</li>


<li class="menu">
    <a href="#group" data-toggle="collapse"
        data-active="{{ $route == 'student.group' || $route == 'student.group.create' || $route == 'student.group.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.group' || $route == 'student.group.create' || $route == 'student.group.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Student Group</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="group" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.group') }}"> Group List </a>
        </li>
        <li>
            <a href="{{ route('student.group.create') }}"> Create Group </a>
        </li>
    </ul>
</li>



<li class="menu">
    <a href="#shift" data-toggle="collapse"
        data-active="{{ $route == 'student.shift' || $route == 'student.shift.create' || $route == 'student.shift.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.shift' || $route == 'student.shift.create' || $route == 'student.shift.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Student Shift</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="shift" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.shift') }}"> Shift List </a>
        </li>
        <li>
            <a href="{{ route('student.shift.create') }}"> Create Shift </a>
        </li>
    </ul>
</li>


<li class="menu">
    <a href="#fee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-file">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
            <span>Student Fee</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="fee" data-parent="#accordionExample">

        <li>
            <a href="#feecat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Fee Category<svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg> </a>
            <ul class="collapse list-unstyled sub-submenu" id="feecat" data-parent="#fee">
                <li>
                    <a href="{{ route('student.fee.category') }}"> Category List </a>
                </li>
                <li>
                    <a href="{{ route('student.fee.category.create') }}"> Category Create </a>
                </li>

            </ul>
        </li>
    </ul>


    <ul class="collapse submenu list-unstyled" id="fee" data-parent="#accordionExample">

        <li>
            <a href="#feeAmount" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Fee Amount<svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg> </a>
            <ul class="collapse list-unstyled sub-submenu" id="feeAmount" data-parent="#fee">
                <li>
                    <a href="{{ route('student.fee.amount') }}"> Fee List </a>
                </li>
                <li>
                    <a href="{{ route('student.fee.amount.create') }}"> Fee Create </a>
                </li>

            </ul>
        </li>
    </ul>
</li>


<li class="menu">
    <a href="#examtype" data-toggle="collapse"
        data-active="{{ $route == 'student.examtype.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.examtype.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Exam Type</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="examtype" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.examtype.index') }}"> Exam List </a>
        </li>
        <li>
            <a href="{{ route('student.examtype.create') }}"> Create Exam type </a>
        </li>
    </ul>
</li>

<li class="menu">
    <a href="#subject" data-toggle="collapse"
        data-active="{{ $route == 'student.subject.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.subject.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>School Subject</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="subject" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.subject.index') }}"> Subject List </a>
        </li>
        <li>
            <a href="{{ route('student.subject.create') }}"> Create Subject </a>
        </li>
    </ul>
</li>
<li class="menu">
    <a href="#assign" data-toggle="collapse"
        data-active="{{ $route == 'student.subjectassign.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        aria-expanded="{{ $route == 'student.subjectassign.index' || $route == 'student.examtype.create' || $route == 'student.examtype.edit' ? 'true' : '' }}"
        class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Assign Subject</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled" id="assign" data-parent="#accordionExample">
        <li>
            <a href="{{ route('student.subjectassign.index') }}"> Assign List </a>
        </li>
        <li>
            <a href="{{ route('student.subject.create') }}"> Create Subject Assign </a>
        </li>
    </ul>
</li>

</ul>
<!-- <div class="shadow-bottom"></div> -->

</nav>

</div>
