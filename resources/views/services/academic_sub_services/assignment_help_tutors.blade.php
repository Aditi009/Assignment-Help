@extends('services.layout')
@section('content')


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    ]
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        .header1 {
              background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("https://www.totalassignmenthelp.com/assets2/img/total-assignment-help-service-banner.jpg");
              /* background: url("https://www.totalassignmenthelp.com/assets2/img/total-assignment-help-service-banner.jpg"); */
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              width: 100%;
              position: relative;
         }  

         .headingServices {
              color: white;
              text-align: left;
              font-size: 2.5 rem;


         }

         .text-white {
              color: white;
         }

         .headingServices2 {
              color: white;
              text-align: left;
              font-size: 1.75 rem;
              line-height: 1.4;

         }

         .btn-lg {
              font-size: 16px;
              padding: 12px 34px;
              font-weight: 100;
              letter-spacing: 1.7px;
              border-radius: 2px;
              outline: 0;
              margin-top: 10px;
              margin-bottom: 10px;


         }

         .banner-header-small {
              color: #ccc !important;
              font-size: 14px;
              margin-top: 5px;
              margin-bottom: 5px;
         }

         .section-header {
              text-align: center;
              max-width: 100%;
              margin: 0 auto 20px;
              padding-top: 15px;
              padding-bottom: 15px;
         }
       

         .backgroundService {
              background-color: white;
              border-radius: 5px;
         }

         .input-group {
              border: 1px solid #cbcbcb;


         }

         .section-services {
              padding-top: 50px;
              padding-bottom: 50px;
              background-color: #fff;
              overflow-x: hidden;
         }

         .assignmentfont {
              font-size: 15px;
              font-family: 'q_serif', Georgia, Times, 'Times New Roman', 'Hiragino Kaku Gothic Pro', 'Meiryo', serif;
              line-height: 1.8;
         }
         .bg-lighter {
   background-color: #f9fafb;
}
.lh-18{
    line-height: 1.8;
}

    </style>
</head>

