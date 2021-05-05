@extends('backend.layouts.app');

@section('title')
    index admin
@endsection

@section('content')
            <!--body wrapper start-->
            <div class="wrapper">
              
                <!--Start Page Title-->
                 <div class="page-title-box">
                      <h4 class="page-title">Profile</h4>
                      <ol class="breadcrumb">
                          <li>
                              <a href="#">Dashboard</a>
                          </li>
                          <li>
                              <a href="#">Pages</a>
                          </li>
                          <li class="active">
                              Profile
                          </li>
                      </ol>
                      <div class="clearfix"></div>
                   </div>
                    <!--End Page Title-->          
             
                   <!--Start row-->
                   <div class="row">
                       <div class="col-md-12">
                          <!-- Start cover-->
                           <div class="profile-cover">
                               <div class="overlay-profile"></div>
                                <div class="profile-inner">
                                    <div class="profile-info">
                                    
                                        <div class="profile-media">
                                           <img src="assets/images/profile-picture.png" alt="" />
                                        </div>
                                        
                                        <div class="profile-intro">
                                          <h4>Jonathan Doe</h4>
                                          <p>Wordpress Developer</p>
                                          <ul>
                                             <li> <i class="fa fa-map-marker"></i> Lorem ipsum, America   </li>
                                             <li> <i class="fa fa-envelope-o"></i> example@mail.com   </li>
                                          </ul>
                                        </div>
                                        
                                    </div> <!--/.profile-info-->
                                    
                                    <div class="profile-stats">
                                        <ul>
                                        
                                           <li>
                                              <h4>66</h4>
                                              <p>Friends</p>
                                           </li>
                                        
                                           <li>
                                              <h4>234</h4>
                                              <p>Photos</p>
                                           </li>
  
                                           <li>
                                              <h4>257</h4>
                                              <p>Followers</p>
                                           </li>
                                           
                                        </ul>
                                    </div>
                                    
                                    
                                </div>
                           </div>    
                           <!-- End cover-->
                           
                       </div>
                   </div>
                   <!--End row-->
             
  
                <!--Start row-->
                <div class="row">
                    <div class="col-md-8">
                      <div class="white-box">
                          <form>
                             <div class="form-group">
                                 <textarea rows="2" class="form-control" placeholder="Post a new message"></textarea>
                             </div>
                             
                             <input type="submit" value="Post" class="btn btn-primary pull-right">
                             
                              <ul class="nav nav-pills m-t-20 post-list">
                                  <li>
                                      <a href="#"><i class="fa fa-user"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fa fa-location-arrow"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class=" fa fa-camera"></i></a>
                                  </li>
                                  <li>
                                      <a href="#"><i class="fa fa-smile-o"></i></a>
                                  </li>
                              </ul>
                             
                          </form>
                      </div> <!--/.hite-box-->
                                        
                        <div class="white-box">
                            <div class="post-header">
                            <div class="post-author-media">
                                <img src="assets/images/profile-picture.png"  alt="">
                            </div>
                            
                            <div class="post-author">
                              <h4>Jonathan Doe</h4>
                              <p>2 hours ago</p>
                            </div>
                            </div> <!-- /.post-header-->
                            
                            <div class="post-desc">
                                <p>Lorem ipsum dolor sit amet, in per dicit graecis evertitur, sed ex labitur virtute neglegentur, quod zril decore ei qui. Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                            </div>
                            
                            <div class="comment-info">
                                <ul>
                                  <li> <a href="#"><i class="fa fa-thumbs-up"></i> Like (4)</a></li>
                                  <li> <a href="#"><i class="fa fa-comment"></i> Comment (8)</a></li>
                                  <li> <a href="#"><i class="fa fa-comment"></i> Share (12)</a></li>
                                </ul>
                            </div>
                           
                           
                           <div class="timeline-comment">
                               <img src="assets/images/profile-picture.png"  alt="">
                               <span>Jonathan Doe <small class="text-light">2 hours ago</small></span>
                               <div class="comment-text">
                                   <p> Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                               </div>
                           </div> <!--/.timeline-comment-->
                           
                           <div class="timeline-comment">
                               <img src="assets/images/profile-picture.png"  alt="">
                               <span>Jonathan Doe <small class="text-light">2 hours ago</small></span>
                               <div class="comment-text">
                                   <p> Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                               </div>
                           </div> <!--/.timeline-comment-->
                           
                            <textarea class="form-control" placeholder="Replay"></textarea>
                            
                        </div><!-- /.white-box-->
                        
                     
                        <div class="white-box">
                            <div class="post-header">
                            <div class="post-author-media">
                                <img src="assets/images/profile-picture.png"  alt="">
                            </div>
                            
                            <div class="post-author">
                              <h4>Jonathan Doe</h4>
                              <p>2 hours ago</p>
                            </div>
                            </div> <!-- /.post-header-->
                            
                            <div class="post-desc">
                                <p>Lorem ipsum dolor sit amet, in per dicit graecis evertitur, sed ex labitur virtute neglegentur, quod zril decore ei qui. Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                            </div>
                            
                            <div class="comment-info">
                                <ul>
                                  <li> <a href="#"><i class="fa fa-thumbs-up"></i> Like (4)</a></li>
                                  <li> <a href="#"><i class="fa fa-comment"></i> Comment (8)</a></li>
                                  <li> <a href="#"><i class="fa fa-comment"></i> Share (12)</a></li>
                                </ul>
                            </div>
                           
                           
                           <div class="timeline-comment">
                               <img src="assets/images/profile-picture.png"  alt="">
                               <span>Jonathan Doe <small class="text-light">2 hours ago</small></span>
                               <div class="comment-text">
                                   <p> Epicurei intellegat nec ei. Sed id doctus insolens pericula, sea suas nostrud accusamus.</p>
                               </div>
                           </div> <!--/.timeline-comment-->
                           
                            <textarea class="form-control" placeholder="Replay"></textarea>
                            
                        </div><!-- /.white-box-->
                                              
                    </div> <!--/.col-md-8-->
                    
                    
                    <div class="col-md-4">
                        <div class="white-box">
                          <h2 class="header-title">Skills</h2>
                              <p>HTML5</p>
                              <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                  </div>
                              </div>
                              <p>CSS3</p>
                              <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                  </div>
                              </div>
                              <p>Bootstrap</p>
                              <div class="progress progress-xs">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                  </div>
                              </div>
                        </div> <!--/.white-box-->
                        
                        
                        <div class="white-box">
                          <h2 class="header-title">About</h2
                          ><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque incidunt cumque, dolore eveniet porro asperiores itaque! Eligendi minus cupiditate molestiae praesentium, facilis, neque saepe, soluta sapiente aliquid modi sunt.</p>
                        </div> <!--/.white-box-->
                        
                        <div class="white-box">
                          <h2 class="header-title">Team Members</h2>
                         <div class="friend-list">
                            <ul>
                              <li> <a href="" >  <img src="assets/images/users/avatar-1.jpg"  alt="friend"/> </a> </li>
                              <li> <a href="" >  <img src="assets/images/users/avatar-2.jpg"  alt="friend"/> </a> </li>
                              <li> <a href="" >  <img src="assets/images/users/avatar-3.jpg"  alt="friend"/> </a> </li>
                               <li> <a href="" >  <img src="assets/images/users/avatar-4.jpg"  alt="friend"/> </a> </li>
                               <li> <a href="" >  <img src="assets/images/users/avatar-5.jpg"  alt="friend"/> </a> </li>
                               <li> <a href="" >  <img src="assets/images/users/avatar-6.jpg"  alt="friend"/> </a> </li>
                               <li> <a href="" >  <img src="assets/images/users/avatar-7.jpg"  alt="friend"/> </a> </li>
                               <li> <a href="" >  <img src="assets/images/users/avatar-8.jpg"  alt="friend"/> </a> </li>
                            </ul>
                         </div>
                        </div> <!--/.white-box-->
                        
                        
                    </div> <!--/.col-md-4-->
                    
                </div>
                <!--End row-->
             
             
             
                  </div>
          <!-- End Wrapper-->
@endsection  


