<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles link ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

</head>

<body>   
    


    <!-- =============== Navigation ================ -->
    <div class="cont123">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <!-- <span class="sjeclogo">
                            <img src=".//assets/imgs/sjec-logo.png" alt="" >
                        </span> -->
                        
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">projects</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">feedback</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
           
        <!-- ========================= Main topbar ==================== -->
        <header>
        <div class="main1">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>

                 <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="container">
              <aside></aside>
          <main>
            <h1>Attendance</h1>
            
            <div class="subjects">
                
                <div class="eg">
                    <span class="material-icons-sharp">architecture</span>
                    <h3>subject1</h3>
                          <?php
                          require 'counts1.php';
                          ?>        
                          </div>

                <div class="mth">
                    <span class="material-icons-sharp">functions</span>
                    <h3>subject2</h3>
                    <?php
                          require 'counts2.php';
                          ?>  
                </div>


                <div class="cs">
                    <span class="material-icons-sharp">computer</span>
                    <h3>subject3</h3>
                    <?php
                          require 'counts3.php';
                          ?>  
                </div>

                <div class="cg">
                    <span class="material-icons-sharp">dns</span>
                    <h3>subject4</h3>
                    <?php
                          require 'counts4.php';
                          ?>  
                   
                </div>


                <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>subject5</h3>
                    <?php
                          require 'counts5.php';
                          ?>  
                
            </div>


            
            <div class="net">
                    <span class="material-icons-sharp">router</span>
                    <h3>subject6</h3>
                    <?php
                          require 'counts6.php';
                          ?>  
                
            </div>

            </div>
            

            <!-- timetable -->
            <div class="timetable" id="timetable">
                <div>
                    <span id="prevDay">&lt;</span>
                    <h2>Today's Timetable</h2>
                    <span id="nextDay">&gt;</span>
                </div>
                <span class="closeBtn" onclick="timeTableAll()">X</span>
                <table>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Room No.</th>
                            <th>Subject</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </main>    


        

        <!-- announcements -->

        <div class="right">
            <div class="announcements">
                <h2>Announcements</h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>Academic</b> Summer</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Co-curricular</b> Global .</p>
                        <small class="text-muted">10 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Examination</b> Examination.</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
            </div>


            <!------leave------>

            <div class="leaves">
                <h2>Teachers on leave</h2>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-2.jpeg" alt=""></div>
                    <div class="info">
                        <h3>t1</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-3.jpg" alt=""></div>
                    <div class="info">
                        <h3>t2</h3>
                        <small class="text-muted">Half Day</small>
                    </div>
                </div>
                <div class="teacher">
                    <div class="profile-photo"><img src="./images/profile-4.jpg" alt=""></div>
                    <div class="info">
                        <h3>t3</h3>
                        <small class="text-muted">Full Day</small>
                    </div>
                </div>
            </div>







    
    
        
 
           
    <!-- =========== Scripts =========  -->
    <script src="assets/js/timeTable.js"></script>
    <script src="assets/js/main.js"></script>
    
    
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>