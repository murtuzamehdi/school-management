<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    @include('layouts.topNav&Sidebar')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Components</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
              <form class="form-horizontal style-form" method="POST" action="/addparent" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <input type="text" name="role_id" value="6" hidden>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 col-sm-2 control-label">{{ __('Father E-Mail Address') }}</label>

                  <div class="col-sm-10">
                      <input id="father_email" type="email" class="form-control @error('email') is-invalid @enderror" name="father_email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_phone_number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_address">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father CNIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_cnic">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father Occupation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_occupation">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Father Annual Income</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="father_annual_income">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 col-sm-2 control-label">{{ __('Mother E-Mail Address') }}</label>

                  <div class="col-sm-10">
                      <input id="mother_email" type="email" class="form-control @error('email') is-invalid @enderror" name="mother_email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_phone_number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_address">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother CNIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_cnic">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother Occupation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_occupation">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mother Annual Income</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mother_annual_income">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 col-sm-2 control-label">{{ __('Password') }}</label>

                  <div class="col-md-10">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                  <label for="password-confirm" class="col-sm-2 col-sm-2 control-label">{{ __('Confirm Password') }}</label>

                  <div class="col-md-10">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>
                <button type="submit" class="btn btn-theme">Submit</button>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">

              <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
          <!-- CUSTOM TOGGLES -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="form_component.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.scripts')
</body>

</html>
