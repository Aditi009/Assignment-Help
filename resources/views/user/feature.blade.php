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
*
{
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
#span
{
font-size: 100px;
color: blue;
}
.row
{
    padding:10px;
}
   </style>
      <div class="conatiner main" style="">
      <h1 style="text-align:center;font-weight:800;font-size:40px;color:#696969;">All FEATURE</h1><br>
      <div class="" style="padding:30px">
     <div class="row">

    <div class="col-md-6" >
    <div class="col-md-4">  <span><i class="fa fa-graduation-cap" id="span" aria-hidden="true"></i></span></div>
    <div class="col-md-6"><h4>On Time Delivery</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>

   </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-4">  <span><i  class="fa fa-window-restore" id="span" aria-hidden="true"></i></span></div>
        <div class="col-md-6"><h4>24x7 Live Chat Help Support</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>
        </div>
         </div>


         <div class="col-md-6">
            <div class="col-md-4">  <span><i  class="fa fa-window-restore" id="span" aria-hidden="true"></i></span></div>
            <div class="col-md-6"><h4>Plagrism Free Work</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>
            </div>
             </div>


             <div class="col-md-6">
                <div class="col-md-4">  <span><i  class="fa fa-window-restore" id="span" aria-hidden="true"></i></span></div>
                <div class="col-md-6"><h4>24x7 Live Chat Help Support</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>
                </div>
                 </div>


    <div class="col-md-6">
        <div class="col-md-4">  <span><i  class="fa fa-clone" id="span" aria-hidden="true"></i></span></div>
        <div class="col-md-6"><h4>Best Price Guarantee</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>
        </div>
         </div>

         <div class="col-md-6">
            <div class="col-md-4">  <span><i  class="fa fa-cubes" id="span" aria-hidden="true"></i></span></div>
            <div class="col-md-6"><h4>4205 PHD Experts</h4><p>We provide quality solutions experienced professionals from finest universities of US, UK and Australia. You not only improve your grades by submitting good quality assignments but also get a chance to learn more about the subject.</p>
            </div>
             </div>


</div></div></div>
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
