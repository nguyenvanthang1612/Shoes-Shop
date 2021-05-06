@extends('backend.layouts.app');

@section('title')
    client table
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
                <!--Start Page Title-->
                 <div class="page-title-box">
                      <h4 class="page-title">Invoice</h4>
                      <ol class="breadcrumb">
                          <li>
                              <a href="#">Dashboard</a>
                          </li>
                          <li>
                              <a href="#">Pages</a>
                          </li>
                          <li class="active">
                              Invoice
                          </li>
                      </ol>
                      <div class="clearfix"></div>
                   </div>
                    <!--End Page Title-->          
             
                    
                  <!--Start row-->  
                  <div class="row">
                     <div class="col-md-12">
                        <div class="white-box">
                            <h3><b>INVOICE</b> <span class="pull-right">#123456</span></h3>
                            <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="pull-left">
                           
                            <h3> <strong>Meter Admin</strong></h3>
                            <p class="text-muted m-l-5">C - 201,Lorem ipsum , <br>
                             labitur virtute neglegentur, <br>
                              At omnis principes, <br>
                              salutatus consequuntur</p>
                           
                          </div>
                          <div class="pull-right text-right">
                            
                            <h3>To,</h3>
                            <h4 class="font-bold">Lorem ipsum dolor sit amet</h4>
                            <p class="text-muted m-l-30">D 234, lorem ipsum, <br>
                              vix detraxit suavitate ad, <br>
                              Vim omittam scaevola, <br>
                              cotidieque</p>
                           
                            
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="table-responsive m-t-40">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center">#</th>
                                  <th>Description</th>
                                  <th class="text-right">Quantity</th>
                                  <th class="text-right">Unit Cost</th>
                                  <th class="text-right">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="text-center">1</td>
                                  <td>Mobile</td>
                                  <td class="text-right">3 </td>
                                  <td class="text-right"> $12 </td>
                                  <td class="text-right"> $36</td>
                                </tr>
                                <tr>
                                  <td class="text-center">2</td>
                                  <td>Ear Phone</td>
                                  <td class="text-right">2</td>
                                  <td class="text-right"> $200 </td>
                                  <td class="text-right"> $400 </td>
                                </tr>
                                <tr>
                                  <td class="text-center">3</td>
                                  <td>Pen Drive</td>
                                  <td class="text-right"> 4 </td>
                                  <td class="text-right"> $30</td>
                                  <td class="text-right"> $1200 </td>
                                </tr>
                                <tr>
                                  <td class="text-center">4</td>
                                  <td>Notebook</td>
                                  <td class="text-right"> 1 </td>
                                  <td class="text-right">$10 </td>
                                  <td class="text-right"> $10 </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right m-t-30 text-right">
                            <p>Sub - Total amount: $16,46</p>
                            <p>Tax : N/A </p>
                            <hr>
                            <h3><b>Total :</b> $16,46</h3>
                          </div>
                          <div class="clearfix"></div>
                          <hr>
                          <div class="text-right">
                            <button class="btn btn-primary" type="submit"> Proceed to payment </button>
                            <button onclick="javascript:window.print();" class="btn btn-warning btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                          </div>
                        </div>
                      </div>
            </div>
                      </div>
                  </div>
                  <!--End row-->
                    
                  </div>
          <!-- End Wrapper-->
@endsection

