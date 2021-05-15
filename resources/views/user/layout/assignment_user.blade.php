<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Assignment</title>
    <style>





.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: rgba(0, 0, 0, 0.733) !important;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
  font-family: Poppins,sans-serif;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
p{
    max-width: 800px;
    margin: auto;
    text-align: justify;
    padding: 0 40px;
}

.loader-container{
    width: 100%;
    height: 100vh;
    background-color: black;
    z-index: 10;
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
}

.circle {
	width: 100px;
	height: 100px;
	border-radius: 50%;
	background: rgba(231, 76, 60, 0.6);
	transform: scale(0.2);
}
.two {
	animation-name: moveTwo;
	animation-duration: 1.8s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
	background: rgba(52, 152, 219, 0.6);
}
.first {
	animation-name: moveOne;
	animation-duration: 1.5s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: ease-in-out;
}
@keyframes moveOne {
	from {
	}
	to {
		background: rgba(50, 150, 150, 0.9);
		transform: translateX(300px);
	}
}
@keyframes moveTwo {
	from {
	}
	to {
		background: rgba(200, 50, 100, 0.9);
		transform: translateX(-300px);
	}
}


    .nav
    {
        position:fixed;
        left:0%;
        right:0%;
        top:0%;
        padding-top:20px;
        background-color:#5F9EA0;
        padding-bottom:20px;
    }
    .dropdown li
    {
        float:left;
        padding-left:7%;
        list-style:none;
    }
    .dropdown li a
    {
        color:#F0F8FF;
        cursor:pointer;
        font-size:16px;
        font-weight:bold;
    }
    .sublist
    {
        display:none;
    }
    .sublist li
    {
        float:none;
        list-style:none;
    }
    .submenu:hover .sublist
    {
        display:block;
        width:200px;
        position:absolute;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        padding-left:0%;
        padding-top:0.5%;
        padding-bottom:15px;
        background-color:#F0F8FF;
    }
    .submenu:hover .sublist li
    {
      padding-top:12px;
      cursor:pointer;
    }
    .submenu:hover .sublist li a
    {
        color:#000000;
        font-size:14px;
    }
    .feedback_button
    {
        padding:10px;
        font-size:14px;
        border-top-left-radius:5px;
        border-bottom-left-radius:5px;
        background-color:#4682B4;
        color:#fcfcfc;
        cursor:pointer;s
        position:fixed;
        top:40%;
        right:0%;
    }
    @media only screen and (max-width: 700px) {
 #first{
    display: flex;
    margin-left: -50px;
    margin-top: 30px;
 }
 #second{
    float: right;
    margin-top:-80px;

 }
 #logo
 {
     margin-top:-10px;
     margin-left: 10px;
 }
}
@media only screen and (min-width: 700px) {
 #first{

    margin-top: -30px;
    margin-left:100px;
 }

#logo
{

    margin-left: 10px;
}
}
    </style>
</head>
<body>
    <div class="loader-container" style="z-index: 10">

        <div class="circle first">
        </div>
        <div class="circle two">
        </div>


</div>
<div class="container-fluid nav" style="z-index: 8">
    <a style="text-decoration:none;"><img src="{{asset('images/1ss.png')}}" id="logo" style="height:60px;width:140px"></a>
 <ul class="dropdown" id="first">

     <li class="submenu"><a style="text-decoration:none;">
     <span class="glyphicon glyphicon-file" style="color:#fcfcfc"></span>
     &nbsp;Assignments &nbsp; <span class="glyphicon glyphicon-menu-down" style="color:#fcfcfc"></span></a>
       <ul class="sublist">
            <li> <a href="/UserDashboard" style="text-decoration:none;">
                 Active Assignment
                 </a>
            </li>
            <li> <a href="/CompletedAssignment" style="text-decoration:none;">
                 Completed Assignment
                 </a>
            </li>
            <li> <a href="/ExpiredAssignment" style="text-decoration:none;">
                  Expired Assignment
                 </a>
            </li>
            <li> <a href="/RewokAssignment" style="text-decoration:none;">
                 Rework Assignment
                 </a>
            </li>
       </ul>
     </li>
     <li><a style="text-decoration:none;" href="newassignment"> <span class="glyphicon glyphicon-plus" style="color:#fcfcfc"></span> New Assignments </a></li>


 </ul>
 <ul class="dropdown" id="second">
 <li style="float:right;padding-right:10%;"> <a style="text-decoration:none;"><span class="glyphicon glyphicon-user" class="dropbtn" style="color:#fcfcfc;font-size:18px;">
    <div class="dropdown-content">
      <a href="#" style="text-align: center">Profile</a>
      <a href="#" style="text-align: center">Logout</a>

    </div></span></a></li></ul>
</div>
<div class="container-fluid" style="z-index: 0">
@yield('body')
</div>
<script>
    $(window).on("load",function(){
        $(".loader-container").fadeOut(2000);
    });
</script>
</body>
</html>
