@extends('backend.layouts.app');

@section('title')
    index admin
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
                <!--Start Page Title-->
                 <div class="page-title-box">
                      <h4 class="page-title">Inbox</h4>
                      <ol class="breadcrumb">
                          <li>
                              <a href="#">Dashboard</a>
                          </li>
                          <li>
                              <a href="#">Email</a>
                          </li>
                          <li class="active">
                              Inbox
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
                                <a href="compose.html" class="btn btn-primary outline-btn btn-block m-b-10">Compose</a>
                                <ul class="list-unstyled mailbox-nav">
                                  <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox 
                                  <span class="badge badge-success">4</span></a></li>
                                  <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>
                                  <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                  <li><a href="#"><i class="fa fa-exclamation-circle"></i>Spam</a></li>
                                  <li><a href="#"><i class="fa fa-trash"></i>Trash</a></li>
                                </ul>
                          </div>
                          
                           <div class="col-md-9">
                           <div class="white-box">
                              <div class="mailbox-content">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th colspan="1" class="hidden-xs">
                                            <div class="checkbox">
                                               <input type="checkbox" class="check-mail-all">
                                                <label></label>
                                              </div>
                                          </th>
                                          <th class="text-right" colspan="5">
                                              <a class="btn btn-primary outline-btn m-r-10"  title="Refresh"><i class="fa fa-refresh"></i></a>
                                              
                                              <div class="btn-group m-r-sm mail-hidden-options">
                                                  <div class="btn-group">
                                                      <a class="btn btn-primary outline-btn  m-r-10 dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                          <li><a href="#">Social</a></li>
                                                          <li><a href="#">Forums</a></li>
                                                          <li><a href="#">Updates</a></li>
                                                          <li class="divider"></li>
                                                          <li><a href="#">Spam</a></li>
                                                          <li><a href="#">Trash</a></li>
                                                          <li class="divider"></li>
                                                          <li><a href="#">New</a></li>
                                                      </ul>
                                                  </div>
                                                  <div class="btn-group">
                                                      <a class="btn btn-primary outline-btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                          <li><a href="#">Work</a></li>
                                                          <li><a href="#">Family</a></li>
                                                          <li><a href="#">Social</a></li>
                                                          <li class="divider"></li>
                                                          <li><a href="#">Primary</a></li>
                                                          <li><a href="#">Promotions</a></li>
                                                          <li><a href="#">Forums</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Jacob
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              21 march
                                          </td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 march
                                          </td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Adobe
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                              <i class="fa fa-paperclip"></i>
                                          </td>
                                          <td>
                                              18 march
                                          </td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Apple
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                              <i class="fa fa-paperclip"></i>
                                          </td>
                                          <td>
                                              16 Oct</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Marry
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                              <i class="fa fa-paperclip"></i>
                                          </td>
                                          <td>
                                              12 June</td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Marry
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              12 June</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Marry
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Marry
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Marry
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Zorita Serrano
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Zorita Serrano
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="uread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Williams
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Williams
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star icon-state-warning"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Williams
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                              <i class="fa fa-paperclip"></i>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="unread">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Williams
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              Lorem Ipsum is simply dummy text of the and typesetting
                                          </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                      <tr class="read">
                                          <td class="hidden-xs">
                                             <div class="checkbox">
                                               <input type="checkbox" class="checkbox-mail" >
                                                <label></label>
                                              </div>
                                          </td>
                                          <td class="hidden-xs">
                                              <i class="fa fa-star"></i>
                                          </td>
                                          <td class="hidden-xs">
                                              Mark Doe
                                          </td>
                                          <td>
                                              There are many variations of passages of Lorem Ipsum </td>
                                          <td>
                                          </td>
                                          <td>
                                              20 April</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>
                              
                              <div class="col-md-12">    
                               <div class="row">
                                <div class="col-md-7"> Showing 1 - 15 of 200 </div>
                                <div class="col-md-5">
                                  <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-primary outline-btn m-r-5"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn btn-primary outline-btn"><i class="fa fa-angle-right"></i></button>
                                  </div>
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

        


