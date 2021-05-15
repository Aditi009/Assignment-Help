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
      <h1 style="text-align:center;font-weight:800;font-size:40px;color:#696969;">a2z ASSIGNMENT</h1><br>
      <div class="" style="padding:30px">
      <p  class="text-justify lspacing">a2z Assignment Help is a leading academic writing service provider in  education market worldwide. We emphasize on delivering high-quality academic writing services and have helped thousands of students score good grades in pursuit of their MBA education.</p>

        <p style="text-align:center;font-weight:400;color:#696969">Being a premium academic writing service provider, we allocate your assignment to our highly qualified and experienced team of subject matter experts, ensuring students get only the best quality assignments. With years of practical experience and advanced research writing skills, they are capable of researching and preparing high-quality assignments even under the pressure of short deadlines.</p>

      <p  class="text-justify lspacing"> To write a complete dissertation, you have to spew out 12,000-18,000 words on paper, which can take too much of your time. Well, with us, you don't have to waste a single breath on your dissertation. As you focus on your job and other priorities, our assigned expert will toil day and night to do your dissertation and discuss the on-going work with you at regular intervals ensuring that you are well updated about the complete dissertation , this helps you a lot at the time of viva.</p>

      <p  class="text-justify lspacing">With a tradition of delivering only high-quality academic writing services, a2z assignment help has built a strong track record of delivering superior quality academic assignments at nominal prices that fall within student’s budget.</p>
      <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;">Our Motto</h3>
      <p class="text-justify lspacing">Our Motto is to ensure client satisfaction in each and every assignment. This can only be achieved by ensuring the delivery of high-quality assignments. We have invested heavily towards quality control and monitoring with the objective of ensuring each of our clients receive high-quality content and scores high grades on every assignment we deliver.</p>


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
