@extends('backend.layouts.app')

@section('title','User Password Update')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('profile.view')}}">Profile</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Reset</span></li>
@endsection
@section('style')
<link href="{{asset('admin')}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
@section('content')


<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing ">



        <div id="custom_styles" class="col-lg-12 mt-4 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Update Profile Password</h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">

<form class="needs-validation" novalidate action="{{route('profile.passupdate')}}" method="post">
    @csrf
    <div class="form-row mb-4">

        <div class="col-md-6">
            <label for="validationCustom03">Current Password</label>
            <input type="password" class="form-control" id="validationCustom03" name="oldpass" >

        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">

                <label for="phone">New Password</label>
                <input type="password" class="form-control"  name="newpass" >


        </div>
        <div class="col-md-6">
            <label for="address">Confirm password</label>
            <input type="password" class="form-control" name="password_confirmation">

        </div>
    </div>



    <button class="btn btn-primary mt-3" type="submit">Reset Password</button>
</form>


    </div>
    </div>
    </div>


    </div>

</div>
<!--  END CONTENT AREA  -->

@endsection
@section('script')
<script type="text/javascript">

    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
</script>
@endsection
