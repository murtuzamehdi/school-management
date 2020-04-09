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
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Search By Class And Section</h4>
              @php
                    $classes = App\Classes::all();
              @endphp
                <form class="form-inline style-form" method="POST" action="/timetable" accept-charset="UTF-8" enctype="multipart/form-data">
                  @csrf
                <div class="form-group">
                  <select class="form-control" name="class_id">
                    <option></option> 
                     @foreach ($classes as $class)        
                        <option value="{{$class->class_id}}">{{$class->class_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" name="section">
                    <option></option>        
                    @foreach ($classes as $class)        
                    <option value="{{$class->section}}">{{$class->section}}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="fa fa-filter btn btn-theme"></button>
              </form>
            </div>
            @if(isset($timetable))   
            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr>
                      {{-- <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th> --}}
                      <th>Subject</th>
                      <th>Class</th>
                      <th class="hidden-phone">Year</th>
                      <th class="hidden-phone">Exam</th>

                      <th class="hidden-phone">Date</th>
                      <th class="hidden-phone">Start Time</th>
                      <th class="hidden-phone">End Time</th>
                      {{-- <th class="hidden-phone">Action</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $a = 1;
                  @endphp
                      <form action="/createtimetable" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                      @csrf
                        @foreach ($timetable as $timetables)
                      
                      <tr class="gradeX">
                        {{-- <td><input type="checkbox" name="selected-check" value="{{$student->student_id}}" /></td> --}}
                        <td>{{$timetables->subject_name}}</td>
                        <td>{{$timetables->class_name}}</td>
                        <td><input type="text" name="yearofexam[{{$a}}]"></td>
                        <td>
                            <select class="form-control" name="exam[{{$a}}]">
                                <option value="Mid-Term">Mid-Term</option> 
                                <option value="Final-Term">Final-Term</option>
                            </select>
                        </td>
                        <td><input type="date" name="date[{{$a}}]"></td>
                        <td><input type="time" name="start_time[{{$a}}]"></td>
                        <td><input type="time" name="end_time[{{$a}}]"></td>
                        <input type="hidden" name="class_id[{{$a}}]" value="{{$timetables->class_id}}">
                        <input type="hidden" name="subject_id[{{$a}}]" value="{{$timetables->subject_id}}">

                        {{-- <td class="hidden-phone">{{$results->marks}}</td> --}}
                        {{-- <td class="hidden-phone">{{$results->exam}}</td> --}}
                          {{-- <td>
                          <button type="submit" class="btn btn-success btn-xs viewBtn" data-toggle="modal" data-target="#myModal" id="{{$student->student_id}}"><i class=" fa fa-eye"></i></button>
                          <a href="student/{{$student->student_id}}/report"><button class="btn btn-primary btn-xs"><i class=" fa fa-pencil"></i></button></a>
                          <button class="btn btn-danger btn-xs"><i class=" fa fa-trash-o"></i></button>
                          </td> --}}
                        </tr>
                        @php
                          $a++;
                        @endphp
                        @endforeach
                        <input type="submit">
                        </form>
                  </tbody>
                </table>
              </div>
            </div>
            @endif
            <!-- /form-panel -->
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
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
 <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
 <script src="lib/jquery.scrollTo.min.js"></script>
 <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
 <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
 <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
 <!--common script for all pages-->
 <script src="lib/common-scripts.js"></script>
 <!--script for this page-->
 

@jquery
@toastr_js
@toastr_render

</body>

</html>
