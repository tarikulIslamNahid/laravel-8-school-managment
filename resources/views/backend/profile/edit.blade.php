@extends('backend.layouts.app')

@section('title','User Profile Update')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('profile.view')}}">Profile</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Update</span></li>
@endsection
@section('style')
<link href="{{asset('admin')}}/assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            <h4>Edit Profile</h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">

<form class="needs-validation" novalidate action="{{route('profile.update',$user->id)}}" method="post" enctype='multipart/form-data' >
    @csrf
    <div class="form-row mb-4">

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
    <div class="form-row">
        <div class="col-md-6">

                <label for="phone">User Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="019......." value="{{$user->phone}}" required>
                <div class="invalid-feedback">
                    Please provide Your Phone Number.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>

        </div>
        <div class="col-md-6">
            <label for="address">User Address</label>
            <input type="text" class="form-control" id="address" name="address"  value="{{$user->address}}" >
            <div class="invalid-feedback">
                Please provide Your Address.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>


    <div class="form-row mt-4">
        <div class="col-md-6">
            <label for="phone">User Gender</label>
            <select id="inputState" name="gander" value="" required class="form-control">
                <option>Choose...</option>
                <option value='Male' {{$user->gander=='Male' ? 'selected' :''}} >Male</option>
                <option value='Female' {{$user->gander=='Female' ? 'selected' :''}}  >Female</option>
            </select>
            <div class="invalid-feedback">
                Please Select Gender.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="address">User Profile</label>
            <input type="file" id='image' class="form-control" name="profile_photo_path">

            .<div class="form-group">
          <img id='showImg' src="{{(!empty($user->profile_photo_path)) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('admin/assets/img/boy.png')}}" width="100px" height="100px" alt="">
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
<!--  END CONTENT AREA  -->

@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
        let reader = new FileReader();
        reader.onload = function(e){
            $('#showImg').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });
});
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
