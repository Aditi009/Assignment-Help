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
      <h1 style="text-align:center;font-weight:800;font-size:40px;color:#696969;">DISSERTATION WRITING HELP</h1><br>
      <div class="" style="padding:30px">
      <p  class="text-justify lspacing">Dissertation writing is a real test of capabilities of a student since it requires extensive research and thorough understanding of the subject. Our team of experienced writers have developed a structured approach to help scholars complete their dissertation and research projects and help students score good grades.
        With so many Dissertation Writing Help services being set up, many will try to fool you with flowery languages and ultimately drawing you into a scam , it has become increasingly difficult to choose the right company that can provide you with the best solution in your dissertation completion.
        Our Dissertation Writing Help Services has been consistently rated higher on the benchmarks of quality, delivery time and support by various independent forums on the internet. We take pride in the fact that we are one of the fastest growing Dissertation writing Help Company worldwide.
        Your work is our mission, we will make sure that you will get the best possible help in your assignment work and within stipulated timelines. Further we provide you help with plagiarism check, proof reading or editing services. We have all our services for Dissertation writing Help inhouse, the turn-around time to deliver these services are very less.
        Our subject expert is assigned for your dissertation from the initial phase of Topic approval,Draft sharing and completion of your dissertation is step by step  with detailed discussion at the end of each chapter to ensure that you are having complete information about your dissertation.
      </p>
      <p  class="text-justify lspacing">        Our subject expert is assigned for your dissertation from the initial phase of Topic approval,Draft sharing and completion of your dissertation is step by step  with detailed discussion at the end of each chapter to ensure that you are having complete information about your dissertation.
        What makes us unique is the feature that after the completion of each chapter we share it with the student once it’s approved from their end or they suggest any modifications ,firstly that is done before proceeding to the next chapter.</p>

        <p style="text-align:center;font-weight:400;color:#696969">At a2zAssignmentHelp.com, it’s all about solving the issues you face with your dissertation completion.Our expert  ensures the complete support from topic selection , Draft sharing,approval,until final submission, this makes us “UNIQUE” in this market.</p>
     <br>
        <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;">We Can Help You Save Time</h3>
      <p  class="text-justify lspacing"> To write a complete dissertation, you have to spew out 12,000-18,000 words on paper, which can take too much of your time. Well, with us, you don't have to waste a single breath on your dissertation. As you focus on your job and other priorities, our assigned expert will toil day and night to do your dissertation and discuss the on-going work with you at regular intervals ensuring that you are well updated about the complete dissertation , this helps you a lot at the time of viva.</p>
       <br>
      <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;">  We Will Conduct To The Point Research</h3>
      <p  class="text-justify lspacing">The foundation stone of a dissertation is the data presented in it (Data Set used).However, finding relevant informant for your paper can be a monumental task, you should let our experts do for you. We will make sure that we pick accurate, current as well as relevant data for your dissertation so that it stands out from the crowd.</p>
       <br>
      <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;"> We Will Write An Unique Paper For You</h3>
      <p class="text-justify lspacing">Originality is key when it comes to writing your dissertation. Submitting one with stale ideas can cost you your graduation. So instead of risking all the hard work you have put in, give your dissertation to us and get an original paper in return. Our experts will compose your dissertation from scratch for you, filling it with original ideas.</p>
      <br>
      <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;"> We Will Take Care Of All Formatting Rules</h3>
      <p class="text-justify lspacing">Too many dissertation writing and formatting rules freaking you out. Don’t worry. Once you let our experts do your dissertation, you won’t find the disobeying of even a single rule in your copy. We have writers who are proficient at dissertation writing and well-versed with all the formatting rules so that you get a copy that matches every single of your requirements with no room for mistakes.</p>
      <br>
      <h3 style="text-align:center;font-weight:400;font-size:25px;color:#696969;">Referencing Of Your Paper Will Be Done Accurately</h3>
      <p>One of the sections that can give the worst nightmares to any student is the bibliography section. Luckily for you, our dissertation writers know different citation styles like the back of their hand. They have an impeccable record of accurate referencing, which means that you will not find even a single error in the copies referenced by our writers. </p>


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
