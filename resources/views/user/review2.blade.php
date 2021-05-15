@extends('user.layout.master')
   @section('content')
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet">
   <style>


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
        div.stars {
  width: 270px;
  display: inline-block;
}
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: orange;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}


*{
    box-sizing: border-box;
    font-family: Poppins,sans-serif;
    color:black;

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
   .Q
   {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.19);
    padding:20px;
   }
   .lspacing {
    padding-top: 10px;
    padding: 10px;
    font-family: Poppins,sans-serif;
}
.center {
  display: block;
  margin-left: 10%;
  margin-right: 10%;
  width: 80%;
}
   .A
   {
       display:none;
       color:#808080;
   }
   .ans
   {
      padding-left:5%;
   }
   .checked {
     color: orange;
   }
   .ans-list
   {
      font-size:16px;
   }
   .myicon1
   {
       display:none;
   }
   @media only screen and (min-width: 700px) {
    #im {
   margin-left: 250px;
  }
  .main
  {
    padding-top:500px
  }
}
@media only screen and (max-width: 700px) {
  #im {
    margin-left: -50px;
  }
  .main
  {
    padding-top:80px
  }
}
.card{
    border-bottom: 1px solid lightgrey;
    margin-top:40px;
    padding:5px;
    height:300px;
}
   </style>
<div class="conatiner main" style="">
    <h1 style="text-align:center;font-weight:800;font-size:40px;color:#696969;">REVIEW</h1><br>
      <div class="" style="padding:30px">
        <div class="row">
          <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    <p style="margin-bottom: 0px">
                        <strong>Finance</strong>
                        (Assignment)
                    </p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <br>
                        <p class="text-justify;" >Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                        <div class="text-right">
                            <h6 >User Id: 187316</h6>
                            <p><img src="{{asset('images/canada.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

                    </div>
                </div>
            </div>

          </div>
          <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    <p style="margin-bottom: 0px">
                        <strong>Finance</strong>
                        (Assignment)
                    </p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>

                        <br>
                        <p class="text-justify">I got full marks in this assignment and hope in future you help
                            me with great results. Thanks.
                        </p>                        <div class="text-right">
                            <h6 >User Id: 187316</h6>
                            <p><img src="{{asset('images/singapore.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

                    </div>
                </div>
            </div>

          </div>
          <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    <p style="margin-bottom: 0px">
                        <strong>IT infrastructure</strong>
                        (Computer Science)
                    </p>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>

                        <br>
                        <p class="text-justify;" >Having a great time with my family, all thanks to
                            a2zassignmenthelp.com. They took all my worries and completed the work within a day.
                            I am glad that I took the help from them. Thank you a2zassignmenthelp.com for such
                            nice support. By the way, the quality of the work was perfect.
                        </p>
                        <div class="text-right">
                            <h6 >User Id: 187316</h6>
                            <p><img src="{{asset('images/new-zealand.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

                    </div>
                </div>
            </div>

          </div>
<br><br><br>
<div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Management accounting</strong>
                (Accounting)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <br>
                <p class="text-justify">I really appreciate the work done by a2zassignmenthelp within
                    the deadlines. Looking forward to getting help more in the future because the
                    service was much better for me.
                </p>                <div class="text-right">
                    <h6 >User Id: 187316</h6>
                    <p><img src="{{asset('images/canada.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Business Management</strong>
                (Assignment)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <br>
                <p class="text-justify">Great work in such a short time, standard of work is very high
                    quality, thank you very much, will definitely be using this site again and recommend
                    for everyone, great price.
                </p>                <div class="text-right">
                    <h6 >User Id: 187316</h6>
                    <p><img src="{{asset('images/canada.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Finance</strong>
                (Assignment)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <br>
                <p class="text-justify;" >Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                <div class="text-right">
                    <h6 >User Id: 187316</h6>
                    <p><img src="{{asset('images/canada.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <br>
  <br>
  <div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Finance</strong>
                (Assignment)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>

                <br>
                <p class="text-justify;" >Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                <div class="text-right">
                    <h6 >User Id: 187316</h6>
                    <p><img src="{{asset('images/canada.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Finance</strong>
                (Assignment)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>

                <br>
                <p class="text-justify;" >Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                <div class="text-right">
                    <h6 >User Id: 187316</h6>
                    <p><img src="{{asset('images/malaysia.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <div class="col-md-4 ">
    <div class="card">
        <div class="card-body">
            <p style="margin-bottom: 0px">
                <strong>Finance</strong>
                (Assignment)
            </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>

                <br>
                <p class="text-justify;" >Firstly, I was surprised to find my discipline under your service section. Secondly, the assignment covers all the aspects of the requirement aided by a fluent and professional writing. I must say it as ‘The Best Online Services’ for assignment help..</p>
                <div class="text-right">
                    <h6 >User Id: 1809316</h6>
                    <p><img src="{{asset('images/germany.png')}}" alt="" style="height: 20px;width:20px"> &nbspSA &nbsp</p>

            </div>
        </div>
    </div>

  </div>
  <div class="container" style="padding: 16px;
  justify-content: center;
  display: flex;">
  <div class="pagination">
    <a href="#">&laquo;</a>
    <a href="#">1</a>
    <a href="review" >2</a>
    <a href="review2" class="active">3</a>
    <a href="#">4</a>

    <a href="#">&raquo;</a>
  </div>


       </div>
     </div>
     <div class="container mt-5" style="box-shadow: 0 0 25px rgb(0 0 0 / 8%);margin-top:50px">
        <div class="row" style="display:flex;justify-content:center">

         <div class="col-md-4" style="display:flex;justify-content:center"> <img src="{{asset('images/PngItem_4821346.png')}}" style="height:200px;width:200px;"></div>
            <div class="col-md-4">
                <h1 style="color: orange;text-align:center">Student Feedback</h1>
                <p style="font-size: 18px;text-align:center">Your Feedback Help Us To Improve Our Service</p>
        <Button class="btn btn-light fs-20 fw-400 w-250 shadow-3 text-center hidden-sm-down"style="background: white;
        color: orange;
        border: 2px solid;"><a  href="#" onclick="document.getElementById('id0').style.display='block'" style="width:auto;text-decoration:none;color:orange" >Order Now</a></Button>
        </div>

        </div></div>
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


</div>
      <script>
      $(document).ready(function()
      {
         $(".Q").on('click',function()
         {
            $(this).find(".A").toggle();
            $(this).find(".myicon").toggle();
            $(this).find(".myicon1").toggle();
         });
      });
      </script>
   @endsection
