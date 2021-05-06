@extends('backend.layouts.app');

@section('title')
    compose
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">Compose Mail</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="#">Dashboard</a>
                  </li>
                  <li>
                      <a href="#">Email</a>
                  </li>
                  <li class="active">
                      Compose Mail
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
     
            <!--Start row-->
              <div class="row">
                 <div class="col-md-12">
                 
                  
                 <div class="row">
                  <div class="col-md-3">
                    <a href="inbox.html" class="btn btn-primary outline-btn btn-block m-b-10">Back to Inbox</a>
                      <ul class="list-unstyled mailbox-nav">
                          <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success">4</span></a></li>
                          <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>
                          <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                          <li><a href="#"><i class="fa fa-exclamation-circle"></i>Spam</a></li>
                          <li><a href="#"><i class="fa fa-trash"></i>Trash</a></li>
                      </ul>
                  </div>
                  <div class="col-md-9">
                    <div class="white-box">
                      <div class="mailbox-content">
                      
                       <div class="mailbox-header">
                            <div class="compose-options">
                                  <div class="pull-right">
                                      <a href="inbox.html" class="btn btn-default"><i class="fa fa-trash m-r-5"></i>Discard</a>
                                  </div>
                           </div>
                      </div>
                      
                          <div class="compose-body">
                              <form class="row">
                                  <div class="form-group">
                                      <label for="to" class="col-md-2 control-label">To</label>
                                      <div class="col-md-10">
                                          <input type="text" class="form-control" id="to">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="subject" class="col-md-2 control-label">Subject</label>
                                      <div class="col-md-10">
                                          <input type="text" class="form-control" id="subject">
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="compose-message">
                              <div class="summernote"></div>
                          </div>
                          <div class="compose-options">
                              <div class="pull-right">
                                  <a href="inbox.html" class="btn btn-primary"><i class="fa fa-send"></i> Send</a>
                              </div>
                          </div>
                      </div>
                  </div>
                    </div>
                 </div>
                </div>
              </div>
              <!--End row-->
          
         
          </div>
  <!-- End Wrapper-->
<!--End main content -->
@endsection
    
    


        

