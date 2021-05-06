@extends('backend.layouts.app');

@section('title')
    client table
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
              <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Form Basic</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Form</a>
                        </li>
                        <li class="active">
                            Form Basic
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
           
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Select Fields</h2>
                       
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label class="col-md-2 control-label">Text</label>
                            <div class="col-md-10">
                              <input class="form-control" value="Some text value..." type="text">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                              <input id="example-email" name="example-email" class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                              <input class="form-control" value="password" type="password">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Static control</label>
                            <div class="col-sm-10">
                              <p class="form-control-static">email@example.com</p>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">Placeholder</label>
                            <div class="col-md-10">
                              <input class="form-control" placeholder="placeholder" type="text">
                            </div>
                          </div>
                          
                            <div class="form-group">
                            <label class="col-md-2 control-label">Readonly</label>
                            <div class="col-md-10">
                              <input class="form-control" readonly="" value="Readonly value" type="text">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">Disabled</label>
                            <div class="col-md-10">
                              <input class="form-control" disabled="" value="Disabled value" type="text">
                            </div>
                          </div>
                            
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Helping text</label>
                            <div class="col-sm-10">
                              <input class="form-control" placeholder="Helping text" type="text">
                              <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span> </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Input Select</label>
                            <div class="col-sm-10">
                              <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                          </div>
                          
							<div class="form-group">
                            <label class="col-sm-2 control-label">Input Select</label>
                            <div class="col-sm-10">
                              <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                          </div>                          
                          
							<div class="form-group">
                            <label class="col-sm-2 control-label">Multiple select</label>
                            <div class="col-sm-10">
                              <select multiple="" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                          </div>                          
                          
                          <div class="form-group">
                            <label class="col-md-2 control-label">Text area</label>
                            <div class="col-md-10">
                              <textarea class="form-control" rows="5"></textarea>
                            </div>
                          </div>
                          
                        </form>
                   </div>
                  </div>
              </div>
             <!--End row-->
             
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                 <div class="white-box">
                     <div class="col-md-6">
                       <h2 class="header-title">Input States</h2>
                        <form class="form-horizontal">
                            <div class="form-group has-success">
                                <label class="col-md-3 control-label" for="state-success">Success</label>
                                <div class="col-md-6">
                                    <input id="state-success" name="state-success" class="form-control" placeholder="..." type="text">
                                </div>
                            </div>


                            <div class="form-group has-warning">
                                <label class="col-md-3 control-label" for="state-warning">Warning</label>
                                <div class="col-md-6">
                                    <input id="state-warning" name="state-warning" class="form-control" placeholder="..." type="text">
                                </div>
                            </div>

                            <div class="form-group has-error">
                                <label class="col-md-3 control-label" for="state-danger">Danger</label>
                                <div class="col-md-6">
                                    <input id="state-danger" name="state-danger" class="form-control" placeholder="..." type="text">
                                </div>
                            </div>

                            <div class="form-group has-success has-feedback">
                                <label class="col-sm-3 control-label">Input with success </label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text">
                                    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-warning has-feedback">
                                <label class="col-sm-3 control-label">Input with warning </label>
                                <div class="col-sm-6">
                                    <input class="form-control inputmask" type="text">
                                    <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group has-error has-feedback">
                                <label class="col-sm-3 control-label">Input with error </label>
                                <div class="col-sm-6">
                                    <input class="form-control inputmask" type="text">
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                     <div class="col-md-6">
                        <h2 class="header-title">Input Sizes</h2>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-small">Small</label>
                                <div class="col-sm-6">
                                    <input id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-normal">Normal</label>
                                <div class="col-sm-6">
                                    <input id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="example-input-large">Large</label>
                                <div class="col-sm-6">
                                    <input id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Grid Sizes</label>
                                <div class="col-sm-4">
                                    <input class="form-control" placeholder=".col-sm-4" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-sm-5 col-sm-offset-3">
                                    <input class="form-control" placeholder=".col-sm-5" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-sm-6 col-sm-offset-3">
                                    <input class="form-control" placeholder=".col-sm-6" type="text">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <input class="form-control" placeholder=".col-sm-9" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
        			</div>
                  </div>
             </div>
             <!--End row-->

              <!--Start row-->
              <div class="row">
                  <div class="col-md-12">
                   <div class="white-box">
                       <h2 class="header-title"> Input Groups</h2>
                        <form class="form-horizontal">
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Basic examples</label>
                          <div class="col-sm-6">
                            <div class="input-group m-b-15"> <span class="input-group-addon">@</span>
                              <input placeholder="Username" class="form-control" type="text">
                            </div>
                            <div class="input-group m-b-15">
                              <input class="form-control" type="text">
                              <span class="input-group-addon">.00</span> </div>
                            <div class="input-group"> <span class="input-group-addon">$</span>
                              <input class="form-control" type="text">
                              <span class="input-group-addon">.00</span> </div>
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Sizing</label>
                          <div class="col-sm-6">
                            <div class="input-group input-group-lg m-b-15"> <span class="input-group-addon">@</span>
                              <input placeholder="Username" class="form-control" type="text">
                            </div>
                            <div class="input-group m-b-15"> <span class="input-group-addon">@</span>
                              <input placeholder="Username" class="form-control" type="text">
                            </div>
                            <div class="input-group input-group-sm"> <span class="input-group-addon">@</span>
                              <input placeholder="Username" class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Checkbox &amp; Radio</label>
                          <div class="col-sm-6">
                            <div class="input-group m-b-15"> <span class="input-group-addon">
                              <input type="checkbox">
                              </span>
                              <input class="form-control" type="text">
                            </div>
                            <div class="input-group"> <span class="input-group-addon">
                              <input type="radio">
                              </span>
                              <input class="form-control" type="text">
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Button addons</label>
                          <div class="col-sm-6">
                            <div class="input-group m-b-15"> <span class="input-group-btn">
                              <button type="button" class="btn btn-default">Go!</button>
                              </span>
                              <input class="form-control" type="text">
                            </div>
                            <div class="input-group m-b-15">
                              <input class="form-control" type="text">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-default">Go!</button>
                              </span> </div>
                            <div class="input-group m-b-15">
                              <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                              <input class="form-control" type="text">
                            </div>
                            <div class="input-group">
                              <input class="form-control" type="text">
                              <div class="input-group-btn">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Action <span class="caret"></span></button>
                                <ul class="dropdown-menu pull-right">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="form-group">
                          <label class="col-sm-3 control-label">Segmented buttons</label>
                          <div class="col-sm-6">
                            <div class="input-group m-b-15">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1"> <span class="caret"></span> </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                              <input class="form-control" type="text">
                            </div>
                            <div class="input-group">
                              <input class="form-control" type="text">
                              <div class="input-group-btn">
                                <button type="button" class="btn btn-default" tabindex="-1">Action</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1"> <span class="caret"></span> </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                  <li><a href="#">Action</a></li>
                                  <li><a href="#">Another action</a></li>
                                  <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        </form>
                   </div>
                  </div>
              </div>
              <!--End row-->


             <!--Start row-->
             <div class="row">
                <div class="col-md-12">
                 <div class="white-box">
                     <h2 class="header-title">Select Fields</h2>
                        <form class="form-horizontal">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">Select Sizing</label>
                        <div class="col-sm-5">
                        <select class="form-control input-sm m-b-15">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        </select>
                        <select class="form-control m-b-15">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        </select>
                        <select class="form-control input-lg">
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        </select>
                        </div>
                      </div>
                        
                        </form>
                       </div>
                   </div>
              </div>
             <!--End row-->
 
 
             <!--Start row-->
             <div class="row">
                 <div class="col-md-6">
                    <div class="white-box">
                      <h2 class="header-title">Basic Forms</h2>
                    <form>
                      <div class="form-group">
                        <label>Email address</label>
                        <input class="form-control"  placeholder="Enter email" type="email">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Password" type="password">
                      </div>
                      <div class="form-group">
                        <div class="checkbox primary">
							<input  type="checkbox" id="checkbox1"> <label for="checkbox1"> Remember me </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
               </div> <!--/.col-md-6-->
               
               
              <div class="col-md-6">
                   <div class="white-box">
                      <h2 class="header-title">Horizontal form</h2>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Re Password</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="Retype Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox primary">
									<input  type="checkbox" id="checkbox2"> <label for="checkbox2"> Remember me </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                     </form>
                    </div>
                  </div><!-- /.col-md-6-->
                  
              </div>
             <!--End row-->
			   
			    </div>
        <!-- End Wrapper-->
      <!--End main content -->
@endsection

