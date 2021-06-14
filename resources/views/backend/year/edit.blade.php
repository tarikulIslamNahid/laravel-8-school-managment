@extends('backend.layouts.app')

@section('title','Update Class')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('student.year')}}">Student Year</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Update</span></li>
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
                            <h4>Update Student Year</h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="widget-content widget-content-area">

<form class="needs-validation" novalidate action="{{route('student.year.update',$years->id)}}" method="post">
    @csrf

    <div class="form-row">
        <div class="col-md-12">
            <label for="validationCustom03">Student Year Name</label>
            <input type="text" class="form-control" id="validationCustom03" name="name"  value="{{$years->name}}"  required>

            @error('name')

            <span class="text-danger">{{ $message }}</span>
            @enderror

            <div class="invalid-feedback">
                Please provide a valid Class Name.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

    </div>

    <button class="btn btn-primary mt-3" type="submit">Update Student Year</button>
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
