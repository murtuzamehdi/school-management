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
              <form class="form-horizontal style-form" method="POST" action="/class" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Class</label>
                  <div class="col-sm-10">
                  <input type="text" name="class_name" id="class" class="form-control">
                  </div>
                </div>
                @php
                   $subject = App\Subject::all();
                @endphp
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Subjects</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="subject_id" id="subject_id">
                        <option value=""></option>
                        @foreach ($subject as $subjectt)    
                       <option value="{{$subjectt->id}}">{{$subjectt->subject_name}}</option>
                        @endforeach
                        </select>
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
        <section id="main-content">
            <section class="wrapper">
              <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
              <div class="row mb">
                <!-- page start-->
                <div class="content-panel">
                  <div class="adv-table">
                    <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                      <thead>
                        <tr>
                          <th>Class</th>
                          <th>Subjects</th>
                          <th class="hidden-phone">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($classes as $class)
                              
                          <tr class="gradeX">
                              <td>{{$class->class_name}}</td>
                              <td>{{$class->subject_name}}</td>
                              <td>
                              <button type="submit" class="btn btn-success btn-xs viewBtn" data-toggle="modal" data-target="#myModal" id="{{$class->id}}"><i class=" fa fa-eye"></i></button>
                                <a href="employee/{{$class->id}}/edit"><button class="btn btn-primary btn-xs"><i class=" fa fa-pencil"></i></button></a>
                                  <button class="btn btn-danger btn-xs"><i class=" fa fa-trash-o"></i></button>
                              </td>
                          </tr>
                          
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- page end-->
              </div>
              <div class="container">
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-panel">
                              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                              <div class="form-horizontal style-form">
                                @csrf
                                <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="employee_name" id="employee_name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Desgnation</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" name="employee_designation" id="employee_designation">
                                  </div>
                                </div>
                                
                                {{-- <button type="submit" class="btn btn-theme">Submit</button> --}}
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              <!-- /row -->
            </section>
            <!-- /wrapper -->
          </section>
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