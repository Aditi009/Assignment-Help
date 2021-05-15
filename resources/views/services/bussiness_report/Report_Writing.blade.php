@extends('services.layout')
@section('content')


<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
  
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
     <div class="overlay">
          </div>
     <div class="container">
               <div class="row">
                    <div class="col-md-5 ">
                         <div class="container-fluid">
                              <h1 class="headingServices">Report Writing</h1>
                              <h3 class="text-white headingServices2">Get business report writing help to meet the high expectations of your professors </h3>
                              <p class="text-white ParagraphServices">Hire our academic expert writers and maintain high
                                   <br> grades
                              </p>
 

                         </div>

                    </div>
                    <br>
                    <div class="col-md-7">
                         <div class="text-center backgroundService">
                              <div class="section-header text-white ">
                                   <h5 class="banner-header-small">Get expert help for your business report writing</h5>
                                   <h2
                                        style="color:black; font-size:25px; font-family: SourceSansProRegular,Arial,sans-serif; font-weight: 600;">
                                        Report Writing</h2> 
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
                         <h2 class="lh-18"
                              style="font-size:25px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              How to write a Business Report</h2>
                         <p></p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              A good business report should be structured in such a way that its clear, concise and easy
                              to understand for the target audience. As the name suggests, business reports are required
                              to provide data followed by required analysis to assist Senior management or Investors or
                              Business teams make informed decisions.&nbsp;</p>
                         <h2 class="lh-18"
                              style="font-size:18px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <strong>Business Report Structure:</strong></h2>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              Different organizations may have different requirements but a report can generally be
                              structured as follows. Given the nature of report or business, you can choose to skip one
                              or more sections.</p>

                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Title</b>:Should state the Aim of report. It can also include your name and date of
                              presenting the report.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Contents:</b>If the report is lengthy, you should include a table of contents. In this
                              section, list the chapter and corresponding section headings. You should also include a
                              page number with for every row in table of contents.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Executive Summary:</b>It's always a good practise to include an executive summary
                              stating the aim and purpose of report. A good summary can <bold>briefly talk about
                                   historical developments/background of the report that led to the report, state
                                   problems under investigation and explain recommended solutions. It should also
                                   disclose limitations and assumptions taken while preparing the report. Generally this
                                   is prepared at the end of report writing but placed first for senior management who
                                   might not have the time to read the entire report.</bold>
                         </p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Introduction:</b>Here you should provide the background information and describe
                              historical developements in detail that led to this report. This section sets the stage
                              for what can a reader expect in upcoming chapters.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Procedure or method of gathering information:</b>Describe the method of gathering
                              information and its limitations in detail. You can also talk about steps taken to overcome
                              the limitations of method of gathering information.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Findings:</b>You should corroborate your findings with enough data to show that you
                              have carried out the research thoroughly.&nbsp;</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              To justify your recommendations, you may also include opinions of experts of the industry,
                              consumer reports, statistical data and your own observations. Do remember that while the
                              objective of your business report is to provide the best solution to a business problem,
                              you may include analysis of other options available and prove them otherwise. You can also
                              help the reader to point to further readings if its not possible to include them in your
                              report.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Conclusions: </b>This section lists the major inferences that can be drawn from the
                              findings
                              and propose recommendations. It sums up the assessment of current situation based&nbsp;
                              on your observations, findings and proposes future plan of action.&nbsp;</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Reference list: </b>The reference list, in alphabetical order, mentions all resources
                              used in creation of your report. Whenever you use information from other sources such as
                              books, online periodicals, articles that helped you write the report, you should include
                              it in your report.</p>
                         <p class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Appendices: </b>At the end, you can use an appendix to group similar items together.
                              Any important&nbsp;material/supplementary information for your discussion can be included
                              in appendix and referred to from within the report. A single appendix can be titled as
                              APPENDIX.&nbsp;If you have multiple items appended, they can be titles as APPENDIX A,
                              APPENDIX B, etc.
                              Also appendices should appear in the order they are mentioned in the report.</p>
                         <h3 class="lh-18"
                              style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              <b>Following things should be kept in mind while writing the report:</b></h3>
                         <ol type="1">
                              <li class="lh-18"
                                   style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                   Grammar, spellings and facts should be accurate.</li>
                              <li class="lh-18"
                                   style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                   Make sure to use a consistent voice (Active or passive).</li>
                              <li class="lh-18"
                                   style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                   Every college/organizations may have its own report format and its always better to
                                   use the format suggested by your organization.</li>
                         </ol>

                    </div>
                    <div class="col-12 col-lg-4">
                         <div class="bg-lighter" style="padding:20px; margin-bottom: 24px;">
                              <h4 style="margin-top: 10px;"><span class="amzn-clr">Amazing Features</span></h4>
                              <ul class="list-unstyled">
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/Plagiarism.png"
                                                  alt="Plagiarism Free Academic Assignment Help"> Plagiarism Free
                                             Work</span></li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/best-price.png"
                                                  alt="Academic Assignment Help at lowest Price"> Lowest Price
                                             Guarantee</span></li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/money-back.png"
                                                  alt="Money Back"> 100% Money Back Guarantee</span></li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/top-quility.png"
                                                  alt="  High quality Academic Assignment Help "> Top Quality
                                             Work</span></li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/ontime.png"
                                                  alt=" On Time Academic Assignment Help"> On Time Deliver</span></li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/24-7.png"
                                                  alt="  24 x 7  Academic Assignment Help"> 24 x 7 Live Help</span></li>
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

