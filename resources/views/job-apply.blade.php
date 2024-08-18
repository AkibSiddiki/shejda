@extends('layouts.web')

@section('title', 'Job Apply')

@section('main')

<section class="page-hero-area" style="background-image: url(./image/bg/banner5.jpg)">
    <div class="hero-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-area">
            <h1>Career</h1>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Career</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="job-post-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="single-page-right">
                    <div class="sig-page-heading">
                        <h5>Application Form</h5>
                    </div>
                    <div class="application-form-wrap">
                        <form method="post" action="" class="apply-form-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name <span>*</span></label>
                                        <input type="text" id="txtFName" name="Name" value="" class="form-control" placeholder="First Name" required="" autofocus="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name <span>*</span></label>
                                        <input type="text" name="txtLName" value="" class="form-control" placeholder="Last Name" id="txtLName" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth <span>*</span></label>
                                        <input type="date" name="txtDOB" value="" class="form-control " placeholder="Last Name" id="txtDOB" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Gender <span>*</span></label>
                                        <select name="txtGender" class="form-select form-control" required="">
                                            <option selected="">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Nationality <span>*</span></label>
                                        <input type="text" name="txtNationality" value="" class="form-control " placeholder="Nationality" id="txtNationality" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone <span>*</span></label>
                                        <input type="text" name="txtPhone" value="" class="form-control " placeholder="Phone" id="txtPhone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">E-mail Address <span>*</span></label>
                                        <input type="email" name="txtEmail" value="" class="form-control " placeholder="E-mail Address" id="txtEmail" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="">Drop Your CV/Cover
                                            Letter<span>*</span></label>
                                        <input type="file" name="txtSoundClip" class="form-control file-input" required="">
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
