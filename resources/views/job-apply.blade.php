@extends('layout.web')

@section('title', 'Job Apply')

@section('main')

@include('shared.job-header')

  <section class="job-post-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="single-page-right">
                    <div class="sig-page-heading">
                        <h5>Application Form</h5>
                    </div>
                    <div class="application-form-wrap">
                        <form method="post" action="{{ route('web.job.apply.store', $job) }}" enctype="multipart/form-data" class="apply-form-body">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name <span>*</span></label>
                                        <input type="text" id="txtFName" name="fname" value="" class="form-control" placeholder="First Name" required="" autofocus="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name <span>*</span></label>
                                        <input type="text" name="lname" value="" class="form-control" placeholder="Last Name" id="txtLName" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span>*</span></label>
                                        <input type="date" name="date_of_birth" value="" class="form-control " placeholder="Last Name" id="txtDOB" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Gender <span>*</span></label>
                                        <select name="gender" class="form-select form-control" required="">
                                            <option selected="">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Nationality <span>*</span></label>
                                        <input type="text" name="nationality" value="" class="form-control " placeholder="Nationality" id="txtNationality" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone <span>*</span></label>
                                        <input type="text" name="phone" value="" class="form-control " placeholder="Phone" id="txtPhone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">E-mail Address <span>*</span></label>
                                        <input type="email" name="email" value="" class="form-control " placeholder="E-mail Address" id="txtEmail" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Drop Your CV/Cover
                                            Letter<span>*</span></label>
                                        <input type="file" name="cv" class="form-control file-input" required="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="apply-form-btn text-center">
                                        <button type="submit" name="btnSubmit" class="btn common-btn"> Send
                                            Application </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
