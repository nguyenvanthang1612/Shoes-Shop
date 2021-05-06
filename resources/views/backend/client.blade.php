@extends('backend.layouts.app');

@section('title')
    client table
@endsection

@section('content')
    <!--body wrapper start-->
    <div class="wrapper">
              
        <!--Start Page Title-->
         <div class="page-title-box">
              <h4 class="page-title">Data Table</h4>
              <ol class="breadcrumb">
                  <li>
                      <a href="#">Dashboard</a>
                  </li>
                  <li>
                      <a href="#">Table</a>
                  </li>
                  <li class="active">
                      Data Table
                  </li>
              </ol>
              <div class="clearfix"></div>
           </div>
            <!--End Page Title-->          
         
         
             <!--Start row-->
             <div class="row">
                 <div class="col-md-12">
                     <div class="white-box">
                         <h2 class="header-title">Basic example</h2>
                          <div class="table-responsive">
                           <table id="example" class="display table">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </thead>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot>
                                  <tbody>
                                      <tr>
                                          <td>Thomsen</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                      </tr>
                                      <tr>
                                          <td>Garrett Winters</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>63</td>
                                          <td>2011/07/25</td>
                                          <td>$170,750</td>
                                      </tr>
                                      <tr>
                                          <td>Eugene Kristiansen</td>
                                          <td>Junior Technical Author</td>
                                          <td>San Francisco</td>
                                          <td>66</td>
                                          <td>2009/01/12</td>
                                          <td>$86,000</td>
                                      </tr>
                                      <tr>
                                          <td>Odilian Gosselin</td>
                                          <td>Senior Javascript Developer</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2012/03/29</td>
                                          <td>$433,060</td>
                                      </tr>
                                      <tr>
                                          <td>Airi Satou</td>
                                          <td>Accountant</td>
                                          <td>Tokyo</td>
                                          <td>33</td>
                                          <td>2008/11/28</td>
                                          <td>$145,400</td>
                                      </tr>
                                      <tr>
                                          <td>Brielle Williamson</td>
                                          <td>UI Designer</td>
                                          <td>Ichae Semos</td>
                                          <td>61</td>
                                          <td>2012/12/02</td>
                                          <td>$372,000</td>
                                      </tr>
                                      <tr>
                                          <td>Herrod Chandler</td>
                                          <td>Magento Developer</td>
                                          <td>San Francisco</td>
                                          <td>59</td>
                                          <td>2012/08/06</td>
                                          <td>$137,500</td>
                                      </tr>
                                      <tr>
                                          <td>Henry Jurk</td>
                                          <td>UI Designer</td>
                                          <td>Tokyo</td>
                                          <td>55</td>
                                          <td>2010/10/14</td>
                                          <td>$327,900</td>
                                      </tr>
                                      <tr>
                                          <td>Colleen Hurst</td>
                                          <td>Javascript Developer</td>
                                          <td>San Francisco</td>
                                          <td>39</td>
                                          <td>2009/09/15</td>
                                          <td>$205,500</td>
                                      </tr>
                                      <tr>
                                          <td>John Klok</td>
                                          <td>Php Developer</td>
                                          <td>Edinburgh</td>
                                          <td>23</td>
                                          <td>2008/12/13</td>
                                          <td>$122,600</td>
                                      </tr>
                                      <tr>
                                          <td>Jena Gaines</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>30</td>
                                          <td>2008/12/19</td>
                                          <td>$90,560</td>
                                      </tr>
                                      <tr>
                                          <td>Quinn Flynn</td>
                                          <td>Admin Manager</td>
                                          <td>Edinburgh</td>
                                          <td>22</td>
                                          <td>2013/03/03</td>
                                          <td>$342,000</td>
                                      </tr>
                                      <tr>
                                          <td>Charde Marshall</td>
                                          <td>Wordpress Developer</td>
                                          <td>San Francisco</td>
                                          <td>36</td>
                                          <td>2008/10/16</td>
                                          <td>$470,600</td>
                                      </tr>
                                      <tr>
                                          <td>Haley Kennedy</td>
                                          <td>IOS Developer</td>
                                          <td>London</td>
                                          <td>43</td>
                                          <td>2012/12/18</td>
                                          <td>$313,500</td>
                                      </tr>
                                      <tr>
                                          <td>Tatyana Fitzpatrick</td>
                                          <td>Wordpress Developer</td>
                                          <td>London</td>
                                          <td>19</td>
                                          <td>2010/03/17</td>
                                          <td>$385,750</td>
                                      </tr>
                                      <tr>
                                          <td>Williams</td>
                                          <td>Marketing Designer</td>
                                          <td>London</td>
                                          <td>66</td>
                                          <td>2012/11/27</td>
                                          <td>$198,500</td>
                                      </tr>
                                      <tr>
                                          <td>Johnson</td>
                                          <td>IT Manager</td>
                                          <td>Ichae Semos</td>
                                          <td>64</td>
                                          <td>2010/06/09</td>
                                          <td>$725,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gloria Little</td>
                                          <td>Systems Administrator</td>
                                          <td>Ichae Semos</td>
                                          <td>59</td>
                                          <td>2009/04/10</td>
                                          <td>$237,500</td>
                                      </tr>
                                      <tr>
                                          <td>Bradley Greer</td>
                                          <td>Php Developer</td>
                                          <td>London</td>
                                          <td>41</td>
                                          <td>2012/10/13</td>
                                          <td>$132,000</td>
                                      </tr>
                                      <tr>
                                          <td>Mark Doe</td>
                                          <td>Personnel Lead</td>
                                          <td>Edinburgh</td>
                                          <td>35</td>
                                          <td>2012/09/26</td>
                                          <td>$213,500</td>
                                      </tr>
                                      <tr>
                                          <td>Jenette Caldwell</td>
                                          <td>Development Lead</td>
                                          <td>Ichae Semos</td>
                                          <td>30</td>
                                          <td>2011/09/03</td>
                                          <td>$345,000</td>
                                      </tr>
                                      <tr>
                                          <td>Larry</td>
                                          <td>Java Developer</td>
                                          <td>Ichae Semos</td>
                                          <td>40</td>
                                          <td>2009/06/25</td>
                                          <td>$675,000</td>
                                      </tr>
                                      <tr>
                                          <td>Caesar Vance</td>
                                          <td>Sales Manager</td>
                                          <td>Ichae Semos</td>
                                          <td>21</td>
                                          <td>2011/12/12</td>
                                          <td>$106,450</td>
                                      </tr>
                                      <tr>
                                          <td>Jacob Doe</td>
                                          <td>Magento Developer</td>
                                          <td>Sidney</td>
                                          <td>23</td>
                                          <td>2010/09/20</td>
                                          <td>$85,600</td>
                                      </tr>
                                      <tr>
                                          <td>Angelica Ramos</td>
                                          <td>HTML Developer</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2009/10/09</td>
                                          <td>$1,400,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gavin Joyce</td>
                                          <td>Developer</td>
                                          <td>Edinburgh</td>
                                          <td>42</td>
                                          <td>2010/12/22</td>
                                          <td>$32,575</td>
                                      </tr>
                                      <tr>
                                          <td>Jennifer Chang</td>
                                          <td>Wordpress Developer</td>
                                          <td>Singapore</td>
                                          <td>28</td>
                                          <td>2010/11/14</td>
                                          <td>$357,650</td>
                                      </tr>
                                      <tr>
                                          <td>Brenden Wagner</td>
                                          <td>Php Developer</td>
                                          <td>San Francisco</td>
                                          <td>28</td>
                                          <td>2011/06/07</td>
                                          <td>$206,850</td>
                                      </tr>
                                      <tr>
                                          <td>John Doe</td>
                                          <td>Chief Operating Officer (COO)</td>
                                          <td>San Francisco</td>
                                          <td>48</td>
                                          <td>2010/03/11</td>
                                          <td>$850,000</td>
                                      </tr>
                                      <tr>
                                          <td>Shou Itou</td>
                                          <td>Regional Marketing</td>
                                          <td>Tokyo</td>
                                          <td>20</td>
                                          <td>2011/08/14</td>
                                          <td>$163,000</td>
                                      </tr>
                                      <tr>
                                          <td>Michelle House</td>
                                          <td>UI Designer</td>
                                          <td>Sidney</td>
                                          <td>37</td>
                                          <td>2011/06/02</td>

                                          <td>$95,400</td>
                                      </tr>
                                      <tr>
                                          <td>Suki Burks</td>
                                          <td>Developer</td>
                                          <td>London</td>
                                          <td>53</td>
                                          <td>2009/10/22</td>
                                          <td>$114,500</td>
                                      </tr>
                                      <tr>
                                          <td>Prescott Bartlett</td>
                                          <td>Technical Author</td>
                                          <td>London</td>
                                          <td>27</td>
                                          <td>2011/05/07</td>
                                          <td>$145,000</td>
                                      </tr>
                                      <tr>
                                          <td>Gavin Cortez</td>
                                          <td>Team Leader</td>
                                          <td>San Francisco</td>
                                          <td>22</td>
                                          <td>2008/10/26</td>
                                          <td>$235,500</td>
                                      </tr>
                                      <tr>
                                          <td>Martena Mccray</td>
                                          <td>Post-Sales support</td>
                                          <td>Edinburgh</td>
                                          <td>46</td>
                                          <td>2011/03/09</td>
                                          <td>$324,050</td>
                                      </tr>
                                      <tr>
                                          <td>Unity Butler</td>
                                          <td>Marketing Designer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009/12/09</td>
                                          <td>$85,675</td>
                                      </tr>
                                      <tr>
                                          <td>Howard Hatfield</td>
                                          <td>Office Manager</td>
                                          <td>San Francisco</td>
                                          <td>51</td>
                                          <td>2008/12/16</td>
                                          <td>$164,500</td>
                                      </tr>
                                      <tr>
                                          <td>Hope Fuentes</td>
                                          <td>.Net Developer</td>
                                          <td>San Francisco</td>
                                          <td>41</td>
                                          <td>2010/02/12</td>
                                          <td>$109,850</td>
                                      </tr>
                                      <tr>
                                          <td>Vivian Harrell</td>
                                          <td>Financial Controller</td>
                                          <td>San Francisco</td>
                                          <td>62</td>
                                          <td>2009/02/14</td>
                                          <td>$452,500</td>
                                      </tr>
                                      <tr>
                                          <td>Timothy Mooney</td>
                                          <td>Office Manager</td>
                                          <td>London</td>
                                          <td>37</td>
                                          <td>2008/12/11</td>
                                          <td>$136,200</td>
                                      </tr>
                                      <tr>
                                          <td>Jackson Bradshaw</td>
                                          <td>Director</td>
                                          <td>Ichae Semos</td>
                                          <td>65</td>
                                          <td>2008/09/26</td>
                                          <td>$645,750</td>
                                      </tr>
                                      <tr>
                                          <td>Olivia Liang</td>
                                          <td>Support Engineer</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2011/02/03</td>
                                          <td>$234,500</td>
                                      </tr>
                                      <tr>
                                          <td>Bruno Nash</td>
                                          <td>Php Developer</td>
                                          <td>London</td>
                                          <td>38</td>
                                          <td>2011/05/03</td>
                                          <td>$163,500</td>
                                      </tr>
                                      <tr>
                                          <td>Sakura Yamamoto</td>
                                          <td>Support Engineer</td>
                                          <td>Tokyo</td>
                                          <td>37</td>
                                          <td>2009/08/19</td>
                                          <td>$139,575</td>
                                      </tr>
                                      <tr>
                                          <td>Thor Walton</td>
                                          <td>Developer</td>
                                          <td>Ichae Semos</td>
                                          <td>61</td>
                                          <td>2013/08/11</td>
                                          <td>$98,540</td>
                                      </tr>
                                      <tr>
                                          <td>Finn Camacho</td>
                                          <td>Support Engineer</td>
                                          <td>San Francisco</td>
                                          <td>47</td>
                                          <td>2009/07/07</td>
                                          <td>$87,500</td>
                                      </tr>
                                      <tr>
                                          <td>Serge Baldwin</td>
                                          <td>Joomla Developer</td>
                                          <td>Singapore</td>
                                          <td>64</td>
                                          <td>2012/04/09</td>
                                          <td>$138,575</td>
                                      </tr>
                                      <tr>
                                          <td>Zenaida Frank</td>
                                          <td>Php Developer</td>
                                          <td>Ichae Semos</td>
                                          <td>63</td>
                                          <td>2010/01/04</td>
                                          <td>$125,250</td>
                                      </tr>
                                      <tr>
                                          <td>Zorita Serrano</td>
                                          <td>Php Developer</td>
                                          <td>San Francisco</td>
                                          <td>56</td>
                                          <td>2012/06/01</td>
                                          <td>$115,000</td>
                                      </tr>
                                      <tr>
                                          <td>Jonathan Doe</td>
                                          <td>HR Manager</td>
                                          <td>Edinburgh</td>
                                          <td>43</td>
                                          <td>2013/02/01</td>
                                          <td>$75,650</td>
                                      </tr>
                                      <tr>
                                          <td>Cara Stevens</td>
                                          <td>Magento Developer</td>
                                          <td>Ichae Semos</td>
                                          <td>46</td>
                                          <td>2011/12/06</td>
                                          <td>$145,600</td>
                                      </tr>
                                      <tr>
                                          <td>Hermione Butler</td>
                                          <td>Wordpress Developer</td>
                                          <td>London</td>
                                          <td>47</td>
                                          <td>2011/03/21</td>
                                          <td>$356,250</td>
                                      </tr>
                                      <tr>
                                          <td>Frank Kristopoulos</td>
                                          <td>Systems Administrator</td>
                                          <td>London</td>
                                          <td>21</td>
                                          <td>2009/02/27</td>
                                          <td>$103,500</td>
                                      </tr>
                                      <tr>
                                          <td>Vestergaard</td>
                                          <td>Developer</td>
                                          <td>San Francisco</td>
                                          <td>30</td>
                                          <td>2010/07/14</td>
                                          <td>$86,500</td>
                                      </tr>
                                      <tr>
                                          <td>Andreasen</td>
                                          <td>Wordpress Developer</td>
                                          <td>Edinburgh</td>
                                          <td>51</td>
                                          <td>2008/11/13</td>
                                          <td>$122,000</td>
                                      </tr>
                                      <tr>
                                          <td>Laursen</td>
                                          <td>Javascript Developer</td>
                                          <td>Singapore</td>
                                          <td>29</td>
                                          <td>2011/06/27</td>
                                          <td>$122,000</td>
                                      </tr>
                                      <tr>
                                          <td>Poulsen</td>
                                          <td>Technical Support</td>
                                          <td>Ichae Semos</td>
                                          <td>27</td>
                                          <td>2011/01/25</td>
                                          <td>$112,000</td>
                                      </tr>
                                  </tbody>
                                 </table>  
                          </div>
                     </div>
                 </div>
             </div>
             <!--End row-->
      </div>
      <!-- End Wrapper-->
    <!--End main content -->
@endsection

