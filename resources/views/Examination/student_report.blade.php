<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
<style>
    html {
    font-family:arial;
    font-size: 18px;
  }

  td {
    border: 1px solid #726E6D;
    padding: 15px;
  }

  thead{
    font-weight:bold;
    text-align:center;
    background: #625D5D;
    color:white;
  }

  table {
    border-collapse: collapse;
  }

  .footer {
    text-align:right;
    font-weight:bold;
  }

  tbody >tr:nth-child(odd) {
    background: #D1D0CE;
  }

</style>

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
      <h3><i class="fa fa-angle-right"></i>Report Card Of {{$results[0]->student_name}}</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <table>
                <thead>
                  <tr>
                    <td colspan="3">Course </td>
                    <td rowspan="2"> Class </td>
                    <td rowspan="2"> Year </td>
                    <td colspan="2"> Grade </td>
                  </tr>
                  <tr>
                    <td>id </td>
                    <td colspan="2"> Name </td>
                    <td> Marks </td>
                    <td> Obtain Marks </td>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                        
                    <tr>
                    <td>{{$result->subject_id}}</td>
                        <td colspan="2">{{$result->subject_name}}</td>
                        <td>{{$result->class_name}}</td>
                        <td>{{$result->year}}</td>
                        <td>{{$result->marks}}</td>
                        <td>{{$result->obtain_marks}}</td>
                    </tr>
                    @endforeach
                  <tr>
                </tbody>
                <tfoot>
                  
                  <tr>
                    <td></td>
                    <td colspan="4" class="footer">Total</td>
                    <td>{{$marks}}</td>
                  <td colspan="2">{{$obtain_marks}}</td>
                  </tr>
                  <tr>
                    <td colspan="4" class="footer">Percentage</td>
                  <td colspan="3">{{$percent}}%</td>
                  </tr>
              </table>
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
