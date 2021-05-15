@extends('user.layout.master')
   @section('title','A2zassignmenthelp')
   @section('content')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
   <style>
   .checked {
     color: orange;
   }
   </style>
   <style>
       div.stars {
  width: 270px;
  display: inline-block;
}
*{
    box-sizing: border-box;
}


.card-body{
    padding: 8px;
}
.m1 li{
    color: #ffba00;
    line-height: 10px;
    letter-spacing: .5px;
}
span{
    color: #bab3b3;
    font-size: 15px;


}
.fa-star{
padding: 0px !important;
width: 10px !important;
}
.m1 p{
    line-height: 1.2;
    font-size: .9375rem;
}
.text-right{
    line-height: 1;
}
p img{
    width: 20px;
}
.m2{
    margin-top: 10px;
}
.m3 ul{
    margin-left: 34%;
    margin-right: 34%;

}
.page-item  a{
    background-color:#0facf3;
    color: #ffff;
    margin-left:10px;
}
.page-item  a:hover{
    color:#0facf3

}
.card{
    width: 350px;
    height: 344.5px;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
       /* The Modal (background) */

h1,p{
    font-family: Poppins,sans-serif;
}
*
{
    font-family: Poppins,sans-serif;
}
video {
            width: 80%;
        }

        .modal-body {
            background-color: rgba(0, 0, 0, 0.7);
        }
.lspacing {
    padding-top: 10px;
    padding: 10px;
    font-family: Poppins,sans-serif;
}
.modal-content {
    background-color: #fefefe;
    margin: 3% auto 17% auto;
    border: 1px solid #888;
    max-width: 900px;
}
.key_feature i{
    font-size: 35px;
    color:black;
    font-weight: 900;
}
.btn {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
}
.fw-400 {
    font-weight: 400!important;
}

.fs-20 {
    font-size: 20px!important;
}
.w-250 {
    width: 250px!important;
}
.shadow-3 {
    -webkit-box-shadow: 0 0 25px rgb(0 0 0 / 8%);
    box-shadow: 0 0 25px rgb(0 0 0 / 8%);
}
    .counter_head_div
    {
        padding-top:500px;
    }
    .bg-gray, .bg-grey {
    background-color: #f8f8f8;
}
    .counter_div
    {
        text-align:center;
        padding:20px;
    }
    .text-justify {
    text-align: left !important;
}
.div {
    background-image:url('Captures.PNG');
    background-repeat:no-repeat;
    background-position:left bottom;
}
p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
    .counter_inner_div
    {
        padding-top:13%;
        background-color:#F8F8FF;
        height:200px;
    }
    .span .fa {
    padding: 12px;
    font-size: 100px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin-left:-30px;

}
    .counter_content
    {
        font-size:20px;
        color:#808080;
    }
    @media only screen and (max-width: 1155px)
    {
      .counter_head_div
    {
        padding-top:600px;
    }
    }
    @media only screen and (max-width: 767px)
    {
      .counter_head_div
    {
        padding-top:150px!important;
    }
    }
    .counter_inner_div span{
        color:orange;
        font-size: 30px;
    }
   </style>
     <div class="container counter_head_div">
        <h1 style="text-align:center;color:#0f0101" class="h1">Assignment Help Services</h1>
        <p class="counter_content" style="text-align:center;">Take help from best MBA writing service in Australia</p>


    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">50,000</span><span>+</span></h1>
    <p class="counter_content">Assignments</p>
    </div>
    </div>
    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">1124</span><span>+</span></h1>
    <p class="counter_content">PHD and Masters level experts</p>
    </div>
    </div>
    <div class="col-sm-4 counter_div">
    <div class="counter_inner_div">
    <h1 style="color:#FF7F50;"><span class="counter">129</span><span>+</span></h1>
    <p class="counter_content">Subjects</p>
    </div>
    </div>
    </div>
<div class="container" style="padding: 10px;">
    <div class="row align-items-center">


<div class="col-md-0"></div>


<div class="container">
    <div class="row">




        <div class="col-12 col-md-5 " style="margin-left: 40px;margin-top:20px">


        <h1>HOW IT WORKS</h1>
        <br>
        <ul>

        <li><h5>Fill the assignment help order form</h5></li>
        <li><h5>Upload the files</h5></li>
        <li><h5>Instant chat with expert</h5></li>
        <li><h5>Get the best price</h5></li>
        <li><h5>Make payment through paypal, credit card, debit card &amp; </h5><h5> banking</h5></li>
        </ul>
        <br><a class="btn btn-primary fs-20 fw-500 w-250 shadow-3 hidden-sm-down mt-5" style="font-family: Poppins,sans-serif;padding:10px;width:200px;height:50px" href="newassignment">GET HELP</a>
        </div>
        <div class="col-md-6 " style="margin-top:50px">
            <img src="{{asset('images/Capture.PNG')}}" alt="" width="100%" data-toggle="modal" data-target="#myModal">

            </button>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">




                        <!-- Modal body -->
                        <div class="modal-body text-center">
                            <video controls>
           <source src="{{asset('images/how-it-works.mp4')}}" type="video/mp4">

         </video>

                        </div>




                    </div>
                </div>
            </div>

        </div>

    </div>

</div></div></div>
<div  style="margin-top: 60px;width:100%;background-color:#F8F8FF">

<div class="container-fluid services " style="margin-top: 60px;background-color:#F8F8FF">
<h1 style="text-align:center;color:#180202;"> Services</h1>
<div style="margin-top: 20px">
  <div class="col-sm-4 col-md-4 services_div" >
  <div class="services_inner_div">
<span class="span"><i class="fa fa-user-o" aria-hidden="true"></i></span>
  <h4 style="color:#333232;text-align:center">Online Assignment Help</h4>
  <p class="text-justify lspacing">a2zassignmenthelp.com  helps you to stay at the top of the class with online assignment help. The reason we have been the go to place for urgent assignment help is our pool of finest assignment writing experts from Australia for all academic assignments. Our assignment writers have great writing skills and run a comprehensive assignment check to provide you with a custom online assignment help. Our assignment writers are best academic experts. </p>
  <a class="btn" href="onlineassignmenthelp" style="align-items: center;display:flex;text-align:center;justify-content: center;">Read More</a>
</div>
  </div>
  <div class="col-sm-4 col-md-4 services_div">
  <div class="services_inner_div">
      <span  class="span"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
  <h4 style="color:333232;text-align:center">DISSERTATION WRITING HELP </h4>
  <p class="text-justify lspacing"> Dissertation writing is a real test of capabilities of a student since it requires extensive research and thorough understanding of the subject. Our team of experienced writers have developed a structured approach to help scholars complete their dissertation and research projects and help students score good grades.With so many Dissertation Writing Help services being set up, many will try to fool you with flowery languages and ultimately drawing.</p>
  <a class="btn"  href="dissertationwrittinghelp"style="align-items: center;display:flex;text-align:center;justify-content: center;">Read More</a>

</div>
  </div>
  <div class="col-sm-4 col-md-4 services_div">
  <div class="services_inner_div">
      <span  class="span"><i class="fa fa-laptop" aria-hidden="true"></i></span>
  <h4 style="color:#333232;text-align:center">a2z ASSIGNMENT HELP</h4>
  <p class="text-justify lspacing">a2z Assignment Help is a leading academic writing service provider in  education market worldwide. We emphasize on delivering high-quality academic writing services and have helped thousands of students score good grades in pursuit of their MBA education.
Being a premium academic writing service provider, we allocate your assignment to our highly qualified and experienced team of subject matter experts, ensuring students get  </p>
  <a class="btn" href="a2zassignment" style="align-items: center;display:flex;text-align:center;justify-content: center;">Read More</a>
  </div>
</div>
  </div></div>
</div>
</div>
<br><br>
<div class=" container-fluid key_feature" style="margin-top:100px;">

<h1 style="text-align:center;color:#696969;">Key Features</h1>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
    <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
  <h4 style="color:#696969;">On Time Delivery</h4>
  <p class="text-justify lspacing">We provide quality solutions for all professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
    <span><i class="fa fa-window-restore" aria-hidden="true"></i></span>
  <h4 style="color:#696969;">24x7 Live Chat Help Support</h4>
  <p class="text-justify lspacing">We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
      <span><i class="fa fa-cubes" aria-hidden="true"></i></span>
  <h4 style="color:#696969;">4205 PHD Experts</h4>
  <p class="text-justify lspacing">We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
      <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
  <h4 style="color:#696969;">Services For All Subjects</h4>
  <p class="text-justify lspacing">We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
      <span><i class="fa fa-clone" aria-hidden="true"></i></span>
  <h4 style="color:#696969;">Best Price Guarantee</h4>
  <p class="text-justify lspacing">We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
  </div>
  <div class="col-sm-4 services_div">
  <div class="services_inner_div">
    <span><i class="fa fa-window-restore" aria-hidden="true"></i></span>

  <h4 style="color:#696969;">Plagrism Free Work</h4>
  <p class="text-justify lspacing">We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

  </div>
 </div>
 <p class="text-center">

    <a class="btn btn-light fs-20 fw-400 w-250 shadow-3 text-center hidden-sm-down" href="feature">View All Features</a>
    </p>
</div>











<div  style="margin-top: 60px;width:100%;background-color:#0a0a0ea6">

    <div class="container-fluid services " style="margin-top: 60px;background-color:#06060791">
    <h1 style="text-align:center;color:white;font-family: Poppins,sans-serif;"> REVIEW</h1>
    <div style="margin-top: 20px;padding:10px;">
        <div class="row">
            <div class="col-md-4 a">
                <div class="card">
                    <div class="card-body">
                        <p style="margin-bottom: 0px;color:white">
                            <strong>Accounting</strong>
                            (Assignment)
                        </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <br>
                            <p class="text-justify;" style="color: white">I uploaded incomplete instructions at the time of booking as I
                                was in hurry. The
                                writer demanded my course material for his reference because he was not able to find
                                the adequate extract to answer my assignment. Thanks for all the hard work writer
                                put in my assignment to make it worth an A+ grade. Thanks so much for your effort.
                                Will use the services again.</p>
                            <div class="text-right">
                                <h6 style="color: white">User Id: 187316</h6>
                                <p style="color: white"><img src="{{asset('images/australia.png')}}" alt=""> &nbspCA &nbsp</p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 a">
                <div class="card">
                    <div class="card-body">
                        <p style="margin-bottom: 0px;color:white">
                            <strong>Finance</strong>
                            (Assignment)
                        </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <br>
                            <p class="text-justify;" style="color: white">Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                            <div class="text-right">
                                <h6 style="color: white">User Id: 187316</h6>
                                <p style="color: white"><img src="{{asset('images/canada.png')}}" alt=""> &nbspSA &nbsp</p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 a">
                <div class="card">
                    <div class="card-body">
                        <p style="margin-bottom: 0px;color:white">
                            <strong>Accounting</strong>
                            (Assignment)
                        </p>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                            <br>
                            <p class="text-justify;" style="color: white">A value for money services for the solution which has been provided. The structure of the assignment was pretty well maintained. PowerPoint slides were crisp and edgy. Speaker notes written were self-explanatory and helped me a lot to understand more about the assignment. Thousand and millions of thanks to the support team to help me with a short deadline. I am glad that I made a correct .</p>
                            <div class="text-right">
                                <h6 style="color: white">User Id: 187316</h6>
                                <p style="color: white"><img src="{{asset('images/australia.png')}}" alt=""> &nbspCA &nbsp</p>

                        </div>
                    </div>
                </div>

            </div>
      </div>
      <p class="text-center">

        <a class="btn btn-light fs-20 fw-400 w-250 shadow-3 text-center hidden-sm-down" style="border: 2px solid white;
        color: white;" href="review">View All Review</a>
        </p>

    </div>
    </div>
</div>






<div id="id0" class="modal" style="">

    <div class="modal-content animate lg" style="" >
        <span onclick="document.getElementById('id0').style.display='none'" class="close" title="Close Modal">&times;</span>

        <div class="container-fluid" style="">
            <div class="row div">

                <div class="col-md-8" style="margin-left: 250px">
                    <form method="POST" action="feedback">
                        @csrf
                    <div class="row">
                        <div class="col-md-6" style="margin-top:40px;">
                            <div class="form-group">
                                <label for="usr">Order Id</label>
                                <input type="text" name="id" class="form-control" id="usr" placeholder="Enter Older id">
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-top:40px;">
                            <div class="form-group">
                                <label for="review">Review Title</label>
                                <input type="text" name="reviewtitle" class="form-control" id="review" placeholder="Review Title">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label for="sel1">Share Your Grade</label>
                                <select class="form-control" name="grade" id="sel1" placeholder="Select your Grade">
                          <option>Select</option>
                          <option>B</option>
                          <option>C</option>
                          <option>D</option>
                        </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pwd">Give ypur Rating</label>
                                <div class="stars">

                                      <input class="star star-5" id="star-5" type="radio" value="1" name="star1"/>
                                      <label class="star star-5" for="star-5"></label>
                                      <input class="star star-4" id="star-4" type="radio" value="1" name="star2"/>
                                      <label class="star star-4" for="star-4"></label>
                                      <input class="star star-3" id="star-3" type="radio" value="1" name="star3"/>
                                      <label class="star star-3" for="star-3"></label>
                                      <input class="star star-2" id="star-2" type="radio" value="1" name="star4"/>
                                      <label class="star star-2" for="star-2"></label>
                                      <input class="star star-1" id="star-1" type="radio" value="1" name="star5"/>
                                      <label class="star star-1" for="star-1"></label>

                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="comment">Write your feedback</label>
                                <textarea class="form-control" name="feedbackwrite" rows="5" id="comment">please write your feedback here...</textarea>
                            </div>
                            <button type="submit" style="margin-left:60px;margin-bottom:20px;margin-top:20px;width: 300px;" class="btn btn-success">Submit Your Feedback</button>

                        </div>
                    </div>
                    </form>
                </div>
                @if(session()->has('message'))
                <div class="alert ml-5 mr-5" role="alert">
                  <p style="color:green">  {{ session()->get('message') }}</p>
                </div>
            @endif
            </div>
        </div>
      </div>
    </div>



<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script>
$(document).ready(function()
{
  $('.counter').counterUp({
    delay: 60,
    time: 3000
});
});
</script>

  @endsection
