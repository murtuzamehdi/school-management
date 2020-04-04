<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

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
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Search By Class And Section</h4>
              @php
                    $classes = App\Classes::all();
              @endphp
                <form class="form-inline style-form" method="POST" action="/searchresult" accept-charset="UTF-8" enctype="multipart/form-data">
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
            @if(isset($result))
                
            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Year</th>
                      <th class="hidden-phone">Marks</th>
                      <th class="hidden-phone">Session</th>
                      {{-- <th class="hidden-phone">Amount</th> --}}
                      {{-- <th class="hidden-phone">Action</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($result as $results)
                      
                      <tr class="gradeX">
                        <td>{{$results->student_name}}</td>
                        <td>{{$results->year}}</td>
                        <td class="hidden-phone">{{$results->marks}}</td>
                        <td class="hidden-phone">{{$results->exam}}</td>
                          {{-- <td>
                          <button type="submit" class="btn btn-success btn-xs viewBtn" data-toggle="modal" data-target="#myModal" id="{{$employees->employee_id}}"><i class=" fa fa-eye"></i></button>
                          <a href="employee/{{$employees->employee_id}}/edit"><button class="btn btn-primary btn-xs"><i class=" fa fa-pencil"></i></button></a>
                          <button class="btn btn-danger btn-xs"><i class=" fa fa-trash-o"></i></button>
                          </td> --}}
                        </tr>
                        
                        @endforeach
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
  @include('layouts.scripts')

</body>

</html>
