<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <div class="container">
            <div class="row">
                <h2>Challan</h2>	
                    <div class="table-responsive">
                        <div class="table-responsive custom_datatable">						
                            <table class="table table-bordered" style="width:100%;margin:auto;text-align:left;" >
                                <tbody>		
                                    {{-- <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> --}}
								
                                    <tr>
                                        <td rowspan="2" colspan="2"><h3 style="margin:8px 0 0 63px;">Happy Palace</h3></td>
                                        <td>Challan NO</td>
                                        <td colspan="2">123456</td>
                                    </tr>									
                                    <tr>
                                    <td>Date</td>  
                                    <td colspan="2">{{$date}}</td>  											
                                    </tr>
                                    {{-- <tr>
                                        <td colspan="2">Bank Name / Branch : </td>
                                        <td colspan="3">Bank Name / Branch Name Here</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td colspan="2">Tax Period</td>
                                        <td colspan="3">20_ _ to 20_ _</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Name</td>
                                    <td colspan="1">{{$genrateslip[0]->student_name}}</td>
                                        <td width="150">Due-Date</td>
                                        <td colspan="2">{{$genrateslip[0]->due_date}}</td>
                                        {{-- <td width="50">RS</td> --}}
                                        {{-- <td width="50">00</td> --}}
                                    </tr>	
                                    <tr>
                                        <td rowspan="6">Santhosh Poojary Keyyur</td>
                                        <td rowspan="6" width="50%">PERLAGURY CROSS ROAD.<br> 3rd Block , Floore #24 <br> Ass 123456, PID -123456	</td>
                                        <td>Annual Charges</td>
                                        <td colspan="2">{{$genrateslip[0]->annual_charges}}</td>	
                                        {{-- <td>00</td> --}}
                                    </tr>
                                    <tr>	
                                        <td>Lab Charges</td>
                                        <td colspan="2">{{$genrateslip[0]->lab}}</td>
                                        {{-- <td>00</td> --}}
                                    </tr>
                                    <tr>
                                        <td>Tution Fees</td>
                                        <td colspan="2">{{$genrateslip[0]->tution_fee}}</td>
                                        {{-- <td>00</td> --}}
                                    </tr>
                                    <tr>
                                        <td>Arrears</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Year </td>
                                        <td colspan="2">{{$genrateslip[0]->year}}</td>
                                        {{-- <td>00</td> --}}
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td colspan="2">{{$genrateslip[0]->amount}}</td>
                                        {{-- <td>00</td> --}}
                                    </tr>
                                    <tr>
                                    <td colspan="5">Amount in words : {{$amountinwords}} only</td>
                                    </tr>
                                    <tr>
                                        <td>Signature</td>
                                        <td>Account #</td>
                                        <td>Principle signature</td>
                                        <td colspan="2">Cashier Signature <br><br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
        
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