@extends('backend.layouts.app')

@section('title','User Edit')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('user.view')}}">Users</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Edit</span></li>
@endsection
@section('style')
    <style>
      .tabelbox {
    border-radius: 5px;
    background: #0e1726;
}
    </style>
@endsection
@section('content')

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing ">

        <div id="custom_styles" class="col-lg-12 mt-4 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit User</h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">

<form class="needs-validation" novalidate action="{{route('user.update',$user->id)}}" method="post">
    @csrf
    <div class="form-row mb-4">
        <div class="col-md-6">
            <label for="validationCustom01">Select Role</label>
            <select id="inputState" name="usertype" value="" required class="form-control">
                <option>Choose...</option>
                <option value='admin' {{$user->usertype=='admin' ? 'selected' :''}} >Admin</option>
                <option value='user' {{$user->usertype=='user' ? 'selected' :''}}  >User</option>
            </select>
            <div class="invalid-feedback">
                Please Select User Role.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02">Full Name</label>
            <input type="text" class="form-control" id="validationCustom02"   name="name" value="{{$user->name}}" required>
            <div class="invalid-feedback">
                Please provide a Full Name.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col-md-6">
            <label for="validationCustom03">User Email</label>
            <input type="email" class="form-control" id="validationCustom03" name="email" placeholder="exapmle@example.com" value="{{$user->email}}" required>
            <div class="invalid-feedback">
                Please provide a valid Email.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

    </div>

    <button class="btn btn-primary mt-3" type="submit">Update User</button>
</form>


    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
<script>
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
