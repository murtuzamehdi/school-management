<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.header')
  @toastr_css
</head>
<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        @include('layouts.topNav&Sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div style="overflow:scroll;" class="site-wrap">
              <table style="margin-bottom:5%;" class="animated slideInUp" id="customers">
                <tr>
                  <th>Section</th>
                  <th>{{$students[0]->section}}</th>
                </tr>
          
                <tr>
                  <td>Class</td>
                <td>{{$students[0]->class_name}}</td>
                </tr>
              </table>
          
          
                <table class="animated slideInUp" id="customers">
                  <tr>
                     <th>Agent Name</th>
                     <th>Action</th>
                  </tr>
                  @php
                    $a = 1;
                  @endphp
                  
                  <form method='post' action="/attendance/save_attendance" accept-charset="UTF-8" class="myForm">
                  {{csrf_field()}}  
                  @foreach($students as $student)
                    <fieldset id="group_Murtuza Mehdi">
                      <tr>
                        <td>
                          <label class="name" name="name[{{$a}}]">{{$student->student_name}}</label>
                          <input type="hidden" value="{{$student->student_id}}" name="student_id[{{$a}}]">
                          <input type="hidden" value="{{$student->class_id}}" name="class_id[{{$a}}]">
                          <input type="hidden" value="{{$student->student_roll_no}}" name="student_roll_no[{{$a}}]">
                        </td>
                        
                        <td>
                            <div class="container">
                                <div class="form-check">
                                  <label class="form-check-label" for="radio1">
                                    <input type="radio" class="radio_btn form-check-input" name="status[{{$a}}]" value="present" checked>Present
                                  </label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label" for="radio2">
                                    <input type="radio" class="radio_btn form-check-input" name="status[{{$a}}]" value="absent">Absent
                                  </label>
                                </div>
                            </div>
                        </td> 
                      </tr>
                    </fieldset>          
                        @php
                          $a++;
                        @endphp
                  @endforeach
                  </table>
          
                  <button style="background-color:#81a433;margin-left:45%;margin-top:5%;border-style:none;" name="save" type="submit" class="btn btn-primary sava_attendance">Save</button>
                  </form>
          
                  
                  <button style="margin-top:5%;" type="button" class="btn btn-danger"><a style="text-decoration:none; color: white;"  href="/lead">Back</a></button>
                  
          
          
          
          </div>
          </div>
        </div>
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
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  @include('layouts.scripts')
  @jquery
  @toastr_js
  @toastr_render
</body>

</html>
