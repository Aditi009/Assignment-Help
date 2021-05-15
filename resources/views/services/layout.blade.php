<!D<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>@yield('title')</title>
    <style>

    .topnav1 {
      overflow: hidden;
      background-color: white;
    }

    .topnav1 a {
      float: left;
      display: block;

      color: #31b8f5;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .active1 {
      background-color: white;
      color: #31b8f5;
    }

    .topnav1 .icon {
      display: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown1 {
      padding-top: 8px;
      padding-left: 12px;
      overflow: hidden;
      border: none;

    }

    .dropdown2 {
      padding-top: 8px;
      padding-left: 12px;
      overflow: hidden;
      border: none;

    }


    .dropdown .dropbtn {
      font-size: 17px;
      border: none;
      outline: none;
      color: #31b8f5;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown1 .dropbtn1 {
      font-size: 17px;
      border: none;
      outline: none;
      padding-left: 14px;

      color: #31b8f5;

      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown2 .dropbtn2 {
      font-size: 17px;
      border: none;
      outline: none;

      color: #31b8f5;

      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content1 {
      display: none;
      position: relative;
      background-color: #f9f9f9;
      min-width: 160px;

      z-index: 5;
    }

    .dropdown-content2 {
      display: none;
      position: relative;
      background-color: #f9f9f9;
      min-width: 160px;

      z-index: 5;
    }

    .dropdown-content a {
      float: none;
      color: #31b8f5;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content1 a {
      float: none;
      color: #31b8f5;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content2 a {
      float: none;
      color: #31b8f5;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
      background-color: white;
      color: #31b8f5;
    }

    .dropdown-content a:hover {
      background-color: white;
      color: #31b8f5;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown1:hover .dropdown-content1 {
      display: block;
    }

    .dropdown2:hover .dropdown-content2 {
      display: block;
    }

    @media screen and (max-width: 600px) {

      .topnav1 a:not(:first-child),
      .dropdown .dropbtn {
        display: none;
      }

      .topnav1 a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 867px) {
      .topnav1.responsive {
        position: relative;
        margin-top: 50px;

      }


      .topnav1.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav1.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      .topnav1.responsive .dropdown {
        float: none;
      }

      .topnav1.responsive .dropdown-content {
        position: relative;
      }

      .topnav1.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
    @media screen and (min-width: 867px) {
     #myTopnav{
          display: none;
     }
    }

    ul li{
         line-height: 1.4;
    }


  .top_nav {
                    padding: 20px;
               }

               .top_nav_left_company_name {
                    font-size: 17px;
                    text-align: center;
                    color: #808080;
                    font-weight: 700;
               }

               .logo {
                    height: 40px;
               }

               .top_nav_right_align_content {
                    text-align: center;
               }

               .top_nav_login_button {
                    padding: 6px;
                    font-size: 12px;
                    font-weight: 700;
               }

               .top_nav_mob_no {
                    padding: 8px;
                    font-size: 16px;
                    color: #808080;
               }

               .top_nav_getassist {
                    padding: 6px;
                    font-size: 12px;
                    font-weight: 700;
               }

               .australia_no {
                    text-align: center;
               }

               .nav_content {
                    padding-bottom: 20px;
               }

               .nav_content li {
                    padding-left: 30px;
                    font-size: 13px;
                    list-style: none;
                    float: left;
                    text-transform: uppercase;
               }

               .nav_content li a {
                    color: #808080;
                    letter-spacing: 1px;
                    font-weight: 550;
               }

               .mobile_nav {
                    display: none;
                    z-index: 1;
               }

               .mobile_nav_logo {
                    height: 40px;
                    left: 1%;
                    padding-top: 10px;
                    z-index: 1;
                    position: fixed;
               }

               .mobile_nav_button {
                    right: 1%;
                    z-index: 1;
                    font-size: 25px;
                    padding: 10px;
                    color: red;
                    position: fixed;
               }

               .mobile_view_get_assignment {
                    padding: 5px;
                    font-size: 10px;
                    right: 20%;
                    top: 1.8%;
                    color: #fcfcfc;
                    position: fixed;
                    background-color: #0093AF;
                    border-radius: 4px;
                    border: 2px solid #0093AF;

               }

               .themepage {
                    background-image: url(androidback.png);
               }

               .theme_image {
                    position: absolute;
                    z-index: -1;
                    width: 100%;
                    height: 450px;
               }

               .theme_assignment_heading {
                    text-align: center;
                    color: #fcfcfc;
                    font-weight: 800;
               }

               .theme_assignment_para {
                    text-align: center;
                    color: #fcfcfc;
                    font-weight: 700;
               }

               .mobile_themepage {
                    display: none;
               }

               .mobile_view_form {
                    padding-left: 50px;
                    padding-right: 30px;
                    text-align: center;
                    overflow-x: hidden;
                    width: 100%;
               }

               .deadline_time {
                    height: 33px;
                    border-radius: 5px;
                    width: 100%;
                    border: 2px solid #fcfcfc;
               }

               .get_assist {
                    font-size: 16px;
                    padding: 10px;
                    border-radius: 10px;
                    background-color: red;
                    color: #fcfcfc;
                    border: 2px solid red;
               }

               .get_assist:hover {
                    background-color: #000000;
               }

               .menu {
                    padding-top: 15px;
                    background-color: #f5fcfc;
                    display: none;
                    color: #000000;
                    z-index: 5;
               }

               .menu li {
                    padding-left: 0%;
                    margin-left: 0%;
                    padding-right: 10px;
                    text-transform: none;
                    ;
                    color: #000000;
                    float: none;
                    padding-bottom: 5px;
               }

               .nav-submenu {
                    margin-left: 76%;
                    width: 300px;
                    display: none;
                    min-height: 96%;
                    background-color: #fcfcfc;
                    color: #000000;
               }

               .nav-submenu1 {
                    padding-top: 8px;
                    display: none;
                    position: absolute;
                    margin-left: 65%;
                    min-height: 100%;
                    width: 100%;
                    background-color: #fcfcfc;
                    color: #000000;
                    top: 0%;
               }

               .first-chiild .nav-submenu {
                    display: none;
               }

               .services_list:hover .menu {
                    position: absolute;
                    display: block;
               }

               .services_list:hover .menu .nav-item a:hover {
                    color: green;
                    text-decoration: none !important;
               }

               .services_list .nav-item:hover .nav-submenu {
                    display: block;
                    position: absolute;
                    top: 4%;
                    padding-top: 8px;
               }

               .nav-submenu .nav-item:hover .nav-submenu1 {
                    display: block;
               }

               .request_call_back {
                    border-radius: 5px;
                    padding: 10px;
                    background-color: red;
                    color: #fcfcfc;
               }

               .counter_head_div {
                    padding-top: 500px;
                    ;
               }

               .counter_div {
                    text-align: center;
                    padding: 20px;
               }

               .counter_inner_div {
                    padding-top: 13%;
                    background-color: #F8F8FF;
                    height: 200px;
               }

               .counter_content {
                    font-size: 20px;
                    color: #808080;
               }

               .services_div {
                    text-align: center;
                    padding: 20px;
               }

               /*this is sticky navbar*/
               .fixed-top {
                    padding-right: 20px;
                    padding-left: 20px;
                    position: fixed;
                    top: 0%;
                    left: 0%;
                    right: 0%;
                    display: block;
                    background-color: #fcfcfc;
                    box-shadow: 0 8px 6px -6px grey;
                    z-index: 1;
               }

               .sticky_navbar {
                    display: none;
               }

               .sticky_list li {
                    padding: 15px;
                    list-style: none;
                    float: left;
               }

               @media only screen and (max-width: 1151px) {
                    .theme_image {
                         height: 550px;
                    }

                    .counter_head_div {
                         padding-top: 600px;
                    }
               }

               @media only screen and (max-width: 867px) {
                    .top_nav {
                         display: none;
                    }

                    .nav {
                         display: none;
                    }

                    .mobile_nav {
                         position: fixed;
                         display: block;
                         background-color: #000000;
                    }
               }

               @media only screen and (max-width: 767px) {
                    .counter_head_div {
                         padding-top: 20%;
                    }
               }

               @media only screen and (max-width: 511px) {
                    .themepage {
                         display: none;
                    }

                    .mobile_themepage {
                         display: block;
                    }
               }

               @media only screen and (max-width: 380px) {
                    .theme_assignment_heading {
                         font-size: 25px;
                    }

                    .theme_image {
                         height: 600px !important;
                    }
               }

               .m54 {
                    margin-left: auto;
                    position: absolute;
               }


      /*this is sticky navbar*/
      .fixed-top {
        padding-right: 20px;
        padding-left: 20px;
        position: fixed;
        top: 0%;
        left: 0%;
        right: 0%;
        display: block;
        background-color: #fcfcfc;
        box-shadow: 0 8px 6px -6px grey;
        z-index: 1;
      }

      .sticky_navbar {
        display: none;
      }

      .sticky_list .sticky_list {
        padding: 15px;
        list-style: none;
        float: left;
      }

      /*  social                         */
       .far {
        padding: 12px;
        font-size: 20px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
      }

      .fa:hover {
        opacity: 0.7;
      }

      .fa-facebook {
        background: #808080;
        color: white;
      }

      .fa-twitter {
        background: #808080;
        color: white;
      }

      .fa-linkedin {
        background: #808080;
        color: white;
      }

      .fa-instagram {
        background: #808080;
        color: white;
      }

      /*  footer                    */
      .footer {
        padding-left: 20px;
      }

      .footer_heading {
        color: #fcfcfc;
        font-weight: 700;
        font-size: 23px;
      }

      .footer a {
        color: #fcfcfc;
        text-decoration: none !important;
        cursor: pointer;
      }

      /*    login modal                                  */



      /* Set a style for all buttons */
      .cancel_btn {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 90px;
      }

      .submit_btn {
        background-color: red;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 110px;
      }

      .cancel_btn:hover {
        opacity: 0.8;
      }

      .submit_btn:hover {
        opacity: 0.8;
      }
      .fb {
        background-color: #3B5998;
        color: white;
        padding: 5px;
        width: 220px;
        border-radius: 5px;
      }

      .google {
        background-color: #dd4b39;
        color: white;
        padding: 5px;
        width: 220px;
        border-radius: 5px;
      }

      .google:hover {
        opacity: .7;
      }

      .fb:hover {
        opacity: .7;
      }


      /* Extra styles for the cancel button */

      /* Center the image and position the close button */


      img.avatar {
        width: 40%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }


      /* The Modal (background) */
      .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 3% auto 17% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        max-width: 500px;
        /* Could be more or less, depending on screen size */
      }

      .content {
        max-width: 400px;
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0)
        }

        to {
          -webkit-transform: scale(1)
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0)
        }

        to {
          transform: scale(1)
        }
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }
      }

      /*    end modal                                             */

      @media only screen and (max-width: 1151px) {
        .theme_image {
          height: 550px;
        }

        .counter_head_div {
          padding-top: 600px;
        }
      }

      @media only screen and (max-width: 867px) {
        .top_nav {
          display: none;
        }

        .nav {
          display: none;
        }

        .mobile_nav {
          position: fixed;
          display: block;
          background-color: #000000;
        }
      }

      @media only screen and (max-width: 767px) {
        .counter_head_div {
          padding-top: 20%;
        }
      }

      @media only screen and (max-width: 511px) {
        .themepage {
          display: none;
        }

        .mobile_themepage {
          display: block;
        }
      }

      @media only screen and (max-width: 380px) {
        .theme_assignment_heading {
          font-size: 25px;
        }

        .theme_image {
          height: 600px !important;
        }
      }
      @media  (max-width: 970px) {
           #sticky_navbar{
                display: none;
           }

      }
      @media  (max-width: 860px) {
           .nav {
                display: none;


           }

      }


    </style>
  </head>

  <body>
    @yield('header')
    <div id="id01" class="modal">
      <div class="modal-content animate">
        <form action="/action_page.php" method="post">
          <div class="imgcontainer" style="text-align:center;">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <br><br>
          </div>

          <div class="container" style="text-align:center;max-width:500px;">
            <a href="#" style="text-decoration:none;" class="fb btn">
              <i class="fa fa-facebook fa-fw" style="background-color: #3B5998;color:white;"></i> Login with Facebook
            </a><br><br><br>
            <a href="#" style="text-decoration:none;" class="google btn">
              <i class="fa fa-google fa-fw"></i> Login with Google
            </a>
          </div>

          <div class="container" style="width:100%;">
            <button class="cancel_btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid top_nav">
      <div class="col-xl-6 col-lg-5 col-md-2 top_nav_left_company_name">
        <img src="{{ asset('images/1ss.png') }}" class="logo">
      </div>
      <div class="col-xl-6 col-lg-7 col-md-10 top_nav_right_align_content">
        <ul style="width:auto;">
          <li style="list-style:none;float:left;padding-top:0px;"><span class="text-lighter hidden-sm-down px-20 top_nav_mob_no"><i class="fa fa-phone"></i>+91-9119857034</span></li>
          <li style="float:left;list-style:none;"><span class="text-lighter hidden-sm-down px-20 top_nav_mob_no"><i class="fa fa-phone"></i>+63-9119857034</span></li>
          <li style="float:left;list-style:none;padding-left:10px;"><a class="btn btn-sm btn-primary hidden-sm-down mr-4 top_nav_login_button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#">Log in | Sign Up</a></li>
          <li style="float:left;list-style:none;padding-left:10px;"><a class="btn btn-sm btn-primary mr-4 top_nav_getassist" href="newassignment" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Order Now</a></li>
        </ul>
      </div>
    </div>

  <div class="topnav1" id="myTopnav">
    <a href="Home" style="padding-bottom: 0px;">Home </a>
    <div class="dropdown">

      <button class="dropbtn" herf="Services" style="padding-bottom: 0px;"> Services
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">

        <div class="dropdown1">
          <button class="dropbtn1" > Assignment Writing
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">
            <div class="dropdown2">
              <button class="dropbtn2">Academic Writing Service
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="assignment_provider">Assignment Provider</a>
                <a href="assignment_assistance">Assignment Assistance</a>
                <a href="assignment_help_online">Assignment Help Online</a>
                <a href="HND_assignment_help">HND Assignment Help</a>
                <a href="spss_assignment_help">SPSS Assignment Help</a>
                <a href="solve_my_assignment">Solve My Assignment</a>
                <a href="buy_assignments_online">Buy Assignments Online</a>
                <a href="assignment_paper_help">Assignment Paper Help</a>
                <a href="assignment_cover_page">Assignment Cover Page</a>
                <a href="urgent_assignment_help">Urgent Assignment Help</a>
                <a href="perdisco_assignment_help">Perdisco Assignment Help</a>
                <a href="make_my_assignment">Make My Assignment</a>
                <a href="college_assignment_help">College Assignment Help</a>
                <a href="get_assignment_help">Get Assignment Help</a>
                <a href="do_my_assignment">Do My Assignment</a>
                <a href="all_assignment_help">All Assignment Help</a>
                <a href="pay_for_assignment_help">Pay For Assignment Help</a>
                <a href="cheap_assignment_help">Cheap Assignment Help</a>
                <a href="instant_assignment_help">Instant Assignment Help</a>
                <a href="powerpoint_presentation_online">Powerpoint Presentation Service</a>
                <a href="student_assignment_help">Student Assignment Help</a>
                <a href="study_help_online">Study Help Online</a>
                <a href="write_my_assignment">Write My Assignment</a>
                <a href="personal_statement_writing">Personal Statement Writing</a>
                <a href="assignment_help_tutors">Assignment Help Tutors</a>
                <a href="TAFE_assignment_help">TAFE Assignment Help</a>
                <a href="do_assignment_for_me">Do Assignment For Me</a>
                <a href="narrative_writing_help">Narrative Writing help</a>
                <a href="assignment_writing_tips">Assignment Writing Tips</a>
                <a href="academic_assignment_help">Academic Assignment Help</a>
                <a href="student_assignment_help">Student Assignment Help</a>
                <a href="university_assignment_help">University Assignment Help</a>
                <a href="a2z">a2z Assignment Help</a>
                <a href="total_assignment_help">Total assignment help</a>
                <a href="world_no_1_assignment_help">World No 1 Assignment Help</a>

              </div>


            </div>

            <div class="dropdown2">
              <button class="dropbtn2">Management
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Project_Management_Assignment_Help">Project Risk Management Assignment Help</a>
                <a href="Strategic_Management_Assignment_help">Strategic Management Assignment Help</a>
                <a href="Marketing_Management_Assignment_Help">Marketing Management Assignment Help
                </a>
                <a href="Conflict_Management_Assignment_Help">Conflict Management Assignment Help
                </a>
                <a href="Operations_Management_Assignment_Help">Operations Management Assignment Help
                </a>
                <a href="Corporate_Strategy_Assignment_Help">Corporate Strategy Assignment Help
                </a>
                <a href="Change_Management_Assignment_Help">Change Management Assignment Help
                </a>
                <a href="Supply_Chain_Management_Assignment_Help">Supply Chain Management Assignment Help
                </a>
                <a href="Managerial_Economics_Assignment_Help">Managerial Economics Assignment Help
                </a>
                <a href="Project_Management_Assignment_Help">Project Management Assignment Help
                </a>
                <a href="Market_Analysis_Assignment_Help">Market Analysis Assignment Help
                </a>
                <a href="Strategic_Marketing_Assignment_Help">Strategic Marketing Assignment Help
                </a>
                <a href="Human_Resource_Assignment_Help">Human Resource Assignment Help
                </a>
                <a href="Marketing_Research_Assignment_Help">Marketing Research Assignment Help
                </a>
                <a href="Business_Statistics_Assignment_Help">Business Statistics Assignment Help
                </a>
                <a href="Consumer_Behavior_Assignment_Help">Consumer Behavior Assignment Help
                </a>
                <a href="Business_Development_Assignment_Help">Business Development Assignment Help
                </a>
                <a href="CRM_Assignment_Help">CRM Assignment Help
                </a>
                <a href="MBA_Assignment_Help">MBA Assignment Help
                </a>
                <a href="Statistics_Assignment_Help">Statistics Assignment Help
                </a>
                <a href="Management_Assignment_Help">Management Assignment Help
                </a>
                <a href="Operation_Management_Assignment_Help">Operation Assignment Help
                </a>
                <a href="Business_Assignment_Help">Business Assignment Help
                </a>
                <a href="Marketing_Assignment_Help">Marketing Assignment Help
                </a>
                <a href="Strategy_Assignment_Help">Strategy Assignment Help
                </a>
                <a href="Business_Ethics_Assignment_Help">Business Ethics Assignment Help
                </a>
                <a href="p_of_Marketing_Assignment_Help">4p of Marketing Assignment Help
                </a>
                <a href="Pricing_Strategy_Assignment_Help">Pricing Strategy Assignment Help
                </a>
              </div>


            </div>



            <div class="dropdown2">
              <button class="dropbtn2">Finance
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Financial_Accounting_Assignment_Help">Financial Accounting Assignment Help</a>
                <a href="Financial_Services_Assignment_Help">Financial Services Assignment Help
                </a>
                <a href="Finance_Planning_Assignment_Help">Finance Planning Assignment Help
                </a>
                <a href="Finance_Assignment_Help">Finance Assignment Help
                </a>
                <a href="Forex_Assignment_Help">Forex Assignment Help
                </a>
                <a href="Behavioral_Finance_Assignment_Help">Behavioral Finance Assignment Help
                </a>
                <a href="Personal_Finance_Assignment_Help">Personal Finance Assignment Help
                </a>
                <a href="Capital_Budgeting_Assignment_Help">Capital Budgeting Assignment Help
                </a>
                <a href="Corporate_Finance_Planning_Assignment_Help">Corporate Finance Planning Assignment Help
                </a>
                <a href="Financial_Statement_Analysis_Assignment_Help">Financial Statement Analysis Assignment Help
                </a>
              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Nursing/Medicine
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Nursing_Assignment_Help">Nursing Assignment Help</a>
                <a href="Clinical_Reasoning_Cycle">Clinical Reasoning Cycle
                </a>
                <a href="Nursing_Help">Nursing Help
                </a>
                <a href="Pharmacology_Assignment_Help">Pharmacology Assignment Help
                </a>
                <a href="Clinical_Reasoning_Cycle">Clinical Reasoning Cycle
                </a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Economics
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Managerial_Economics_Assignment_Help">Managerial Economics Assignment Help</a>
                <a href="Economics_Assignment_Help">Economics Assignment Help</a>
                <a href="Microeconomics_Assignment_Help">Microeconomics Assignment Help</a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Marketing
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="#">MARKET ANALYSIS ASSIGNMENT HELP</a>
                <a href="#">MARKET SEGMENTATION ASSIGNMENT HELP
                </a>
                <a href="#">INTEGRATED MARKETING COMMUNICATION ASSIGNMENT
                </a>
                <a href="#">SALES PROMOTION ASSIGNMENT HELP
                </a>
                <a href="#">MARKETING PLAN ASSIGNMENT HELP
                </a>
                <a href="#">MARKETING MANAGEMENT ASSIGNMENT HELP
                </a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Statistics
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="statistics_assignment_help">Statistics Assignment help</a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Law
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Law_Assignment_Help">Law Assignment Help</a>
                <a href="Law_Assignment_Sample">Law Assignment Sample
                </a>

                <a href="Taxation_Assignment_Help">Taxation Assignment Help
                </a>
                <a href="Criminology_Assignment_Help">Criminology Assignment Help
                </a>
                <a href="Taxation_Law_Assignment_Help">Taxation Law Assignment Help
                </a>
                <a href="Constitutional_Law_Assignment_Help">Constitutional Law Assignment Help
                </a>
                <a href="Business_Law_Assignment_Help">Business Law Assignment Help</a>
                <a href="Competition_And_Consumer_Law_Assignment_Help">Consumer Law Assignment Help
                </a>
                <a href="Employment_Law_Assignment_Help">Employment Law Assignment Help
                </a>
                <a href="Commercial_Law_Assignment_Help">Commercial Law Assignment Help
                </a>
                <a href="Criminal_Law_Assignment_Help">Criminal Law Assignment Help
                </a>
                <a href="Environmental_Law_Assignment_Help">Environmental Law Assignment Help
                </a>
                <a href="Contract_Law_Assignment_Help">Contract Law Assignment Help
                </a>
                <a href="Company_Law_Assignment_Help">Company Law Assignment Help
                </a>
                <a href="Corporate_Governance_Law_Assignment_Help">Corp. Governance Law Assignment Help</a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Engineering
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Engineering_Assignment_Help">Engineering Assignment Help
                </a>
                <a href="Mechanical_Assignment_Help">Mechanical Assignment Help
                </a>
                <a href="Fluid_Mechanics_Assignment_Help">Fluid Mechanics Assignment Help
                </a>
                <a href="Civil_Engineering_Assignment_Help">Civil Engineering Assignment Help
                </a>
                <a href="Electrical_Engineering_Assignment_Help">Electrical Engineering Assignment Help
                </a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Humanities
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Humanities_Assignment_Help">Humanities Assignment Help</a>
                <a href="Sociology_Assignment_Help">Sociology Assignment Help
                </a>
                <a href="Philosophy_Assignment_Help">Philosophy Assignment Help
                </a>
                <a href="English_Assignment_Help">English Assignment Help
                </a>
                <a href="Geography_Assignment_Help">Geography Assignment Help
                </a>
                <a href="History_Assignment_Help">History Assignment Help
                </a>
                <a href="Agroecology_Assignment_Help">Agroecology Assignment Help
                </a>
                <a href="Psychology_Assignment_Help">Psychology Assignment Help</a>
                <a href="Social_Science_Assignment_Help">Social Science Assignment Help</a>
                <a href="Public_Relations_Assignment_Help">Public Relations Assignment Help</a>
                <a href="Political_Science_Assignment_Help">Political Science Assignment Help
                </a>
                <a href="Mass_Communication_Assignment_Help">Mass Communication Assignment Help
                </a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Business Report
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Report_Writing">Report Writing</a>
                <a href="Business_Report_Writing">Business Report Writing
                </a>

              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Commerce
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="Financial_Accounting_Assignment_Help">Financial Accounting Assignment Help</a>
                <a href="Economics_Assignment__Help">Economics Assignment Help
                </a>
                <a href="Accounting_Assignment_Help">Accounting Assignment Help
                </a>
                <a href="Business_Accounting_Assignment_Help">Business Accounting Assignment Help
                </a>
                <a href="Taxation_Assignment__Help">Taxation Assignment Help
                </a>
                <a href="Cost_Accounting_Assignment_Help">Cost Accounting Assignment Help
                </a>
                <a href="Managerial_Accounting_Assignment_Help">Managerial Accounting Assignment Help
                </a>
                <a href="Activity_Based_Accounting_Assignment_Help">Activity-Based Accounting Assignment Help
                </a>
                <a href="Solve_My_Accounting_Paper">Solve My Accounting Paper
                </a>
              </div>


            </div>
            <div class="dropdown2">
              <button class="dropbtn2">Computer network/IT
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content2">
                <a href="IT_Management_Assignment_Help">IT Management Assignment Help</a>
                <a href="Business_Intelligence_Assignment_Help">Business Intelligence Assignment Help</a>
                <a href="Information_Technology_Assignment_Help">Information Technology Assignment Help
                </a>
                <a href="Database_Assignment_Help">Database Assignment Help
                </a>
                <a href="Data_Mining_Assignment_Help">Data Mining Assignment Help
                </a>
                <a href="Data_Structure_Assignment_Help">Data Structure Assignment Help
                </a>
                <a href="Computer_Network_Assignment_Help">Computer Network Assignment Help
                </a>
                <a href="Operating_System_Assignment_Help">Operating System Assignment Help
                </a>
                <a href="Data_Flow_Diagram_Assignment_Help">Data Flow Diagram Assignment Help</a>
                <a href="UML_Diagram_Assignment_Help">UML Diagram Assignment Help</a>
              </div>


            </div>
          </div>

          </a>


