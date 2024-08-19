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
                                        <input type="text" id="txtFName" name="fname" value="{{ old('fname') }}" class="form-control" placeholder="First Name" required="" autofocus="">
                                        @error('fname')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name <span>*</span></label>
                                        <input type="text" name="lname" value="{{ old('lname') }}" class="form-control" placeholder="Last Name" id="txtLName" required="">
                                        @error('lname')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span>*</span></label>
                                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control " placeholder="Last Name" id="txtDOB" required="">
                                        @error('date_of_birth')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Gender <span>*</span></label>
                                        <select name="gender" class="form-select form-control" required="">
                                            <option value="" selected>Select Gender</option>
                                            <option value="1" {{ old('gender') == '1' ? 'selected' : '' }}>Male</option>
                                            <option value="2" {{ old('gender') == '2' ? 'selected' : '' }}>Female</option>
                                        </select>
                                        @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Nationality <span>*</span></label>
                                        <input type="text" name="nationality" value="{{ old('nationality') }}" class="form-control " placeholder="Nationality" id="txtNationality" required="">
                                        @error('nationality')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone <span>*</span></label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control " placeholder="Phone" id="txtPhone" required="">
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">E-mail Address <span>*</span></label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control " placeholder="E-mail Address" id="txtEmail" required="">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Drop Your CV/Cover
                                            Letter<span>*</span></label>
                                        <input type="file" name="cv" class="form-control file-input" required="">
                                        @error('cv')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
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
