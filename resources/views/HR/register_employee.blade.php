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
              <form class="form-horizontal style-form" method="POST" action="/addemployee" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_designation">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Marital Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="marital_status">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 col-sm-2 control-label">{{ __('E-Mail Address') }}</label>

                  <div class="col-sm-10">
                      <input id="employee_email" type="email" class="form-control @error('email') is-invalid @enderror" name="employee_email" value="{{ old('email') }}" required autocomplete="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_address">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="employee_gender">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">CNIC</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_cnic">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="employee_phone_number">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Hire date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="employee_hireDate">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date Of Birth</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="employee_dob">
                  </div>
                </div>
                @php
                 $branch  = App\Branches::all(); 
                @endphp
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Branch</label>
                <div class="col-sm-10">
                  <select class="form-control" name="branch_id">
                  <option value=""></option>
                  @foreach ($branch as $item)
                  <option value="{{$item->branch_id}}">{{$item->branch_name}}</option>
                  @endforeach
                    </select>
                </div>
              </div>
                @php
                 $depart  = App\Department::all(); 
                @endphp
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Department</label>
                <div class="col-sm-10">
                  <select class="form-control" name="dept_id">
                  <option value=""></option>
                  @foreach ($depart as $department)
                  <option value="{{$department->dept_id}}">{{$department->dept_name}}</option>
                  @endforeach
                    </select>
                </div>
              </div>
                @php
                //  $userIds = [1, 2, 3, 4];
                 $role  = DB::table('roles')->where('name','!=', 'Parent')
                 ->where('name','!=', 'Student')
                 ->get(); 
                @endphp
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Role</label>
                <div class="col-sm-10">
                  <select class="form-control" name="role_id">
                  <option value=""></option>
                  @foreach ($role as $roles)
                  <option value="{{$roles->id}}">{{$roles->name}}</option>
                  @endforeach
                    </select>
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
>
        <!-- /row -->
      
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