<!--
          <a href="#">Programming <i class="fa fa-caret-down"></i></a>
          <a href="#">Home work <i class="fa fa-caret-down"></i></a>
          <a href="#">Thesis Writing <i class="fa fa-caret-down"></i></a>
          <a href="#">Case Study <i class="fa fa-caret-down"></i></a>
          <a href="#">Research <i class="fa fa-caret-down"></i></a>
          <a href="#">CDR <i class="fa fa-caret-down"></i></a>
          <a href="#">Bio technology <i class="fa fa-caret-down"></i></a>
          <a href="#">Proof reading <i class="fa fa-caret-down"></i></a> -->



        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Dissertation writing
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Dissertation_Writing_Help">Dissertation Writing Help</a>
            <a href="Sociology_Dissertation_Help">Sociology Dissertation Help</a>
            <a href="Marketing_Dissertation_Help">Marketing Dissertation Help

            </a>
            <a href="Biology_Dissertation_Help">Biology Dissertation Help
            </a>
            <a href="Nursing_Dissertation_Help">Nursing Dissertation Help
            </a>
            <a href="Matlab_Dissertation_Help">MATLAB Dissertation Help
            </a>
            <a href="Law_Dissertation_Help">Law Dissertation Help
            </a>
            <a href="Geography_Dissertation_Help">Geography Dissertation Help
            </a>
            <a href="English_Dissertation_Help">English Dissertation Help
            </a>
            <a href="Architecture_Dissertation_Help">Architecture Dissertation Help
            </a>
            <a href="Doctoral_Dissertation_Help">Doctoral Dissertation Help
            </a>
            <a href="Dissertation_Statistics_Help">Dissertation Statistics Help
            </a>
            <a href="Academic_Dissertation_Help">Academic Dissertation Help
            </a>
            <a href="Cheap_Dissertation_Help">Cheap Dissertation Help
            </a>
            <a href="Dissertation_Help_Online">Dissertation Help Online
            </a>
            <a href="Dissertation_Proofreading_Services">Dissertation Proofreading Services</a>


          </div>
        </div>
         <div class="dropdown1">
          <button class="dropbtn1">Programming
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Programming_Language_Assignment_Help">Programming Language Assignment Help
            </a>
            <a href="Programming_Assignment_Experts">Programming Assignment Experts
            </a>
            <a href="Data_Mining_Assignment_Help">Data Mining Assignment Help
            </a>
            <a href="Data_Flow_Diagram_Assignment_Help">Data Flow Diagram Assignment Help

            </a>
            <a href="Matlab_Assignment_Help">Matlab Assignment Help
            </a>
            <a href="C_Assignment_Help">C Assignment Help
            </a>
            <a href="Perl_Assignment_Help">Perl Assignment Help
            </a>
            <a href="UML_Assignment_Help">UML Assignment Help
            </a>
            <a href="SAS_Assignment_Help">SAS Assignment Help
            </a>
            <a href="Data_Structure_Assignment_Help">Data Structure Assignment Help
            </a>
            <a href="Database_Management_Assignment_Help">Database Management Assignment Help
            </a>
            <a href="Web_Designing_Assignment_Help">Web Designing Assignment Help
            </a>
            <a href="MYOB_Assignment_Help">MYOB Assignment Help
            </a>




          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Home work
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Write_My_Homework_for_me">Write My Homework for me
            </a>
            <a href="Pay_Someone_to_do_my_Homework">Pay Someone to do my Homework
            </a>
            <a href="Homework_Writing_Service">Homework Writing Service
            </a>
            <a href="Homework_Writer">Homework Writer
            </a>
            <a href="Homework_Help">Homework Help
            </a>
            <a href="Do_My_Homework">Do My Homework
            </a>
            <a href="Homework_Help_Online">Homework Help Online
            </a>
            <a href="Buy_Homework_Online">Buy Homework Online
            </a>
            <a href="Essay_Homework_Help">Essay Homework Help
            </a>
            <a href="Cheap_Homework_Help">Cheap Homework Help
            </a>
            <a href="Homework_Help_Services">Homework Help Services
            </a>
            <a href="PHP_Homework_Help">PHP Homework Help
            </a>
            <a href="Statistics_Homework_Help">Statistics Homework Help
            </a>
            <a href="Math_Homework_Help">Math Homework Help
            </a>
            <a href="Do_My_Math_Homework">Do My Math Homework
            </a>
            <a href="Algebra_Homework_Help">Algebra Homework Help
            </a>
            <a href="History_Homework_Help">History Homework Help
            </a>
            <a href="Economics_Homework_Help">Economics Homework Help
            </a>
            <a href="English_Homework_Help">English Homework Help
            </a>

          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Thesis Writing
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="thesis_help">Thesis Help
            </a>
            <a href="How_to_Write_a_Thesis">How to Write a Thesis
            </a>
            <a href="Thesis_Topics">Thesis Topics
            </a>
            <a href="Write_My_Thesis_for_me">Write My Thesis for me
            </a>
            <a href="Thesis_Paper">Thesis Paper
            </a>
            <a href="Thesis_Help_Online">Thesis Help Online
            </a>


          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Case Study
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Case_Study_Writing_Services">Case Study Writing Services
            </a>
            <a href="Write_My_Case_Study_For_Me">Write My Case Study For Me
            </a>
            <a href="History_Case_Study">History Case Study
            </a>
            <a href="Case_Study_Assignment_Sample">Case Study Assignment Sample
            </a>
            <a href="Case_Study_Assignment_Help">Case Study Assignment Help
            </a>
            <a href="Case_Study_Help">Case Study Help
            </a>
            <a href="Amway_Case_Study_Swot_Analysis">Amway Case Study Swot Analysis
            </a>
            <a href="Contract_Law_Case_Studies_Sample">Contract Law Case Studies Sample
            </a>
            <a href="Apple_Swot_and_Pestle_Analysis">Apple Swot & Pestle Analysis
            </a>
            <a href="four_Step_Process_Law_Case_Study">4 Step Process Law Case Study
            </a>
            <a href="Coca_Cola_Swot_Analysis_Case_Study">Coca Cola Swot Analysis Case Study
            </a>
            <a href="Mcdonalds_Pestle_Analysis_Case_Study">Mcdonalds Pestle Analysis Case Study
            </a>
            <a href="Zara_Case_Study_Swot_Analysis_Solution">Zara Case Study Swot Analysis Solution
            </a>
            <a href="Company_Law_Case_Study">Company Law Case Study
            </a>
            <a href="Case_Study_on_Vodafone">Case Study on Vodafone
            </a>
            <a href="Case_Study_on_Samsung">Case Study on Samsung
            </a>
            <a href="Nike_Swot_Pest_Analysis_Case_Study">Nike Swot Pest Analysis Case Study
            </a>
            <a href="Ikea_Case_Study">Ikea Case Study
            </a>
            <a href="Buy_Assignment_Case_Study">Buy Assignment Case Study
            </a>


          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Research
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Bibliography_Maker">Bibliography Maker
            </a>
            <a href="Research_Writing_Help">Research Writing Help
            </a>
            <a href="Research_Paper_Writing_Service">Research Paper Writing Service
            </a>
            <a href="Research_Paper_Topics">Research Paper Topics
            </a>
            <a href="Ghost_Writers">Ghost Writers
            </a>
            <a href="Research_Paper_Help">Research Paper Help
            </a>
            <a href="Custom_Writing_Service">Custom Writing Service
            </a>
            <a href="College_Paper_Writing">College Paper Writing
            </a>
            <a href="Buy_College_Papers">Buy College Papers
            </a>
            <a href="How_to_Write_a_College_Paper">How to Write a College Paper
            </a>
            <a href="Term_Paper">Term Paper
            </a>
            <a href="Writing_Services">Writing Services
            </a>
            <a href="Help_with_Report">Help with Report
            </a>
            <a href="Custom_Pape_Writing_Services">Custom Paper Writing Services
            </a>
            <a href="Paper_Writers">Paper Writers
            </a>
            <a href="Research_Proposal_Help">Research Proposal Help
            </a>
            <a href="Story_Writing">Story Writing
            </a>


          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">CDR
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="CDR_Writing_Services">CDR Writing Services
            </a>
            <a href="CDR_Engineers_Australia">CDR Engineers Australia
            </a>
            <a href="CDR_Report_Writers">CDR Report Writers
            </a>


          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Bio technology
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="BIOTECHNOLOGY_ASSIGNMENT_HELP">BIOTECHNOLOGY ASSIGNMENT HELP
            </a>
            <a href="BIOINFORMATICS_ASSIGNMENT_HELP">BIOINFORMATICS ASSIGNMENT HELP
            </a>
            <a href="BIOCHEMISTRY_ASSIGNMENT_HELP">BIOCHEMISTRY ASSIGNMENT HELP
            </a>
            <a href="BIOLOGY_ASSIGNMENT_HELP">BIOLOGY ASSIGNMENT HELP
            </a>
            <a href="ANTHROPOLOGY_ASSIGNMENT_HELP">ANTHROPOLOGY ASSIGNMENT HELP
            </a>
            <a href="PALEONTOLOGY_ASSIGNMENT_HELP">PALEONTOLOGY ASSIGNMENT HELP
            </a>


          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Proof reading
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content1">

            <a href="Proof_Reading_Services">Proof Reading Services
            </a>
            <a href="Proof_Reading_Services_Australia">Proof Reading Services Australia
            </a>
            <a href="Proof_Reading_Services_UK">Proof Reading Services UK
            </a>

          </div>
        </div>
      </div>
    </div>
    <a href="#contact" style="padding-bottom: 0px;">Review</a>
    <a href="#contact" style="padding-bottom: 0px;">About us</a>
    <a href="#contact" style="padding-bottom: 0px;">Contact us</a>
    <a href="#about">Ordering FAQ</a>

  </div>

  </div>







  <div class="container-fluid nav">
               <ul class="nav_content">
                    <li><a href="Home" style="text-decoration:none;">Home</a></li>
                    <li class="services_list"><a href="Services" style="text-decoration:none;">Services<span class="glyphicon glyphicon-menu-down"></span></a>
                         <ul class="menu">
                              <li class="nav-item"> <a class="nav-link nav-top-cus-sub" itemprop="url" href="assignment"><span itemprop="name">Assignment Writing</span> <i class="fa fa-caret-right ml-4"></i></a>
                                   <ul class="nav-submenu">
                                        <li class="nav-item">
                                             <a class="nav-link nav-top-cus-sub" itemprop="url" href="academic"><span itemprop="name">Academic Writing Service</span> <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1" style="min-width:638px;list-style:none;z-index:5;">
                                                  <li style="float:left;border-bottom:0px solid #000000;">
                                                       <ul style="padding:0px">
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_provider" title="Assignment Provider"><span itemprop="name">Assignment
                                                                           Provider</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_assistance" title="Assignment Assistance"><span itemprop="name">Assignment
                                                                           Assistance</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_help_online" title="Assignment Help Online"><span itemprop="name">Assignment Help
                                                                           Online</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="HND_assignment_help" title="HND Assignment Help"><span itemprop="name">HND Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="spss_assignment_help" title="SPSS Assignment Help"><span itemprop="name">SPSS Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="solve_my_assignment" title="Solve My Assignment"><span itemprop="name">Solve My
                                                                           Assignment</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="buy_assignments_online" title="Buy Assignments Online"><span itemprop="name">Buy Assignments
                                                                           Online</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_paper_help" title="Assignment paper help"><span itemprop="name">Assignment Paper
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_cover_page" title="Assignment Cover Page"><span itemprop="name">Assignment Cover
                                                                           Page</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="urgent_assignment_help" title="Urgent Assignment Help"><span itemprop="name">Urgent Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="perdisco_assignment_help" title="Perdisco Assignment Help"><span itemprop="name">Perdisco Assignment
                                                                           Help</span></a></li>

                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="make_my_assignment" title="make my assignment"><span itemprop="name">Make My Assignment</span></a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="college_assignment_help" title="College Assignment Help"><span itemprop="name">College Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="get_assignment_help" title="Get Assignment Help"><span itemprop="name">Get Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="do_my_assignment" title="Do My Assignment"><span itemprop="name">Do
                                                                           My Assignment</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="all_assignment_help" title="All Assignment Help"><span itemprop="name">All Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="pay_for_assignment_help" title="pay-for-assignment-help"><span itemprop="name">Pay For Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="cheap_assignment_help" title="Cheap Assignment Help"><span itemprop="name">Cheap Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="instant_assignment_help" title="Instant Assignment Help"><span itemprop="name">Instant Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="powerpoint_presentation_online" title="powerpoint presentation online service"><span itemprop="name">Powerpoint Presentation
                                                                           Service</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="student_assignment_help" title="Last Minute Assignment Help"><span itemprop="name">Student Assignment
                                                                           Help</span></a></li>
                                                       </ul>
                                                  </li>
                                                  <li style="border-bottom:0px solid #000000;">
                                                       <ul style="padding-left:0%;margin-left:42%;background-color:#fcfcfc;width:49%;z-index:5;">
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="study_help_online" title="study_help_online"><span itemprop="name">Study Help Online</span></a>
                                                            </li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="write_my_assignment" title="write my assignment"><span itemprop="name">Write My
                                                                           Assignment</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="personal_statement_writing" title="Personal Statement Writing"><span itemprop="name">Personal Statement
                                                                           Writing</span></a></li>

                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_help_tutors" title="Assignment Help Tutors"><span itemprop="name">Assignment Help
                                                                           Tutors</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="TAFE_assignment_help" title="TAFE Assignment Help"><span itemprop="name">TAFE Assignment
                                                                           Help</span></a></li>

                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="do_assignment_for_me" title="Do Assignment For Me"><span itemprop="name">Do Assignment For
                                                                           Me</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="narrative_writing_help" title="narrative writing help"><span itemprop="name">Narrative Writing
                                                                           help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="assignment_writing_tips" title="Assignment Writing Tips"><span itemprop="name">Assignment Writing
                                                                           Tips</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="academic_assignment_help" title="Academic Assignment Help"><span itemprop="name">Academic Assignment
                                                                           Help</span></a></li>

                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="student_assignment_help" title="Student Assignment Help"><span itemprop="name">Student Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="university_assignment_help" title="University Assignment Help"><span itemprop="name">University Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="a2z" title="Writing Assignment for University"><span itemprop="name">a2z Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="total_assignment_help" title="Custom Assignment Writing Service"><span itemprop="name">Total assignment
                                                                           help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="world_no_1_assignment_help" title="world no 1 assignment help company"><span itemprop="name">World No 1 Assignment
                                                                           Help</span></a></li>
                                                       </ul>
                                                  </li>
                                             </ul>
                                        </li>
                                        <li class="nav-item management">
                                             <a class="nav-link nav-top-cus-sub" href="management">Management
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1 first-chiild" style="min-width:750px;list-style:none">
                                                  <li style="float:left;border-bottom:0px solid #000000;">
                                                       <ul style="padding:0px">
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Project_Management_Assignment_Help" title="Project Risk Management Assignment Help"><span itemprop="name">Project Risk Management
                                                                           Assignment Help </span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Strategic_Management_Assignment_help" title="Strategic Management Assignment Help"><span itemprop="name">Strategic Management
                                                                           Assignment Help </span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Marketing_Management_Assignment_Help" title="Marketing Management Assignment Help"><span itemprop="name">Marketing Management
                                                                           Assignment Help </span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Conflict_Management_Assignment_Help" title="Conflict Management Assignment Help"><span itemprop="name">Conflict Management
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Operations_Management_Assignment_Help" title="Operations Management Assignment Help"><span itemprop="name">Operations Management
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Corporate_Strategy_Assignment_Help" title="Corporate Strategy Assignment Help"><span itemprop="name">Corporate Strategy Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Change_Management_Assignment_Help" title="Change Management Assignment Help"><span itemprop="name">Change Management Assignment
                                                                           Help</span></a></li>

                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Supply_Chain_Management_Assignment_Help" title="Supply Chain Management Assignment Help"><span itemprop="name">Supply Chain Management
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Managerial_Economics_Assignment_Help" title="Managerial Economics Assignment Help"><span itemprop="name">Managerial Economics
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Project_Management_Assignment_Help" title="Project Management Assignment Help"><span itemprop="name">Project Management Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Market_Analysis_Assignment_Help" title="Market Analysis Assignment Help"><span itemprop="name">Market Analysis Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Strategic_Marketing_Assignment_Help" title="Strategic Marketing Assignment Help"><span itemprop="name">Strategic Marketing
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Human_Resource_Assignment_Help" title="Human Resource Assignment Help"><span itemprop="name">Human Resource Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Marketing_Research_Assignment_Help" title="Marketing Research Assignment Help"><span itemprop="name">Marketing Research Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Statistics_Assignment_Help" title="Business Statistics Assignment Help"><span itemprop="name">Business Statistics
                                                                           Assignment Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Consumer_Behavior_Assignment_Help" title="Consumer Behavior Assignment Help"><span itemprop="name">Consumer Behavior Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Development_Assignment_Help" title="Business Development Assignment Help"><span itemprop="name">Business Development
                                                                           Assignment Help</span></a></li>
                                                       </ul>
                                                  </li>
                                                  <li style="border-bottom:0px solid #000000;">
                                                       <ul style="padding-left:0%;margin-left:51%;background-color:#fcfcfc;width:49%;z-index:5;">
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="CRM_Assignment_Help" title="customer relationship management assignment help"><span itemprop="name">CRM Assignment Help
                                                                      </span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="MBA_Assignment_Help" title="MBA Assignment Help"><span itemprop="name">MBA Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Statistics_Assignment_Help" title="Statistics Assignment Help"><span itemprop="name">Statistics Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Management_Assignment_Help" title="Management Assignment Help"><span itemprop="name">Management Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Operation_Management_Assignment_Help" title="Operation Assignment Help"><span itemprop="name">Operation Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Assignment_Help" title="Business Assignment Help"><span itemprop="name">Business Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Marketing_Assignment_Help" title="Marketing Assignment Help"><span itemprop="name">Marketing Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Strategy_Assignment_Help" title="Strategy Assignment Help"><span itemprop="name">Strategy Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Ethics_Assignment_Help" title="Business Ethics Assignment Help"><span itemprop="name">Business Ethics Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="p_of_Marketing_Assignment_Help" title="4p of Marketing Assignment Help"><span itemprop="name">4p of Marketing Assignment
                                                                           Help</span></a></li>
                                                            <li class="nav-item"><a class="nav-link" itemprop="url" href="Pricing_Strategy_Assignment_Help" title="Pricing Strategy Assignment Help"><span itemprop="name">Pricing Strategy Assignment
                                                                           Help</span></a></li>
                                                       </ul>
                                                  </li>
                                             </ul>
                                        </li>

                                        <li class="nav-item finance">
                                             <a class="nav-link" href="finance">Finance
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Financial_Accounting_Assignment_Help" title="Financial Accounting Assignment Help"><span itemprop="name">Financial Accounting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Financial_Services_Assignment_Help" title="Financial Services Assignment Help"><span itemprop="name">Financial Services Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Finance_Planning_Assignment_Help" title="Finance Planning Assignment Help"><span itemprop="name">Finance Planning Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Finance_Assignment_Help" title="Finance Assignment Help"><span itemprop="name">Finance Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Forex_Assignment_Help" title="Forex Assignment Help"><span itemprop="name">Forex
                                                                 Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Behavioral_Finance_Assignment_Help" title="Behavioral Finance Assignment Help"><span itemprop="name">Behavioral Finance Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Personal_Finance_Assignment_Help" title="Personal Finance Assignment Help"><span itemprop="name">Personal Finance Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Capital_Budgeting_Assignment_Help" title="Capital Budgeting Assignment Help"><span itemprop="name">Capital Budgeting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Corporate_Finance_Planning_Assignment_Help" title="Corporate Finance Planning Assignment Help"><span itemprop="name">Corporate Finance Planning Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Financial_Statement_Analysis_Assignment_Help" title="Financial Statement Analysis Assignment Help"><span itemprop="name">Financial Statement Analysis Assignment
                                                                 Help</span></a></li>
                                             </ul>
                                        </li>
                                        <li class="nav-item nursing">
                                             <a class="nav-link" href="Nursing_Assignment_Help">Nursing/Medicine
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Nursing_Assignment_Help" title="Nursing Assignment Help"><span itemprop="name">Nursing Assignment Help </span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Clinical_Reasoning_Cycle" title="Clinical Reasoning Cycle"><span itemprop="name">Clinical Reasoning Cycle</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Nursing_Help" title="Clinical Reasoning Cycle"><span itemprop="name">Nursing Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Pharmacology_Assignment_Help" title="Clinical Reasoning Cycle"><span itemprop="name">Pharmacology Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Clinical_Reasoning_Cycle" title="Clinical Reasoning Cycle"><span itemprop="name">Clinical Reasoning Cycle</span></a>
                                                  </li>
                                             </ul>
                                        </li>
                                        <li class="nav-item economics">
                                             <a class="nav-link" href="economics">Economics
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Managerial_Economics_Assignment_Help" title="Managerial Economics Assignment Help"><span itemprop="name">Managerial Economics Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Economics_Assignment_Help" title="Economics Assignment Help"><span itemprop="name">Economics Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Microeconomics_Assignment_Help" title="Microeconomics Assignment Help"><span itemprop="name">Microeconomics Assignment
                                                                 Help</span></a></li>
                                             </ul>
                                        </li>
                                        <li class="nav-item Marketing">
                                             <a class="nav-link" href="">Marketing
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">MARKET ANALYSIS ASSIGNMENT
                                                                 HELP</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">MARKET SEGMENTATION ASSIGNMENT
                                                                 HELP</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">INTEGRATED MARKETING COMMUNICATION
                                                                 ASSIGNMENT </span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">SALES PROMOTION ASSIGNMENT
                                                                 HELP</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">MARKETING PLAN ASSIGNMENT
                                                                 HELP</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="" title="Managerial Economics Assignment Help"><span itemprop="name">MARKETING MANAGEMENT ASSIGNMENT
                                                                 HELP</span></a></li>
                                             </ul>
                                        </li>
                                        <li class="nav-item Statistics">
                                             <a class="nav-link" href="statistics">Statistics<i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="statistics_assignment_help" title="Managerial Economics Assignment Help"><span itemprop="name">Statistics Assignment help</span></a>
                                                  </li>
                                             </ul>
                                        </li>
                                        <li class="nav-item law">
                                             <a class="nav-link" href="law">Law <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1" >
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Law_Assignment_Help" title="Law Assignment Help"><span itemprop="name">Law
                                                                 Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Law_Assignment_Sample" title="Law Assignment Sample"><span itemprop="name">Law
                                                                 Assignment Sample</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Taxation_Assignment_Help" title="Taxation Assignment Help"><span itemprop="name">Taxation Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Criminology_Assignment_Help" title="Criminology Assignment Help"><span itemprop="name">Criminology Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Taxation_Law_Assignment_Help" title="Taxation Law Assignment Help"><span itemprop="name">Taxation Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Constitutional_Law_Assignment_Help" title="Constitutional Law Assignment Help"><span itemprop="name">Constitutional Law Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Law_Assignment_Help" title="Business Law Assignment Help"><span itemprop="name">Business Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Competition_And_Consumer_Law_Assignment_Help" title="Competition and Consumer Law Assignment Help"><span itemprop="name">Consumer Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Employment_Law_Assignment_Help" title="Employment Law Assignment Help"><span itemprop="name">Employment Law Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Commercial_Law_Assignment_Help" title="Commercial Law Assignment Help"><span itemprop="name">Commercial Law Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Criminal_Law_Assignment_Help" title="Criminal Law Assignment Help"><span itemprop="name">Criminal Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Environmental_Law_Assignment_Help" title="Environmental law assignment help"><span itemprop="name">Environmental Law Assignment
                                                                 Help</span></a></li>


                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Contract_Law_Assignment_Help" title="Contract Law Assignment Help"><span itemprop="name">Contract Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Company_Law_Assignment_Help" title="Company Law Assignment Help"><span itemprop="name">Company Law Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Corporate_Governance_Law_Assignment_Help" title="Corporate Governance Law Assignment Help"><span itemprop="name">Corp. Governance Law Assignment
                                                                 Help</span></a></li>
                                             </ul>
                                        </li>

                                        <li class="nav-item engineering">
                                             <a class="nav-link" href="engineering">Engineering
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Engineering_Assignment_Help" title="Engineering Assignment Help"><span itemprop="name">Engineering Assignment Help </span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Mechanical_Assignment_Help" title="Mechanical Assignment Help"><span itemprop="name">Mechanical Assignment Help </span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Fluid_Mechanics_Assignment_Help" title="Fluid Mechanics Assignment Help"><span itemprop="name">Fluid Mechanics Assignment Help
                                                            </span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Civil_Engineering_Assignment_Help" title="Civil Engineering Assignment Help"><span itemprop="name">Civil Engineering Assignment Help
                                                            </span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Electrical_Engineering_Assignment_Help" title="Electrical Engineering Assignment Help"><span itemprop="name">Electrical Engineering Assignment Help
                                                            </span></a></li>
                                             </ul>
                                        </li>

                                        <li class="nav-item huminities">
                                             <a class="nav-link" href="humanities">Humanities
                                                  <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Humanities_Assignment_Help" title="Humanities Assignment Help"><span itemprop="name">Humanities Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Sociology_Assignment_Help" title="Sociology Assignment Help"><span itemprop="name">Sociology Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Philosophy_Assignment_Help" title="Philosophy Assignment Help"><span itemprop="name">Philosophy Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="English_Assignment_Help" title="English Assignment Help"><span itemprop="name">English Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Geography_Assignment_Help" title="Geography Assignment Help"><span itemprop="name">Geography Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="History_Assignment_Help" title="History Assignment Help"><span itemprop="name">History Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Agroecology_Assignment_Help" title="Agroecology Assignment Help"><span itemprop="name">Agroecology Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Psychology_Assignment_Help" title="Psychology Assignment Help"><span itemprop="name">Psychology Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Social_Science_Assignment_Help" title="Social Science Assignment Help"><span itemprop="name">Social Science Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Public_Relations_Assignment_Help" title="Public Relations Assignment Help"><span itemprop="name">Public Relations Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Political_Science_Assignment_Help" title="Political Science Assignment Help"><span itemprop="name">Political Science Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Mass_Communication_Assignment_Help" title="Mass Communication Assignment Help"><span itemprop="name">Mass Communication Assignment
                                                                 Help</span></a></li>
                                             </ul>
                                        </li>

                                        <li class="nav-item business_report">
                                             <a class="nav-link" href="business">Business
                                                  Report <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Report_Writing" title="Business Report structure"><span itemprop="name">Report Writing </span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Report_Writing" title="Business Report structure"><span itemprop="name">Business Report Writing </span></a>
                                                  </li>
                                             </ul>
                                        </li>

                                        <li class="nav-item commerce">
                                             <a class="nav-link" href="">Commerce <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Financial_Accounting_Assignment_Help" title="Activity-Based Accounting Assignment Help"><span itemprop="name">Financial Accounting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Economics_Assignment__Help" title="Accounting Assignment Help"><span itemprop="name">Economics Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Accounting_Assignment_Help" title="Solve My Accounting Paper"><span itemprop="name">Accounting Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Accounting_Assignment_Help" title="Taxation Assignment Help"><span itemprop="name">Business Accounting Assignment Help
                                                     </span></a></li>
                                                                 <li class="nav-item"><a class="nav-link" itemprop="url" href="Taxation_Assignment__Help" title="Cost Accounting Assignment Help"><span itemprop="name">Taxation Assignment Help
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Cost_Accounting_Assignment_Help" title="Cost Accounting Assignment Help"><span itemprop="name">Cost Accounting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Managerial_Accounting_Assignment_Help" title="Managerial Accounting Assignment Help"><span itemprop="name">Managerial Accounting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Activity_Based_Accounting_Assignment_Help" title="Business Accounting Assignment Help"><span itemprop="name">Activity-Based Accounting Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Solve_My_Accounting_Paper" title="Activity-Based Accounting Assignment Help"><span itemprop="name">Solve My Accounting Paper</span></a>
                                                  </li>
                                             </ul>
                                        </li>
                                        <li class="nav-item computer_science">
                                             <a class="nav-link" href="#">Computer network/IT <i class="fa fa-caret-right ml-4"></i></a>
                                             <ul class="nav-submenu1">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="IT_Management_Assignment_Help" title="IT Management Assignment Help"><span itemprop="name">IT Management Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Intelligence_Assignment_Help" title="Business Intelligence Assignment Help"><span itemprop="name">Business Intelligence Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Information_Technology_Assignment_Help" title="Information Technology Assignment Help"><span itemprop="name">Information Technology Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Database_Assignment_Help" title="Database Assignment Help"><span itemprop="name">Database Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Mining_Assignment_Help" title="Data Mining Assignment Help"><span itemprop="name">Data Mining Assignment Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Structure_Assignment_Help" title="Data Structure Assignment Help"><span itemprop="name">Data Structure Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Computer_Network_Assignment_Help" title="Computer Network Assignment Help"><span itemprop="name">Computer Network Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Operating_System_Assignment_Help" title="Operating System Assignment Help"><span itemprop="name">Operating System Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Flow_Diagram_Assignment_Help" title="Data Flow Diagram Assignment Help"><span itemprop="name">Data Flow Diagram Assignment
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="UML_Diagram_Assignment_Help" title="UML Diagram Assignment Help"><span itemprop="name">UML Diagram Assignment Help</span></a>
                                                  </li>
                                             </ul>
                                        </li>
                                   </ul>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="dissertation">Dissertation writing<i class="fa fa-caret-right ml-4"></i></a>
                                   <ul class="nav-submenu">

                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Dissertation_Writing_Help" title="Dissertation Writing Help"><span itemprop="name">Dissertation
                                                       Writing Help </span></a></li>

                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Sociology_Dissertation_Help" title="Sociology Dissertation Help"><span itemprop="name">Sociology
                                                       Dissertation Help </span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Marketing_Dissertation_Help" title="Marketing Dissertation Help"><span itemprop="name">Marketing
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Biology_Dissertation_Help" title="Biology Dissertation Help"><span itemprop="name">Biology
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Nursing_Dissertation_Help" title="Nursing Dissertation Help"><span itemprop="name">Nursing
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Matlab_Dissertation_Help" title="MATLAB Dissertation Help"><span itemprop="name">MATLAB
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Law_Dissertation_Help" title="Law Dissertation Help"><span itemprop="name">Law Dissertation
                                                       Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Geography_Dissertation_Help" title="Geography Dissertation Help"><span itemprop="name">Geography
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="English_Dissertation_Help" title="English Dissertation Help"><span itemprop="name">English
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Architecture_Dissertation_Help" title="Architecture Dissertation Help"><span itemprop="name">Architecture Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Doctoral_Dissertation_Help" title="Doctoral Dissertation Help"><span itemprop="name">Doctoral
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Dissertation_Statistics_Help" title="Dissertation Statistics Help"><span itemprop="name">Dissertation Statistics Help</span></a></li>

                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Academic_Dissertation_Help" title="Academic Dissertation Help"><span itemprop="name">Academic
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Cheap_Dissertation_Help" title="Cheap Dissertation Help"><span itemprop="name">Cheap
                                                       Dissertation Help</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Dissertation_Help_Online" title="Dissertation Help Online"><span itemprop="name">Dissertation
                                                       Help Online</span></a></li>
                                        <li class="nav-item"><a class="nav-link" itemprop="url" href="Dissertation_Proofreading_Services" title="Dissertation Proofreading Services"><span itemprop="name">Dissertation Proofreading Services</span></a>
                                        </li>

                                   </ul>
                              </li>


                              <li class="nav-item">
                                   <a class="nav-link" href="essay">Essay Writing <i class="fa fa-caret-right ml-4"></i></a>
                                   <ul class="nav-submenu" style="min-width:899px;list-style:none;z-index:5;">
                                        <li style="float:left;border-bottom:0px solid #000000;">
                                             <ul style="padding:0px">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Do_My_Essay_Online" title="Essay Help"><span itemprop="name">Do My Essay
                                                                 Online</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Outline_Help" title="Legit Essay"><span itemprop="name">Essay Outline
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="History_Essay_Help" title="Essay Writing Services"><span itemprop="name">History
                                                                 Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Essay_Help" title="Essay Outline Help"><span itemprop="name">Research
                                                                 Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Assignment_Writer_Sydney" title="Descriptive Essay Help"><span itemprop="name">Assignment Writer Sydney</span></a>
                                                  </li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Assignment_Writing_Brisbane" title="History Essay Help"><span itemprop="name">Assignment
                                                                 Writing Brisbane</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Assignment_Writer_Perth" title="Research Essay Help"><span itemprop="name">Assignment
                                                                 Writer Perth</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Assignment_Help" title="English Essay Writing"><span itemprop="name">Essay
                                                                 Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Cheap_Essay_Writing_Services" title="Literature EssayHelp"><span itemprop="name">Cheap
                                                                 Essay Writing Services</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Cheap_Essay_Writer" title="Essay Writer for Australia"><span itemprop="name">Cheap Essay Writer</span></a></li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Do_My_Essay" title="Online Custom Essay Help"><span itemprop="name">Do My
                                                                 Essay</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Admission_Essay_Help" title="Essay Writing Help"><span itemprop="name">Admission
                                                                 Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Best_Essay_Writing_Service" title="Custom Essay Help"><span itemprop="name">Best Essay
                                                                 Writing Service</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Urgent_Essay_Help" title="Essay Help Online"><span itemprop="name">Urgent Essay
                                                                 Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Fast_Essay_Writing_Service" title="Writing Essay Papers"><span itemprop="name">Fast
                                                                 Essay Writing Service</span></a></li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="College_Application_Essay" title="Essay Homework Help"><span itemprop="name">College
                                                                 Application Essay</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="College_Essay_Writing_Service" title="Professional Essay Writer"><span itemprop="name">College Essay Writing
                                                                 Service</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Topics" title="Illustration Essay Help"><span itemprop="name">Essay
                                                                 Topics</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Top_Essay_Writing_Companies" title="Scholarship Essay Help"><span itemprop="name">Top
                                                                 Essay Writing Companies</span></a></li>
                                                  <li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Conclusion" title="Need Help Writing Essay"><span itemprop="name">Essay
                                                                 Conclusion</span></a></li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Types" title="Plagiarism Free Essays"><span itemprop="name">Essay
                                                                 Types</span></a></li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Scholarship_Essay_Sample" title="Write My Essay"><span itemprop="name">Scholarship
                                                                 Essay Sample</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_an_Essay_Online" title="Response Essay Writing Help"><span itemprop="name">Write an Essay Online</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Evaluative_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Evaluative Essay Help</span></a></li>


                                             </ul>
                                        </li>
                                        <li style="border-bottom:0px solid #000000;">
                                             <ul style="padding-left:0%;margin-left:30%;background-color:#fcfcfc;width:49%;z-index:5;">
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Response_Essay_Help" title="Response_Essay_Help"><span itemprop="name">Response Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Illustration_Essay_Help" title="Illustration_Essay_Help"><span itemprop="name">Illustration Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Writing_Help" title="Essay_Writing_Help"><span itemprop="name">Essay Writing Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Plagiarism_Free_Essays" title="Plagiarism_Free_Essays"><span itemprop="name">Plagiarism Free Essays</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Custom_Essay_Help" title="Custom_Essay_Help"><span itemprop="name">Custom Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Help_Online" title="Essay_Help_Online"><span itemprop="name">Essay Help Online</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Professional_Essay_Writer" title="Response Essay Writing Help"><span itemprop="name">Professional Essay Writer</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Writers_Online" title="Response Essay Writing Help"><span itemprop="name">Essay Writers Online</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_My_Essay" title="Response Essay Writing Help"><span itemprop="name">Write My Essay</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Writing_Essay_Papers" title="Response Essay Writing Help"><span itemprop="name">Writing Essay Papers</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Scholarship_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Scholarship Essay Help</span></a></li>

                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Need_Help_Writing_Essay" title="Response Essay Writing Help"><span itemprop="name">Need Help Writing Essay</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Homework_Help" title="Response Essay Writing Help"><span itemprop="name">Essay Homework Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Online_Custom_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Online Custom Essay Help</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Descriptive_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Descriptive Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Writer_for_Australia" title="Response Essay Writing Help"><span itemprop="name">Essay Writer for Australia</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_My_Essay" title="Response Essay Writing Help"><span itemprop="name">Write My Essay</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="MBA_Essay_Writing_Service" title="Response Essay Writing Help"><span itemprop="name">MBA Essay Writing Service</span></a>
                                                  </li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="MBA_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">MBA Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Business_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Business Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Law_Assignment_Help" title="Response Essay Writing Help"><span itemprop="name">Law Assignment Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="History_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">History Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="English_Essay_Writing" title="Response Essay Writing Help"><span itemprop="name">English Essay Writing</span></a></li>

                                             </ul>
                                        </li>
                                        <li style="border-bottom:0px solid #000000; margin-top:-537px;">
                                             <ul style="padding-left:0%;margin-left:60%;background-color:#fcfcfc;width:40%;z-index:5; padding:3px;">
                                                  <li class="nav-item "><a class="nav-link" itemprop="url" href="Literature_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Literature Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Nursing_Assignment_help" title="Response Essay Writing Help"><span itemprop="name">Nursing Assignment help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Philosophy_Essay_Help" title="Response Essay Writing Help"><span itemprop="name">Philosophy Essay Help</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Structure" title="Response Essay Writing Help"><span itemprop="name">Essay Structure</span></a></li>
                                                  <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Rewriter" title="Response Essay Writing Help"><span itemprop="name">Essay Rewriter</span></a></li>
                                             </ul>
                                        </li>
                                   </ul>
                              </li>


                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="programming">Programming <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Programming_Language_Assignment_Help" title="Programming Assignment Help"><span itemprop="name">Programming Language
                                             Assignment Help </span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Programming_Assignment_Experts" title="Java Assignment Help"><span itemprop="name">Programming Assignment
                                             Experts</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Mining_Assignment_Help" title="C Programming Assignment Help"><span itemprop="name">Data Mining
                                             Assignment Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Flow_Diagram_Assignment_Help" title="PHP Assignment Help"><span itemprop="name">Data Flow Diagram Assignment
                                             Help</span></a></li>

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Matlab_Assignment_Help" title="Python Assignment Help"><span itemprop="name">Matlab Assignment
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="C_Assignment_Help" title="Perl Assignment Help"><span itemprop="name">C Assignment Help</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Perl_Assignment_Help" title="SAS Assignment Help"><span itemprop="name">Perl Assignment
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="UML_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">UML Assignment
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="SAS_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">SAS Assignment
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Data_Structure_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">Data Structure
                                             Assignment Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Database_Management_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">Database Management
                                             Assignment Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Web_Designing_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">Web Designing
                                             Assignment Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="MYOB_Assignment_Help" title="Web Designing Assignment Help"><span itemprop="name">MYOB Assignment
                                             Help</span></a></li>

                         </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="homework">Home work <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_My_Homework_for_me" title="Coursework Assignment Help"><span itemprop="name">Write My Homework for
                                             me</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Pay_Someone_to_do_my_Homework" title="Finance Coursework Help"><span itemprop="name">Pay Someone to do my
                                             Homework</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Homework_Writing_Service" title="Coursework Writing Services"><span itemprop="name">Homework Writing
                                             Service</span></a></li>

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Homework_Writer" title="Marketing Coursework Help"><span itemprop="name">Homework
                                             Writer</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Homework_Help" title="Maths Coursework Help"><span itemprop="name">Homework Help</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Do_My_Homework" title="Chemistry Coursework Help"><span itemprop="name">Do My
                                             Homework</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Homework_Help_Online" title="English Coursework Help"><span itemprop="name">Homework Help
                                             Online</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Buy_Homework_Online" title="Do My Coursework"><span itemprop="name">Buy Homework Online</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Essay_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Essay Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Cheap_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Cheap Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Homework_Help_Services" title="Custom Coursework Writing Service"><span itemprop="name">Homework Help
                                             Services</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="PHP_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">PHP Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Statistics_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Statistics
                                             Homework Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Math_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Math Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Do_My_Math_Homework" title="Custom Coursework Writing Service"><span itemprop="name">Do My Math
                                             Homework</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Algebra_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Algebra Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="History_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">History Homework
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Economics_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">Economics
                                             Homework Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="English_Homework_Help" title="Custom Coursework Writing Service"><span itemprop="name">English Homework
                                             Help</span></a></li>


                         </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="thesis_help">Thesis Writing <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="thesis_help" title="Thesis Writing Help"><span itemprop="name">Thesis Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="How_to_Write_a_Thesis" title="Thesis Help Online"><span itemprop="name">How to Write a
                                             Thesis</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Thesis_Topics" title="Write my thesis for me"><span itemprop="name">Thesis Topics</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_My_Thesis_for_me" title="Thesis Writing Help"><span itemprop="name">Write My Thesis for
                                             me</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Thesis_Paper" title="Thesis Help Online"><span itemprop="name">Thesis Paper</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Thesis_Help_Online" title="Write my thesis for me"><span itemprop="name">Thesis Help
                                             Online</span></a></li>
                         </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="Case_Study_Help">Case Study <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_Writing_Services" title="Case Study Assignment Help"><span itemprop="name">Case Study Writing
                                             Services</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Write_My_Case_Study_For_Me" title="History Case Study"><span itemprop="name">Write My Case Study For
                                             Me</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="History_Case_Study" title="Case Study Writing Services"><span itemprop="name">History Case
                                             Study</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_Assignment_Sample" title="Write My Case Study For Me"><span itemprop="name"></span>Case Study
                                        Assignment Sample</a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_Assignment_Help" title="Civil Law Case Study Help"><span itemprop="name">Case Study Assignment
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_Help" title="Business Law Case Study"><span itemprop="name">Case Study Help</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Amway_Case_Study_Swot_Analysis" title="Civil Law Case Study Help"><span itemprop="name">Amway Case Study Swot
                                             Analysis</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Contract_Law_Case_Studies_Sample" title="Civil Law Case Study Help"><span itemprop="name">Contract Law Case
                                             Studies Sample</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Apple_Swot_and_Pestle_Analysis" title="Marketing Case Study Help"><span itemprop="name">Apple Swot & Pestle
                                             Analysis</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="four_Step_Process_Law_Case_Study" title="Nursing Case Study Help"><span itemprop="name">4 Step Process Law Case
                                             Study</span></a></li>

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Coca_Cola_Swot_Analysis_Case_Study" title="ZARA Case Study"><span itemprop="name">Coca Cola Swot Analysis Case
                                             Study</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Mcdonalds_Pestle_Analysis_Case_Study" title="Amazon Case Study"><span itemprop="name">Mcdonalds Pestle Analysis Case
                                             Study</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Zara_Case_Study_Swot_Analysis_Solution" title="Apple Case Study"><span itemprop="name">Zara Case Study Swot Analysis
                                             Solution</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Company_Law_Case_Study" title="Apple Case Study"><span itemprop="name">Company Law Case Study</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_on_Vodafone" title="Apple Case Study"><span itemprop="name">Case Study on Vodafone</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Case_Study_on_Samsung" title="Apple Case Study"><span itemprop="name">Case Study on Samsung</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Nike_Swot_Pest_Analysis_Case_Study" title="Apple Case Study"><span itemprop="name">Nike Swot Pest Analysis Case
                                             Study</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Ikea_Case_Study" title="Apple Case Study"><span itemprop="name">Ikea Case Study</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Buy_Assignment_Case_Study" title="Apple Case Study"><span itemprop="name">Buy Assignment Case
                                             Study</span></a></li>



                         </ul>
                    </li>


                    <li class="nav-item"><a class="nav-link" href="research">Research <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Bibliography_Maker" title="Write My Paper For Me"><span itemprop="name">Bibliography
                                             Maker</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Writing_Help" title="Write My Paper For Me"><span itemprop="name">Research Writing
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Paper_Writing_Service" title="Write My Paper For Me"><span itemprop="name">Research Paper Writing
                                             Service</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Paper_Topics" title="Write My Paper For Me"><span itemprop="name">Research Paper
                                             Topics</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Ghost_Writers" title="Write My Paper For Me"><span itemprop="name">Ghost Writers</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Paper_Help" title="Write My Paper For Me"><span itemprop="name">Research Paper
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Custom_Writing_Service" title="Write My Paper For Me"><span itemprop="name">Custom Writing
                                             Service</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="College_Paper_Writing" title="Write My Paper For Me"><span itemprop="name">College Paper
                                             Writing</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Buy_College_Papers" title="Write My Paper For Me"><span itemprop="name">Buy College
                                             Papers</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="How_to_Write_a_College_Paper" title="Write My Paper For Me"><span itemprop="name">How to Write a College
                                             Paper</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Term_Paper" title="Write My Paper For Me"><span itemprop="name">Term Paper</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Writing_Services" title="Write My Paper For Me"><span itemprop="name">Writing Services</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Help_with_Report" title="Write My Paper For Me"><span itemprop="name">Help with Report</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Custom_Pape_Writing_Services" title="Write My Paper For Me"><span itemprop="name">Custom Paper Writing
                                             Services</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Paper_Writers" title="Write My Paper For Me"><span itemprop="name">Paper Writers</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Research_Proposal_Help" title="Write My Paper For Me"><span itemprop="name">Research Proposal
                                             Help</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Story_Writing" title="Write My Paper For Me"><span itemprop="name">Story Writing</span></a>
                              </li>
                         </ul>
                    </li>


                    <li class="nav-item"><a class="nav-link" href="cdr">CDR <i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">

                              <li class="nav-item"><a class="nav-link" itemprop="url" href="CDR_Writing_Services" title="CDR Writing Services"><span itemprop="name">CDR Writing
                                             Services</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="CDR_Engineers_Australia" title="CDR Engineers Australia"><span itemprop="name">CDR Engineers
                                             Australia</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="CDR_Report_Writers" title="CDR Report Writers"><span itemprop="name">CDR Report Writers</span></a>
                              </li>

                         </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="BIOTECHNOLOGY_ASSIGNMENT_HELP">Bio technology<i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="BIOTECHNOLOGY_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">BIOTECHNOLOGY ASSIGNMENT
                                             HELP</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="BIOINFORMATICS_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">BIOINFORMATICS ASSIGNMENT
                                             HELP</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="BIOCHEMISTRY_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">BIOCHEMISTRY ASSIGNMENT
                                             HELP</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="BIOLOGY_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">BIOLOGY ASSIGNMENT HELP</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="ANTHROPOLOGY_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">ANTHROPOLOGY ASSIGNMENT
                                             HELP</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="PALEONTOLOGY_ASSIGNMENT_HELP" title="ZARA Case Study"><span itemprop="name">PALEONTOLOGY ASSIGNMENT
                                             HELP</span></a></li>
                         </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="proof">Proof reading<i class="fa fa-caret-right ml-4"></i></a>
                         <ul class="nav-submenu">
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Proof_Reading_Services" title="ZARA Case Study"><span itemprop="name">Proof Reading Services</span></a>
                              </li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Proof_Reading_Services_Australia" title="ZARA Case Study"><span itemprop="name">Proof Reading Services
                                             Australia</span></a></li>
                              <li class="nav-item"><a class="nav-link" itemprop="url" href="Proof_Reading_Services_UK" title="ZARA Case Study"><span itemprop="name">Proof Reading Services
                                             UK</span></a></li>
                         </ul>
                    </li>
               </ul>
               </li>
               <li><a href="#" style="text-decoration:none;">Review</a></li>
               <li><a href="#" style="text-decoration:none;">About us</a></li>
               <li><a href="#" style="text-decoration:none;">Contact us</a></li>
               <li><a href="#" style="text-decoration:none;">Ordering FAQ</a></li>
               <li style="float:right;"><a class="request_call_back" href="#" onclick="document.getElementById('id02').style.display='block'" style="text-decoration:none;color:#fcfcfc;"><b>Request Callback </b></a></li>
               </ul>
          </div>
    <div class="container-fluid mobile_nav" style="background-color:#fcfcfc!important;z-index:1;height:50px;width:100%;top:0%;">
      <div style="background-color:red;background:transparent;z-index:1;" >
        <img src="{{asset('images/1ss.png')}}" class="mobile_nav_logo">
        <a href="#" class="mobile_view_get_assignment" style="text-decoration:none;">get assignment</a>
        <span class="glyphicon glyphicon-th-list mobile_nav_button" href="javascript:void(0);" onclick="myFunction()"></span>
      </div>
    </div>
    <div class="container-fluid sticky_navbar" id="sticky_navbar">
      <ul class="sticky_list">
        <form method="post" action="/">
          <li class="sticky_list"><input type="email" class="form-control" name="email" placeholder="Email" required></li>
          <li class="sticky_list"><input type="email" class="form-control" name="subject" placeholder="Subject" required></li>
          <li class="sticky_list"><select class="form-control">
              <option>1 page/250 words</option>
              <option>2 page/500 words</option>
              <option>3 page/750 words</option>
              <option>4 page/1000 words</option>
              <option>5 page/1250 words</option>
              <option>6 page/1500 words</option>
              <option>7 page/1750 words</option>
              <option>8 page/2000 words</option>
              <option>9 page/2250 words</option>
              <option>10 page/2500 words</option>
              <option>11 page/2750 words</option>
              <option>12 page/3000 words</option>
              <option>13 page/3250 words</option>
              <option>14 page/3500 words</option>
              <option>15 page/3750 words</option>
              <option>16 page/4000 words</option>
              <select></li>
          <li class="sticky_list"><input type="datetime-local" class="deadline_time" id="deadline" name="deadline" style="border:1px solid #C0C0C0;"></li>
          <li style="float:right;list-style:none;"><button type="submit" class="btn btn-success btn-lg">Get Help</button></li>
          <input type="text" name="assignment_type" value="coming from nav" hidden>
        </form>
      </ul>
    </div>
    <!-- <div class="conatiner-fluid themepage">
      <img src="{{ asset('images/androidback.jpg') }}" class="theme_image">
      <div class="col-sm-6">
        &nbsp;
      </div>


        <br><br>
        <button type="submit" class="get_assist">Get Free Assistance</button>
      </div>
    </div>
    <div class="conatiner-fluid mobile_themepage">
      <img src="{{ asset('images/androidback.jpg') }}" class="theme_image">
      <div class="row mobile_view_form">
        <br><br><br>
        <p class="theme_assignment_para">Tough deadlines, vague tasks, overlapping assignments causing a lot of stress?</p>
        <h1 class="theme_assignment_heading">Assignment Help Australia</h1>
        <p class="theme_assignment_para">Take help from best writing service in Australia !</p>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <p style="color:#fcfcfc;">Number of pages/words you require</p>
        <div class="input-group bootstrap-touchspin" style="z-index:-1;"><span class="input-group-btn"> <button class="btn blue bootstrap-touchspin-down count" onclick="return assignment_page_decrement()" type="button">-</button> </span>
          <input type="text" value="1 Page/250 Words" name="headpages" readonly="" id="id_esof_pages_qty1" class="form-control text-center" style="display:block;font-size:12px">
          <span class="input-group-addon bootstrap-touchspin-postfix" style="display:none"></span><span class="input-group-btn">
            <button class="btn red bootstrap-touchspin-up count" onclick="return assignment_page_increment()" type="button">+</button> </span>
        </div>
        <input type="hidden" name="pages" class="pages1" value="1">
        <br>
        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        <p style="color:#fcfcfc;">Choose your assignment deadline</p>
        <input type="datetime-local" class="deadline_time" id="deadline" name="deadline">
        <br><br>
        <button type="submit" class="get_assist">Get Free Assistance</button>
      </div>
    </div> -->
    <div id="id02" class="modal">
      <div class="modal-content animate">
        <form action="/action_page.php" method="post">
          <div class="imgcontainer" style="text-align:center;">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <br><br>
          </div>
          <div class="row" style="padding:10px;">
            <h1 style="text-align:center;font-weight:700;color:gray;">Order Now</h1>
            <div class="col-sm-6">
              <input type="email" class="form-control" name="email" placeholder="Email" required><br><br>
              <p style="color:#808080;">Number of pages/words you require</p>
              <select class="form-control">
                <option>1 page/250 words</option>
                <option>2 page/500 words</option>
                <option>3 page/750 words</option>
                <option>4 page/1000 words</option>
                <option>5 page/1250 words</option>
                <option>6 page/1500 words</option>
                <option>7 page/1750 words</option>
                <option>8 page/2000 words</option>
                <option>9 page/2250 words</option>
                <option>10 page/2500 words</option>
                <option>11 page/2750 words</option>
                <option>12 page/3000 words</option>
                <option>13 page/3250 words</option>
                <option>14 page/3500 words</option>
                <option>15 page/3750 words</option>
                <option>16 page/4000 words</option>
                <select>
                  <input type="hidden" name="pages" class="pages1" value="1">
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required><br><br>
              <p style="color:#808080;">Choose your assignment deadline</p>
              <input type="datetime-local" style="border:1px solid silver;" class="deadline_time" id="deadline" name="deadline">
            </div>
          </div>
          <div class="container" style="width:100%;">
            <button class="cancel_btn" type="button" onclick="document.getElementById('id02').style.display='none'">Cancel</button>
            <button type="submit" style="float:right;" class="submit_btn">Order Now</button>
          </div>
        </form>
      </div>
    </div>
    @yield('content')
    <div class="container-fluid" style="padding-top:30px;background-color:#808080;padding-left:0px;padding-right:0px;">
      @yield('footer')
      <div class="container-fluid">
        <div class="col-sm-3 footer">
          <h4 class="footer_heading">Let Us Help You</h4>
          <a href="Faq"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Faqs</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Resources</a><br>
          <a href="Premium"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Premium</a><br>
          <a href="Term_of_use"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Term Of Use</a><br>
          <a href="Fair_use_of_policy"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Fair Use Policy</a><br>
          <a href="Privacy_policy"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Privacy Policy</a><br>
          <a href="Revision_and_refund"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Revision & Refund Policy</a><br><br>
        </div>
        <div class="col-sm-3 footer">
          <h4 class="footer_heading">Get to Know US</h4>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;How It Works</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Reviews</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Experts</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Contact Us</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Blog</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Resume</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Legit Essay</a><br>
          <a><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Our Offers</a><br><br>
        </div>
        <div class="col-sm-3 footer">
            <h4 class="footer_heading">Best In Countries</h4>
            <a><span><img src="{{asset('images/australia.png')}}" style="height:20px;width:20px"></span>&nbsp;Australia</a><br>
            <a><span><img src="{{asset('images/india.png')}}" style="height:20px;width:20px"></span>&nbsp;India</a><br>
            <a><span><img src="{{asset('images/canada.png')}}" style="height:20px;width:20px"></span>&nbsp;Canada</a><br>
            <a><span><img src="{{asset('images/malaysia.png')}}" style="height:20px;width:20px"></span>&nbsp;Malaysia</a><br>
            <a><span><img src="{{asset('images/united-states-of-america.png')}}"   style="height:20px;width:20px"></span>&nbsp;US</a><br>
            <a><span><img src="{{asset('images/ji.png')}}" style="height:20px;width:20px"></span>&nbsp;UK</a><br>
            <a><span><img src="{{asset('images/united-arab-emirates.png')}}" style="height:20px;width:20px"></span>&nbsp;UAE</a><br>
            <a><span><img src="{{asset('images/singapore.png')}}" style="height:20px;width:20px"></span>&nbsp;Singapore</a><br>
            <a><span><img src="{{asset('images/new-zealand.png')}}" style="height:20px;width:20px"></span>&nbsp;New Zealand</a><br>
            <a><span><img src="{{asset('images/australia.png')}}" style="height:20px;width:20px"></span>&nbsp;And more many</a><br><br>
            </div>
        <div class="col-sm-3" style="padding-top:30px;">
          <div class="container-fluid" style="text-align:center;color:#fcfcfc;width:200px;background-color:#696969;padding:10px;">
            <p>Upload your requirements and see your grades improving.300K+ Satisfied Students.Rated 4.9/5Based On Overall 14001 Reviews.</p>
            <a class="btn btn primary" style="background-color:#5F9EA0;color:#fcfcfc;width:auto;" href="newassignment">Order Now</a>
          </div>
        </div>
      </div>
      <div class="container-fluid text-center" style="background-color:#696969;padding-left:40px;padding-right:40px;padding-top:20px;padding-bottom:30px; ">
        <div class="col-sm-12 text-center">
          <h4 style="color:#fcfcfc;">Get in touch</h4>
          <a href="#" class="fa far fa-facebook text-decoration-none" style="text-decoration:none;"></a>
          <a href="#" class="fa far fa-twitter text-decoration-none" style="text-decoration:none;"></a>
          <a href="#" class="fa  far fa-linkedin text-decoration-none" style="text-decoration:none;"></a>
          <a href="#" class="fa  far fa-instagram text-decoration-none" style="text-decoration:none;"></a>
        </div>
        <div class="col-sm-6">
          &nbsp;
        </div>
      </div>
    </div>





    <script>
          function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav1") {
        x.className += " responsive";
      } else {
        x.className = "topnav1";
      }
    }



      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>
    <script>
      $(document).ready(function() {
        if ($(window).width() > 992) {
          $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
              $('#sticky_navbar').addClass("fixed-top");
              $('#sticky_navbar').removeClass("sticky_navbar");
              // add padding top to show content behind navbar
              $('body').css('padding-top', $('.top_nav').outerHeight() + 'px');
            } else {
              $('#sticky_navbar').removeClass("fixed-top");
              $('#sticky_navbar').addClass("sticky_navbar");
              // remove padding top from body
              $('body').css('padding-top', '0');
            }
          });
        }
      });
    </script>

  </body>

  </html>
