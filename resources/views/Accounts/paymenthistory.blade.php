<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
@include('layouts.header')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.topNav&Sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
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
                    <th>Name</th>
                    <th>Month</th>
                    <th class="hidden-phone">Due Date</th>
                    <th class="hidden-phone">Status</th>
                    <th class="hidden-phone">Amount</th>
                    {{-- <th class="hidden-phone">Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @foreach ($checkstatus as $checkstat)
                        
                    <tr class="gradeX">
                        <td>{{$checkstat->student_name}}</td>
                        <td>{{$checkstat->fee_month}}</td>
                        <td class="hidden-phone">{{$checkstat->due_date}}</td>
                        @if($checkstat->fee_status == 0)
                        <td class="center hidden-phone"><span class="label label-danger">unpaid</span></td>
                        @else
                        <td class="center hidden-phone"><span class="label label-success">paid</span></td>
                        @endif
                        <td class="center hidden-phone">{{$checkstat->current_ammount}}</td>
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
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="employee_phone_number" id="employee_phone_number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="employee_address" id="employee_address">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Hire Date</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="employee_hireDate" id="employee_hireDate">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">CNIC</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="employee_cnic" id="employee_cnic">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="employee_gender" id="employee_gender">
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Date Of Birth</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" name="employee_dob" id="employee_dob">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Marital Status</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marital_status" id="marital_status">
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
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
<script type="text/javascript">
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    }); 
    $(document).on('click','.viewBtn',function(){
      var id = $(this).attr('id');
        $.ajax({
        url: 'employee/fetchdata/'+ id ,
        method:'GET',
        dataType:'json',
        success:function(data)
        {
            // console.log(data);
          
        //   $('#user_id').val(data[0].id); 
          $('#employee_name').val(data[0].employee_name); 
          $('#employee_designation').val(data[0].employee_designation); 
          $('#employee_address').val(data[0].employee_address); 
          $('#employee_gender').val(data[0].employee_gender); 
          $('#employee_cnic').val(data[0].employee_cnic); 
          $('#employee_hireDate').val(data[0].employee_hireDate); 
          $('#employee_dob').val(data[0].employee_dob); 
          $('#marital_status').val(data[0].marital_status); 
          $('#employee_phone_number').val(data[0].employee_phone_number); 
          // var a = $("#dept_id").val();
          // var dept_id = data[0].dept_id;
          // console.log(a,dept_id);
          // if(a == dept_id){
          //     $("#dept_id").selectedInde();
          // }
          // $('#dept_id').append("<option selected>"+data[0].name+"</option>"); 
          // $('#password').val(data[0].password); 
          
          
        },
        error: function(e) {
          console.log(e);
        }
      });
    });

</script>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
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
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
    //   sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
    //   sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
