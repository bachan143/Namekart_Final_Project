<!-- Container start -->
   <div class="container">
          <!-- Fulll Body -->
       <div id="full-body" class="">

            <!-- Header Part -->
       <div class="haeder">


              <div id="head-first"  class="row">    <!--start domain name -->
               <div id="pre" class="col-md-6">
                   <h6 class="pt-2">The Premier Domain Name Aftermarket Service</h6>
                  </div>
                  <div class="col-md-6 pt-1" style="text-align:right;">
                      UserGuide:<a href="#"><img src="india.png"   alt="" width="20px" height="20px"></a>
                      <span class="support" >?support</span>
                  </div>

                </div>           <!-- end domain name -->
               <div id="head-second" class="row">    <!--indian flag-->
                 <div class="col-md-12">
                   <img src="namejet1.png" class="img-thumbnail" alt="">

                 </div>

               </div>   <!--end indian flag-->
               <!-- Start NavigationBar -->
               <div class="row">
                     <div class="col-md-4">     <!--  Logo start -->
                      <nav class="navbar navbar-expand-lg navbar-dark">
                        <img src="namekart.png" class="img-thumbnail" alt="" style="width:200px;height:100px;">

                        </nav>

                     </div>
                     <div class="col-md-8 pt-2">
                         <nav class="navbar navbar-expand-lg navbar-dark mainnav" style="background-color:#4775d1;">
                           <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                             <span class="navbar-toggler-icon"></span>
                               </button>
                               <div class="collapse navbar-collapse" id="myMenu">
                                     <ul class="navbar-nav pl-5 custom-nav ml-auto">
                                       <li class="nav-item custom-nav">
                                         <a href="Auctions.php" class="nav-link ">Auction</a>
                                       </li>
                                       <li class="nav-item">
                                         <a href="Featured.php" class="nav-link ">Backorders</a>
                                       </li>
                                       <li class="nav-item">
                                         <a href="Download.php" class="nav-link">Settings</a>
                                       </li>

                                       <li class="nav-item">
                                         <a href="MyAccount.php" class="nav-link">My Account</a>
                                       </li>


                                     </ul>
                                     </div>

                                </nav>
                               <div class="row">        <!--  Seach box -->
                                  <div class="col-md-8 mt-2">
                                    <form class="form-inline col s12" action="/action_page.php">
                                 <input class="form-control col s12 16 mr-sm-2" type="text" placeholder="Search Domains">
                                    <button class="btn btn-success" type="submit">Search</button>
                                     </form>

                                  </div>
                                  <div class="col-md-4 mt-2">      <!-- Account-->
                                    <a href="MyAccount.php">Create an Account | </a>
                                    <a href="MyAccount.php">Log In</a>

                                   </div>                   <!--end Account    -->

                                 </div>                        <!--    end Search box -->


                      </div>          <!-- end Link -->

                </div>        <!-- end Navigation -->


       </div>            <!-- End   Header -->




                          <div class="body_part">
                              <div class="row">
                                   <div class="col-md-3">
                                     <div class="sidenav">
                                       <a href="scheduler.php">Scheduler</a>
                                       <a href="#WatchList">WatchList</a>
                                       <a href="#Bidding">Bidding</a>
                                       <a href="#BulkActions">BulkActions</a>
                                         <a href="#Reports">Reports</a>
                                           <a href="#Logs">Logs</a>
                                     </div>

                                   </div>
                                   <div class="col-md-9">
                                            <h3>My Auctions</h3>
                                      <div class="row">
                                          <div class="col-md-12">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ViewAll</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Today Only</a>
                                                </li>

                                              </ul>

                                          </div>
                                          <div  id="" style="height:50px;border:1px solid  #33cc33; background:#009900; width:98%;">


                                            <p class="pt-3 pl-3"><a href="#"  style="border:1px solid #6666ff;background:#6666ff; color:white;font-weight: bold;">Bid on Selected</a></p>

                                          </div>


                                          <div class="mainpart_table">
                                             <div class="container">
                                                <div class="row justify-content center">
                                                   <div class="col-sm-12 bg-light rounded my-2 py-2 table-responsive">


                                                         <table class="table table-bordered table-striped table-hover table-sm" id="example1">
                                                         <thead id="table_anchor">
                                                           <tr >
                                                             <th></th>
                                                             <th>   <a href="#">Domain</a></th>
                                                             <th>  <a href="#">Type</a></th>
                                                             <th> <a href="#">   Bidders</a> </th>
                                                             <th>  <a href="#">   My Bid</a></th>
                                                             <th> <a href="#">Min. Bid</a</th>
                                                             <th> <a href="#">  Current Bid</a></th>
                                                             <th> <a href="#">Closing Time</a> </th>
                                                           </tr>
                                                         </thead>
                                                            <tbody>
                                                               <?php
                                                                 $conn=mysqli_connect("localhost","root","root","namejet");
                                                                 if(!$conn)
                                                                     die("connection failed".mysqli_connect_error());
                                                                     error_reporting(E_ALL & ~E_NOTICE);
                                                                       $sql="select domain_name,type,Bidders,My_Bid, Min_Bid,Current_Bid,Closing_Time from search";







                                                                 $res=mysqli_query($conn,$sql);
                                                                 if(mysqli_num_rows($res)>0)
                                                                 {

                                                                 while($row=mysqli_fetch_assoc($res)){
                                                               ?>
                                                               <tr id="table_anchor1">
                                                                  <td></td>
                                                                  <td> <a href="#">  <?= $row['domain_name'] ?> </a> </td>
                                                                  <td><?= $row['type']  ?>  </td>
                                                                  <td><?= $row['Bidders']  ?> </td>
                                                                  <td>$<?= $row['My_Bid']  ?> </td>
                                                                  <td>$<?= $row['Min_Bid']  ?> </td>
                                                                  <td>$<?= $row['Current_Bid']  ?>R </td>
                                                                  <td><?= $row['Closing_Time']  ?> </td>

                                                               </tr>
                                                               <?php }}

                                                                ?>
                                                            </tbody>

                                                         </table>
                                                   </div>



                                                </div>

                                             </div>

                               </div>






















                                          <div  id="" style="height:50px;border:1px solid  #33cc33; background:#009900; width:98%;">


                                            <p class="pt-3 pl-3"><a href="#"  style="border:1px solid #6666ff;background:#6666ff; color:white;font-weight: bold;">Bid on Selected</a></p>

                                          </div>

                                      </div>


                                   </div>

                              </div>

                          </div>









          <div class="footer" id="footer">   <!--Footer-->
            <hr>

            <div class="row">
              <div class="col-md-6">
                           <h5>© 2020 Nameket, All rights reserved.</h5>
                           <a href="#">Terms | </a>
                           <a href="#">Privacy |  </a>
                           <a href="#">Cookie Policy</a>
                           <img src="domain.gif" alt="" style="text-align:center">
              </div>
              <div class="col-md-6" style="text-align:right;">
                <a href="index.php">Home| </a>
                 <a href="Press-releases.php">Press Releases | </a>
                  <a href="About.php">About Us| </a>
                   <a href="Contact_Us.php">Contact Us| </a>
                    <a href="Help_Center.php">Help| </a>
                    <a href="SiteMap.php">Site Map</a>
                       <h6>Questions?Call Us At</h6>
                       <h5>1-866-462-3572</h5>
                       <p>Visit our<a href=""> Help Center</a> for simple and quick support.</p>
              </div>

            </div>

          </div>  <!-- End Footer-->












</div>
</div>







<script type="text/javascript">
            $(document).ready(function()
            {
            var table=$('#example1').DataTable(
                {

                });

                // Check box Selected



                          // Handle form submission event













            });

   </script>