<body >
    <header class="header1" style="font-family: poppins; line-height: 2.2;">
   
         <div class="container">
              <div class="row">
                   <div class="col-md-5 ">
                        <div class="container-fluid">
                             <h1 class="headingServices">Assignment Help Tutors Service</h1>
                             <h3 class="text-white headingServices2">Get academic writing service to meet the high
                                  expectations of your professors </h3>
                             <p class="text-white ParagraphServices">Hire our academic expert writers and maintain high
                                  <br> grades
                             </p>
                        

                        </div>

                   </div>
                   <br>
                   <div class="col-md-7">
                        <div class="text-center backgroundService">
                             <div class="section-header text-white ">
                                  <h5 class="banner-header-small">Get expert academic writers for academic writing
                                       service !</h5>
                                  <h2
                                       style="color:black; font-size:25px; font-family: SourceSansProRegular,Arial,sans-serif;">
                                       Assignment Help Tutors Service</h2>
                                       <form action="free_assist" method="post">
                                       @csrf
                                        <div class="form-group" style="padding-left:15px; padding-right:15px;">
                                             <input type="email" class="form-control" placeholder="Enter Email"
                                                  name="email" style=" width: 100%;">
                                        </div>
                                        <div class="form-group" style="padding-left:15px; padding-right:15px;">
                                             <input type="text" class="form-control" placeholder="Enter Subject"
                                                  name="subject" style="width: 100%; ">
                                        </div>
                                        <div class="form-group " style="padding-left:15px; padding-right:15px;">

                                             <select class="form-control" name="pages">
                                                  <option value="1 page/250 words"> 1 page/250 words</option>
                                                  <option value="2 page/500 words">2 page/500 words</option>
                                                  <option value="3 page/750 words">3 page/750 words</option>
                                                  <option value="4 page/1000 words">4 page/1000 words</option>
                                                  <option value="5 page/1250 words">5 page/1250 words</option>
                                                  <option value="6 page/1500 words">6 page/1500 words</option>
                                                  <option value="7 page/1750 words">7 page/1750 words</option>
                                                  <option value="8 page/2000 words">8 page/2000 words</option>
                                                  <option value="9 page/2250 words">9 page/2250 words</option>
                                                  <option value="10 page/2500 words">10 page/2500 words</option>
                                                  <option value="11 page/2750 words">11 page/2750 words</option>
                                                  <option value="12 page/3000 words">12 page/3000 words</option>
                                                  <option value="13 page/3250 words">13 page/3250 words</option>
                                                  <option value="14 page/3500 words">14 page/3500 words</option>
                                                  <option value="15 page/3750 words">15 page/3750 words</option>
                                                  <option value="16 page/4000 words">16 page/4000 words</option>
                                                  <select>


                                        </div>

                                        <div class="row">
                                             <div class="col-md-12 " style="padding-left:28px;padding-right: 28px;">
                                                  <input type="datetime-local" class="form-control " id="deadline"
                                                       name="deadline" style="width: 100%;">
                                             </div>
                                             
                                             <br> <br>

                                             <button type="submit"
                                                  class="btn btn-primary fs-14 fw-500 w-350 shadow-3 hidden-sm-down">GET
                                                  FREE ASSISTANCE</button>
                                        </div>
                                   </form>


                             </div>


                        </div>

                   </div>

              </div>


         </div>
    </header>
    <section class="section-services">
         <div class="container">
              <div class="row">
                   <div class="col-12 col-lg-8 text-justify">

                   <h2
                             style=" font-size:25px;  font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif; text-align:left;">
                             Academic Writing Service
                        </h2>
                        <p></p>

                        <p class="assignmentfont">If finishing an academic paper is a dreadful prospect for you and you
                             are petrified at the thought of impending deadlines then all you need to do is search for
                             the best <b>Academic writing service</b> that you can find online and take their
                             assistance.</p>

                        <p class="assignmentfont">Academic writing service, the term itself signifies a service being
                             provided to students. These academic writing services are thorough professionals who have
                             been into the business since a long time. The writers are hired through a rigorous process
                             and their performance is timely reviewed in order to ensure that they are delivering a
                             quality work.</p>

                        <p class="assignmentfont">What makes <a href="#" target="_blank">a2z Assignment Help</a> a
                             premium Academic Writing service is the sheer number of satisfied customers that we have
                             had the pleasure of servicing since our inception. The feedbacks being received from our
                             students is a reflection of the services being delivered by us and it helps us to work
                             more effectively and efficiently. We have one of the best academic writing services. Due
                             to the magnanimous number of clients that we have worked for, we understand the most
                             common issues that students come across while writing an Academic Paper. A few of the most
                             common and daunting challenges that students face will be discussed in this article.</p>

                        <h3 class="assignmentfont"><b>What makes a student to seek our Academic Writing Service?</b>
                        </h3>

                        <ul class="assignmentfont">
                             <li>A strict deadline with no chance for extensions may leave you stressed out and
                                  perplexed, with no idea as to your next step. This in turn disables you to go ahead
                                  and prepare your academic paper.</li>
                             <li>The subject that you are required to prepare an academic paper on might be a subject
                                  that either you lack interest in or you are not really familiar with. In any case,
                                  this is a terrible combination leading to disaster, as you possess insufficient
                                  knowledge to be able to write the paper.</li>
                             <li>• Being in college means unending classes to attend and a plethora of text books to
                                  cover. And then there are the extracurricular activities that might leave you with a
                                  cramped schedule with not enough time to complete your assignment.</li>
                             <li>There is also the fear of plagiarism that might haunt you, as it is quite obvious that
                                  if your content is plagiarized then that would mean an automatic hit to your scores.
                             </li>
                             <li>When the students are looking for higher grades, they contact us so that their average
                                  grades in the entire course goes up.</li>
                        </ul>

                        <p class="assignmentfont">These are some of the issues that most students face. It is likely
                             that you have faced either some or may be all of these issues which have given rise to
                             these assignment help service providers. However, a2z Assignment Help offers you
                             Academic Writing Services that are free from all the issues as discussed above.</p>

                        <p class="assignmentfont">We help students looking for academic writing help. We guide the
                             students on how his assignment would be made, what efforts will be put in by the expert
                             apart from the writing so that he can understand the worth of assignment that he would be
                             getting in return the payment made. There are students who visit our website to check out
                             our sample papers. They take help and idea from our sample work and prepare their
                             assignment. We have always welcomed such students as we believe in imparting knowledge and
                             not keeping it with oneself.</p>

                        <p class="assignmentfont">Nowadays it’s easier to hire an academic writing service and to
                             choose the best among the rest is the toughest call that a student has to make. Selection
                             should be made basis the performance of the service provider as well as its reputation.
                             Students should take an opinion from other fellow students who have been using these
                             services in order to choose the correct and best academic writing service. We believe in
                             being clear about all the services, products and its price. Reaching out to a2z
                             Assignment Help is the need of the hour and the best option which will be cherished in the
                             long run.</p>

                        <h3 class="assignmentfont"><b>Our services that can make your life easier</b></h3>
                        <p class="assignmentfont">There are a wide range of academic writing services that we provide
                             to students. Not everyone needs the same kind of assistance as some are looking for
                             complete academic writing services, while others are looking for editing and proofreading
                             services, some may need services related to simple formatting of the paper. As these are
                             the most common types of services required, we have customized our service packages to
                             suit your needs. The below image provides an overview about the quality of services being
                             provided at a2z Assignment Help. These are a range of benefits and services being
                             provided by us, you need to check our website for the detailed information and about the
                             other services.
                        </p>

                        <p style="text-align: center;"><img
                                  src="https://www.totalassignmenthelp.com/uploads/Academic-Writing-Service.webp"
                                  alt="Academic Writing Service" width="100%"></p>

                        <h3 class="assignmentfont"><b>What are the most valued services provided by us?</b></h3>
                        <p class="assignmentfont"><b>Complete Academic Content Writing Service:</b> We will prepare the
                             entire paper for you from scratch. You only need to provide us the requirement file, the
                             marking criteria and the lecture notes. If you have any specific topic or an insight on
                             how to prepare the assignment, it is always accepted. All sorts of academic writing are
                             covered in this package including essays, assignments, thesis, dissertations etc. The
                             assignments are built up through extensive research and the quality of paper selected for
                             the research consists of peer reviewed articles and books. Our highly skilled academic
                             writers ensure optimal quality of content to provide you with the best possible service.
                             Our experts are highly qualified and match the academic writing skill required for a
                             particular assignment. We offer academic writing services across all subjects and topics.
                        </p>

                        <p class="assignmentfont"><b>Delivery of Academic Writing Service along with Proofreading and
                                  Editing Service:</b> You might have completed your paper but need a second pair of
                             eyes to ensure optimum quality of content both in terms of quality of research as well as
                             grammatical precision. This might specially be the case if the language you are writing in
                             is not your first language. Our experts ensure that your content is purified from all
                             sorts of impurities such as grammatical and factual mistakes and you are able to submit a
                             high quality paper. They proof read the work before uploading on the order page. We do
                             have an internal proof reading team who looks after each and every assignment being
                             delivered by the experts. They not only check for grammatical errors but also look for
                             relevancy and completion of assignment basis the actual requirements being provided by the
                             student. They ensure that all the required points mentioned in the requirement have been
                             incorporated along with checking the format and referencing guidelines. So the assignments
                             are delivered after a double check, one from the expert and one from the internal team.
                        </p>

                        <p class="assignmentfont"><b>Paper formatting assistance:</b> The formatting styles used by
                             different universities have numerous guidelines which differ from one another,
                             exponentially. For instance the APA style of formatting is quite different from Chicago.
                             This leads to a lot of confusion for a student who has to focus not only on writing the
                             paper but also on styles. Our experts can help you here by formatting your paper in
                             whichever formatting style you need it in. Be it the figure and table callouts to
                             referencing styles as well as the reference citation, our experts can take care of all
                             this for you. The expert ensures that they are following the formatting standards and the
                             referencing guideline prescribed at a particular university. The latest referencing
                             guidelines is followed by the expert while writing an assignment. We also help our experts
                             by providing training and updating about the new referencing styles.</p>

                        <p class="assignmentfont"><b>Plagiarism Removal:</b> Our experts carefully examine your paper
                             and check for plagiarism to ensure that you don’t get into trouble and are able to present
                             100% unique and original content, so that your grades are not affected. They are well
                             aware about the effects of providing a plagiarized content. The content taken from outside
                             sources are well paraphrased and supported with a particular in-text citation. We ask the
                             experts to run the work through a plagiarism checker before submitting on the order page.
                             We also run your content on Plagiarism recognition software and remove the plagiarized
                             content or replace it with unique material. In case the plagiarism is seen in some
                             technical or standard terms then we do inform the student and explain him the reason
                             behind it so that he can answer back any question related plagiarism being put forward by
                             the professor. We also provide you a copy of the plagiarism report in order to assure you
                             that the academic writing service being delivered is unique. We provide professional
                             academic writing services at the behest of our students.</p>

                        <p class="assignmentfont"><b>Safe Service:</b> When a student books an assignment with us, he
                             has to disclose some of his confidential details like, university information, his account
                             details, name, student Id, contact number, etc. We have always kept this information’s in
                             an encrypted format in order to avoid data theft. We do not disclose this information to
                             our experts until the student requires us to do or the task requires an inclusion of such
                             details. When the task requires personal information to be included like the name of the
                             student or the student id, we do ask and inform the student about it beforehand. We do not
                             save the card details nor proceed with a payment without a prior approval.</p>

                        <p class="assignmentfont"><b>24*7 connections with writers and admins:</b> We work 24*7 in
                             order to serve our students and to resolve their queries. We support our students from the
                             time of booking an order to the time of delivery and even after that till the student
                             provides us a feedback. We have an online messaging service where you can communicate your
                             concerns related to the assignment and it will be directly answered by the expert who has
                             worked on the assignment. We help the students in filling the order form and the other
                             details on the assignment website. We do not mind being called at an odd hour.</p>

                        <p class="assignmentfont"><b>On time delivery:</b> We understand the importance of meeting
                             deadline so we always deliver the assignment before the student’s actual deadline. We do
                             not disclose the actual submission deadline to our writers which gives us and the student
                             as well enough time to cross check the content delivered by the writer. In case if any of
                             the party feels the requirement for revision then the expert is asked to revise specific
                             sections. We take a regular follow ups on all the orders in order to ensure that the
                             expert delivers the assignment on the allotted date.</p>

                        <p class="assignmentfont"><b>Low prices with discounts:</b> We understand the value of money so
                             we offer you the best price along with the prevailing discounts. We also have seasonal
                             offers as well as our prices are negotiable and we do not compromise with the quality. We
                             are aware that you have been pursuing part time jobs in order to meet your financial needs
                             and to finance your education as well. We are here to build long term relationships and
                             gain respect in the field of academic writing services. So charging higher price and
                             delivering a low quality work is not in our nature. </p>

                        <p class="assignmentfont"><b>Unlimited Revision:</b> We believe in revisions without hampering
                             the quality till the time the student is satisfied with the ultimate product. We never
                             take a payment for the sake of providing academic writing service rather we ensure
                             student’s satisfaction. In case the student feels that his assignment has missed certain
                             important elements, he can approach us. The team will cross check the request and will ask
                             the writer to incorporate the point. In case the element is already present in the
                             assignment then the team will help the student by making a note or highlighting the said
                             content.</p>

                        <p class="assignmentfont">Apart from these great services, we also offer support and guidance
                             on various problems that students face with academic writing services.</p>


                   </div>
                   <div class="col-12 col-lg-4">
                        <div class="bg-lighter" style="padding:20px; margin-bottom: 24px;">			
                             <h4 style="margin-top: 10px;"><span class="amzn-clr">Amazing Features</span></h4>
                             <ul class="list-unstyled">
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/Plagiarism.png" alt="Plagiarism Free Academic Assignment Help">   Plagiarism Free Work</span></li>
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/best-price.png" alt="Academic Assignment Help at lowest Price">   Lowest Price Guarantee</span></li>
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/money-back.png" alt="Money Back">   100% Money Back Guarantee</span></li>
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/top-quility.png" alt="  High quality Academic Assignment Help ">   Top Quality Work</span></li>
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/ontime.png" alt=" On Time Academic Assignment Help">   On Time Deliver</span></li>
                               <li class="lh-18" style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;"><span class="list-group-item-new bgn"><img src="https://www.totalassignmenthelp.com/assets2/img/24-7.png" alt="  24 x 7  Academic Assignment Help">   24 x 7 Live Help</span></li>
                             </ul>
                        </div>
                        
                        <div class="bg-lighter" style=" padding:20px; margin-bottom: 24px;">
                        <h4 style="margin-top: 10px;">Other Assignment Services</h4>
                        <ul>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Write_My_Essay" title="Write Essay For Me" target="_blank">Write My
                                             Essay</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="My_Assignment_Help" title="My Assignment Help" target="_blank">My
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="do_my_assignment" title="Do My Assignment" target="_blank">Do My
                                             Assignment</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Supply_Chain_Management_Assignment_Help"
                                             title="Supply Chain Management Assignment Help" target="_blank">SCM
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Human_Resource_Assignment_Help"
                                             title="Human Resource Management Assignment Help" target="_blank">HRM
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="CRM_Assignment_Help"
                                             title="Customer Relationship Management Asignment Help" target="_blank">CRM
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="law" title="Law Assignment Help" target="_blank">Law Assignment
                                             Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="#Java_Programming_Assignment_Help"
                                             title="Java Programming Assignment Help" target="_blank">Java Assignment
                                             Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="thesis" title="Thesis Writing Help" target="_blank">Thesis Writing
                                             Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Business_Report_Writing" title="Business Report Writing"
                                             target="_blank">Business Report Writing</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="#Instant_Assignment_Help" title="Instant Assignment Help"
                                             target="_blank">Instant Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="#University_Assignment_Help" title="University Assignment Help"
                                             target="_blank">University Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Business_Assignment_Help" title="Business Assignment Help"
                                             target="_blank">Business Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="#Coursework_Assignment_Help" title="Coursework Assignment Help"
                                             target="_blank">Coursework Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Taxation_Assignment_Help" title="Taxation Assignment Help"
                                             target="_blank">Taxation Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="BIOLOGY_ASSIGNMENT_HELP" title="Biology Assignment Help"
                                             target="_blank">Biology Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="English_Assignment_Help" title="English Assignment Help"
                                             target="_blank">English Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Philosophy_Assignment_Help" title="Philosophy Assignment Help"
                                             target="_blank">Philosophy Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="finance" title="Finance Assignment Help" target="_blank">Finance
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Sociology_Assignment_Help" title="Sociology Assignment Help"
                                             target="_blank">Sociology Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Marketing_Assignment_Help" title="Marketing Assignment Help"
                                             target="_blank">Marketing Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Accounting_Assignment_Help" title="Accounting Assignment Help"
                                             target="_blank">Accounting Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="dissertation" title="Dissertation Assignment Help"
                                             target="_blank">Dissertation Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="management" title="Management Assignment Help"
                                             target="_blank">Management Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="programming" title="Programming Assignment Help"
                                             target="_blank">Programming Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Math_Homework_Help" title="Mathematics Assignment Help"
                                             target="_blank">Mathematics Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Business_Law_Assignment_Help" title="Business Law Assignment Help"
                                             target="_blank">Business Law Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="IT_Management_Assignment_Help" title="IT Management Assignment Help"
                                             target="_blank">IT Management Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Market_Analysis_Assignment_Help"
                                             title="Marketing Analysis Assignment Help" target="_blank">Marketing
                                             Analysis Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Strategic_Marketing_Assignment_Help"
                                             title="Strategic Marketing Assignment Help" target="_blank">Strategic
                                             Marketing Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Political_Science_Assignment_Help"
                                             title="Political Science Assignment Help" target="_blank">Political Science
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Business_Statistics_Assignment_Help"
                                             title="Business Statistics Assignment Help" target="_blank">Business
                                             Statistics Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Personal_Finance_Assignment_Help"
                                             title="Personal Finance Assignment Help" target="_blank">Personal Finance
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Corporate_Finance_Planning_Assignment_Help"
                                             title="Corporate Finance Assignment Help" target="_blank">Corporate Finance
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Financial_Accounting_Assignment_Help"
                                             title="Financial Accounting Assignment Help" target="_blank">Financial
                                             Accounting Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Managerial_Accounting_Assignment_Help"
                                             title="Managerial Accounting Assignment Help" target="_blank">Managerial
                                             Accounting Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Managerial_Economics_Assignment_Help"
                                             title="Managerial Economics Assignment Help" target="_blank">Managerial
                                             Economics Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Mass_Communication_Assignment_Help"
                                             title="Mass Communication Assignment Help" target="_blank">Mass
                                             Communication Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Operations_Management_Assignment_Help"
                                             title="Operations Management Assignment Help" target="_blank">Operations
                                             Mgmt. Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Cost_Accounting_Assignment_Help"
                                             title="Cost Accounting Assignment Help" target="_blank">Cost Accounting
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Marketing_Research_Assignment_Help"
                                             title="Marketing Research Assignment Help" target="_blank">Marketing
                                             Research Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Project_Management_Assignment_Help"
                                             title="Project Management Assignment Help" target="_blank">Project
                                             Management Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Project_Risk_Management_Assignment_Help"
                                             title="Project Risk Management Assignment Help" target="_blank">Project
                                             Risk Mgmt. Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Computer_Network_Assignment_Help"
                                             title="Computer Network Assignment Help" target="_blank">Computer Network
                                             Assignment Help</a></li>

                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <a href="Information_Technology_Assignment_Help"
                                             title="Information Technology Assignment Help" target="_blank">Information
                                             Technology Assignment Help</a></li>

                              </ul>	
                        </div>		
                        </div>

              </div>

         </div>
    </section>
@endsection

