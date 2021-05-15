@extends('user.layout.master')
   @section('content')
   <style>
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
    padding-top:50px
  }
}
   </style>
      <div class="conatiner main" style="">
      <h1 style="text-align:center;font-weight:800;font-size:40px;color:#696969;">ONLINE ASSIGNMENT HELP</h1><br>
      <div class="" style="padding:30px">
      <p  class="text-justify lspacing">a2zassignmenthelp.com  helps you to stay at the top of the class with online assignment help. The reason we have been the go to place for urgent assignment help is our pool of finest assignment writing experts from Australia for all academic assignments. Our assignment writers have great writing skills and run a comprehensive assignment check to provide you with a custom online assignment help. Our assignment writers are best academic experts</p>

      <p  class="text-justify lspacing">Our Online assignment Help services has been consistently rated higher on the benchmarks of quality, delivery time and support by various independent forums on the internet. We take pride in the fact that we are one of the fastest growing Online Assignment help Company. Your work is our mission, we will make sure that you will get the best possible help in your assignment work and within stipulated timelines. Further we provide you help with plagiarism check, proof reading or editing services. We have all our services for assignment help inhouse, the turn-around time to deliver these services are very less.</p>

      <h3 style="text-align:center;font-weight:400;font-size:30px;color:#696969;">BEST QUALITY GUARANTEE</h3><br>
      <img  class="responsive" id="im" style="" src="{{asset('images/best.png')}}">
    </div></div>
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
