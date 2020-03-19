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
                @foreach ($employee as $employees)
                <form class="form-horizontal style-form" method="POST" action="/employee/{{$employees->employee_id}}" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="employee_name" value="{{$employees->employee_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="employee_designation" value="{{$employees->employee_designation}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="employee_address" value="{{$employees->employee_address}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="employee_gender" value="{{$employees->employee_gender}}">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">CNIC</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="employee_cnic" value="{{$employees->employee_cnic}}">
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="employee_phone_number" value="{{$employees->employee_phone_number}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Hire date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="employee_hireDate" value="{{$employees->employee_hireDate}}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Date Of Birth</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="employee_dob" value="{{$employees->employee_dob}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Department</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="department" value="{{$employees->dept_id}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-theme">Submit</button>
            </form>
            @endforeach
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
