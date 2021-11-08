@extends('backend.layouts.app')

@section('title', 'Create Student Shift')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('student.fee.amount') }}">Fee Amount</a></li>
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
                                <h4>Edit Student Fee Amount</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <form class="needs-validation" novalidate
                            action="{{ route('student.fee.amount.update', $stu_fee_cat_amount_edit[0]->fee_cat_id) }}"
                            method="post">
                            @csrf
                            <div class="add_item">

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="validationCustom01">Fee Category</label>
                                        <select id="inputState" name="fee_cat_id" required class="form-control w-100">
                                            <option>Select Fee Category</option>

                                            @foreach ($fee_cat as $cat)

                                                <option value='{{ $cat->id }}'
                                                    {{ $stu_fee_cat_amount_edit[0]->fee_cat_id == $cat->id ? 'selected' : '' }}>
                                                    {{ $cat->name }}</option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">
                                            Please Select Fee Category.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>
                                @php
                                    //@dd($stu_fee_cat_amount_edit);
                                @endphp

                                @foreach ($stu_fee_cat_amount_edit as $edit)


                                    <div id="delete_whole_extra_item_add" class="delete_whole_extra_item_add">
                                        <div class="form-row mt-4">
                                            <div class="col-md-5">
                                                <label for="validationCustom01">Student Class</label>
                                                <select id="inputState" name="class_id[]" required
                                                    class="form-control w-100">
                                                    <option>Select Student Class</option>

                                                    @foreach ($classes as $class)

                                                        <option value='{{ $class->id }}'
                                                            {{ $edit->class_id == $class->id ? 'selected' : '' }}>
                                                            {{ $class->name }}</option>
                                                    @endforeach

                                                </select>
                                                <div class="invalid-feedback">
                                                    Please Select Student Class.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <label for="validationCustom03">Amount</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    name="amount[]" :value="old('amount')" value="{{ $edit->amount }}"
                                                    required>

                                                @error('amount')

                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <div class="invalid-feedback">
                                                    Please provide a valid Student Fee Category Name.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <span style="margin-top:34px" class="btn btn-primary mr-2 addeventmore"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-plus-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                                    </svg></span>

                                                <span style="margin-top:34px"
                                                    class="btn btn-danger mr-2 removeeventmore"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-minus-circle">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                                    </svg></span>
                                            </div>

                                        </div>
                                    </div>

                                @endforeach

                            </div>

                            <button class="btn btn-primary mt-3 " type="submit">Create Student Fee Category</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- extra --}}

    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add mt-4" id="delete_whole_extra_item_add">
                <div class="form-row">

                    <div class="col-md-5">
                        <label for="validationCustom01">Student Class</label>
                        <select id="inputState" name="class_id[]" required class="form-control w-100">
                            <option>Select Student Class</option>

                            @foreach ($classes as $class)

                                <option value='{{ $class->id }}'>{{ $class->name }}</option>
                            @endforeach

                        </select>
                        <div class="invalid-feedback">
                            Please Select Student Class.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div> <!-- End col-md-5 -->

                    <div class="col-md-5">

                        <label for="validationCustom03">Amount</label>
                        <input type="text" class="form-control" id="validationCustom03" name="amount[]"
                            :value="old('amount')" required>

                        @error('amount')

                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="invalid-feedback">
                            Please provide a valid Student Fee Category Name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div><!-- End col-md-5 -->

                    <div class="col-md-2">

                        <span style="margin-top:34px" class="btn btn-primary mr-2 addeventmore"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg></span>

                        <span style="margin-top:34px" class="btn btn-danger mr-2 removeeventmore"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-minus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg></span>

                    </div><!-- End col-md-2 -->




                </div>
            </div>
        </div>
    </div>

    {{-- extra --}}


@endsection
@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", '.removeeventmore', function(event) {
                console.log(event);
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter = 1
            });

        });

    </script>

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
