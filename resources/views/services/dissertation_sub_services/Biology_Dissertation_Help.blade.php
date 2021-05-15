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
 
    <div class="container">
              <div class="row">
                   <div class="col-md-5 ">
                        <div class="container-fluid">
                             <h1 class="headingServices">Biology Dissertation Help</h1>
                             <h3 class="text-white headingServices2">Get dissertation writing help service to meet the high expectations of your professors</h3>
                             <p class="text-white ParagraphServices">Hire our management experts to produce top-quality projects and maintain high <br> grades


                                  
                             </p>
                            

                        </div>

                   </div>
                   <br>
                   <div class="col-md-7">
                        <div class="text-center backgroundService">
                             <div class="section-header text-white ">
                                  <h5 class="banner-header-small">Get expert academic writers for dissertation assignment help</h5>
                                  <h2
                                       style="color:black; font-size:25px; font-family: SourceSansProRegular,Arial,sans-serif;">
                                       Biology Dissertation Help
                                  </h2>
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
                   <h2 style="font-size:25px; font-family: SourceSansProRegular,Arial,sans-serif;">Dissertation Writing Guide</h2><p></p>
                           
                           <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">A Dissertation is a long academic essay written after gaining in-depth knowledge of a subject using formal research. Thus Dissertation as a form of academic writing differ from other type of academic assessments and is a real test of capabilities of a student. In this form of academic assessment, leaner is expected to take full responsibility of his own learning starting from choosing the topic, selecting the method of study and concluding the outcomes in the end. Since lot of complexities are involved around <b>dissertation writing</b>, we decided to come up with a dissertation guide to help students in this difficult journey.</p>
                            <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Most of the students begin writing a dissertation with great enthusiasm, but later on seem to be lost with the research and many a time fail to finish within the deadline. </p>
           <!-----------iframe----------------->
           <style>
           .video-container {
           position: relative;
           padding-bottom: 56.25%;
           padding-top: 30px; height: 0; overflow: hidden;
           }
           
           .video-container iframe,
           .video-container object,
           .video-container embed {
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 100%;
           }
           </style>
           
          
           <!-----------//iframe----------------->
           
           
           
           
                            <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">When you have to start <b>writing a dissertation</b>, you will require a methodical plan, substantial research, guidance and a lot of perseverance. Given the academic pressures faced by the students working towards their grades, along with the demands of their jobs, it becomes quite difficult for many students to write a high-quality dissertation. Many do not have the idea on how they should proceed with the dissertation work and therefore end up writing bad dissertation. So, before beginning with the steps on how to write a good dissertation, first you should understand why dissertation is so important. </p>
                            <h3 style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><strong>Why is Dissertation so important?</strong></h3>
                            <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">It is true that the dissertation writing is the most essential component in all PhD programs. The reason why dissertation is given so much importance is that it helps the professors to analyze the skills of the students in a well-defined manner and test their capabilities and then decide whether they are eligible for the degree or not. List of reasons which makes <b>dissertation writing</b> so important are:</p>
                             <ul>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Dissertations help the students to showcase their knowledge and unique ideas to their professors which in an important skill for any researcher. </li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">It helps them in showing their professors that they are capable of structuring their thoughts in a well defined manner as well as they can carry forward the process in an efficient manner.</li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">It also helps the students for preparing for their final dissertation study. </li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The process helps them to know the way to develop or to make the practical decisions during the final dissertation. </li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The dissertation demonstrates the choice of the students that in which field they are capable of proceeding in future and what is their area of interest. </li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Dissertations include extensive research works and analyzing skills. Here, you have to express your writings and creativity skills without any hesitation. Again, Dissertations will also enhance your patience level, as it takes a lot of time in researching and writing the assignments. </li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Dissertations help you in improving your grasping ability and to understand the requirements of subject papers.</li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Good dissertation writing ensures you better CGPA grades and a perfect platform for your career.</li>
                             <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Again, if you are planning to go for higher studies, then Dissertation writings will greatly help you in preparing your assignments. </li>
                             </ul>
                            
                            <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">So, if you are an academic student, then good Dissertation writing is vital for you. </p>
                            <h3 style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><strong>What are the main parts of a Dissertation?</strong></h3>
                            <ul>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Abstract – </b>After the title page as well as the acknowledgement page, the abstract page appears. In case of the journal articles, the abstract contains word limit of 150-200 words long. The contents of the abstract are essential as it gives a chance to the readers of knowing about the dissertation and whether it interests him or not. The abstract is the overview of the entire study, a kind of summary of your research questions, results as well as methods. So, it is important to put more attention to this section to maintain the focus of the reader till the end.</li>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Research question – </b>The question of the research section is available in the introduction part. These are mainly defined as the fundamental questions that are included in the research methodology. It is proved from several instances that the strongest or eye-catching questions grab the attention of the reader until the end of the topic.</li>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Literature review – </b>In this part of the dissertation, you will have to consider and explain the ideas and theories of other people in relation to your research. You must try and compare at least 10 other sources and a few theories or models. This part comprises of around 20% of the dissertation.  </li>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Chapters – </b>Chapters form a very important in a dissertation as each chapter refers to a particular topic which is covered in the paper. So the reader can go through a particular topic that he/she wishes to read without having to search the entire dissertation to find the topic. </li>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Bibliography – </b>Bibliography consists of all the references such as the articles, books and websites that you have used to write the dissertation.  It is noted down on a separate page at the end of the paper. It is advised that you write the Bibliography in an alphabetical order as per the required writing style.   </li>
                            </ul>
                            <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Well, the above mentioned points will help you to write a good dissertation. But besides this, there is a standard dissertation format that will assist and guide you to complete a dissertation which is about 10000 words long. The basic outline of writing the dissertation can be described as below. </p>
           
                          <h4 style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>-The dissertation titles along with the estimated word count:</b></h4>
                             
                      <table style="width:100%">
                      <tbody><tr>
                      <th>Basic components</th>
                       <th>Proposed  Word Distribution (%)</th> 
                       <th>Total  Word  Count</th>
                       </tr>
                          <tr><td><b>Abstract</b></td></tr>
                      <tr>
                      <td><b>Chapter 1: Introduction</b>
                        <br>Research Aim
                        <br>Research Objectives
                        </td><td>10%</td>
                         <td>1000 Words</td>
                        
                       </tr>
                       
                          <tr>
                       <td><b>Chapter 2: Literature Review</b></td>
                       <td>25%</td>
                         <td>2500 Words</td>
                      </tr>
                      
                        <tr>
                      <td><b>Chapter 3: Research Methodology</b> 
                        <br>Research Approach
                        <br>Research Design
                        <br>Data Collection Procedure
                        <br>Data Sources: Primary and Secondary Or Both
                        <br>Quantitative:Specificmodel{Regression,ANOVA,T-test,Z test,etc} Or Both
                        <br>Population and Sample:
                        <br>Sampling Technique:please specify}
                       <br>Sample Size:{Please specify}
           
                        </td>
                     
                     <td>&nbsp;20%</td>
                       <td>2000 Words</td>
                      </tr>
                        <tr>
                        <td><b>Chapter 4: Analysis</b></td>
                        <td>30%</td>
                        <td>3000</td>
                        </tr>
                        <tr>
                        <td><b>Chapter 5: Conclusion</b>
                        <br>References {Count and Style}
                        <br>Appendix
                        <br>Transcript
                        <br>Data
                        <br>Ethical Form
                        </td>
                        <td>15%</td>
                        <td>1500</td>
                        </tr>
                      </tbody></table>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>How to find a Dissertation topic?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">One of the difficult tasks associated with every dissertation is to choose an appropriate topic that is related to the subject. Most of the students face the issues in dealing with these problems and gets confused while picking them. Finally, they land in the difficult stage where they are forcefully selecting the topics, and that ultimately results in poor performance shortly afterwards. </p>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Therefore, to avoid such cases, it is essential to choose the best topic out of thousands to carry forward the research process in an efficient manner. Some points are mentioned below that will help to determine a suitable subject to take the level of the research process to a great extent.</p>
                        <ul>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">It is necessary to choose a good topic and that suits your style of research. But, sometimes it is essential to seek the help of the experts or supervisors who know your strengths and can help you find topics related to your subject. Professional experts can also sometimes provide you the best way to deal with issues that students face while choosing the topic for research since they have lot of experience in what works and what does not in the long run. Eg: If a student has decided to pick a topic related to the IT, Genetics, Medicine or Microbiology, they always will need to find the most updated facts only. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">You may also design your research projects in such as way that it has a potential to attract funding in future. You can pick latest technologies, medical researchers, things that affect or may affect a large part of the world population today or in future. Such projects are bound to attract the attention of individual as well as corporate investors.  It is therefore essential to design the research methodology in a specific manner to attract the eyes of the readers. The management of the funding should be done efficiently keeping the key goals as the main priority. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Make sure that, your research work is not similar to an existing research project or is around a field of study which is already over researched. Again adding a great value to an over researched field can be beneficial but researching for small increments might not fetch you a lot of acknowledgement. The research work needs to be unique or else it will degrade the novelty of your research work. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Depending on the topic you have chosen, you need to choose an appropriate supervisor. It is always advised to choose a supervisor who has prior experience and is a subject matter expert in the field of study you have chosen. It you are lucky, you should try finding a supervisor who agrees to your ideology and style of research.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">An experienced supervisor understands the difficulties that an academic student might face while preparing a dissertation. Thus, they tend to offer the right guidance at the right time from choosing a topic to designing an effective research work. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">More the exposure to internship programs, graduate courses, workshops, seminars and even your friends, more the possibility of generating excellent research ideas. It’s like; first, you have to enhance your knowledge by exploring the suitable topics of research. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Every student has a unique perception towards the research topics. If you can interact with other academic students that can add flavour to your theme, then you can come with an overall refined idea regarding the research topic. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Never choose those topics, which are outdated or overworked. Choosing those topics highly risk your academic grades and research funding.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">	Make sure the dissertation topics are approved by your supervisor as well as the committee. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Don't waste much time in choosing a topic. The more you will invest time in choosing a topic, the less you will get to finish the research work. </li>
                        </ul>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>How to come up with a good research question?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">As per the requirements, it is always necessary to choose the questions of the research in such a manner that it will attract the attention of readers. Better the research questions more will be the readers. When you pick the right question for your dissertation, it indicates a better understanding of subject from the student as well as helps reader in grabbing the techniques of the research easily. Students will not face issues later if they pick the right questions from the very start. Some things you can keep in mind which picking the research question: </p>
                        <ul>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Your research should actually provide valuable information to researchers in the area under study and should not repeat anything that is already done in the past. Ideally your research questions should be interesting enough to be not ignored by other researchers doing research in similar areas.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">You increase your chances of funding when research questions are trending and are of high public or corporate interest. If the questions are not up to the mark or have less relevancy with the contemporary world, then the funding will be not be given, and the questions will not be accepted. For example, when the research questions are about a rare stem cell therapy, then your research must provide valuable information to some of the unanswered questions in the field of study such that it is meaningful for the doctors, medical professionals treating people who are suffering from this chronic disease. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The research question should neither be broad nor too narrow. It should just be manageable and relevant for the current generation. A focused research question greatly enhances the chances of funding.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">You should give more focus to those segments which are covered in your research. Make sure your research question satisfies this criterion. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Be realistic and set the research goals, which are achievable. Mention the scope and limitation of your research goal, reflecting the research theme. </li>
                        </ul>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>What are the chief research methodologies?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The research methodologies are the techniques that are adopted by the academic students to collect information. These techniques help in creating a difference with others and to make the write up unique and exciting. The methodologies are assisting the students to write the dissertation by using the innovative writing techniques. To get the ideas of these techniques, there are several services available for the students, depending on their requirements. Below here, there are some top methodologies, which are described briefly. </p>
                        <ul>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Conducting Interviews –</b> The interview techniques are defined as the qualitative research techniques that are used to explore the perspective of individuals or groups. The interviews are conducted intensively to get the ideas from the people who are interested in the particular program or situation. In case of the research techniques, interviews are helping the concerned interviewer to grab the knowledge from the students to classify them as per the requirements. 
                      <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The processes of conducting the interviews are processed in several forms as well as have specific rules. When the interviews are conducted for grabbing the ideas of the individuals, then it is the formal interview. But, when the process of interview maintained with a casual conversation between two persons, then it is known as the informal interview.</p></li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Historical research Methodology – </b>Historical research methodology is kind of a qualitative research which involves studying the past events to draw conclusions. To master this method, you need to understand the four key sources of Historical information which can be used to carry this kind of research.
                        <ol type="1"><br>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Old historical documents which are preserved in the museums.</li>
                         <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Books and journal articles are referring to historical information.</li>
                           <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Census data and other government data</li>
                            <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Various literary sources like recollections, memoirs, and autobiographies.</li>
                        </ol>
                        </li><br>
           
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Conducting Surveys – </b>If you are looking for a quantitative research method, then conducting surveys is highly recommended for you. It involves surveying a large group of people and deriving quantitative results from that data. Some good examples of survey methodology mainly are census data, statistical reports, market research analysis, and polls. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Performing Case studies – </b>Case study is one of the important components of qualitative research methodology. In this methodology, the research theories are subjected to practical life scenarios, to validate their features. The case study methodology is mainly used in writing dissertations for social sciences, law, and business.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Theoretical analysis – </b>In this methodology, the philosophical theories are used to implement critical exercises, which greatly help in setting necessary assumptions about the human society. Mainly, the theoretical analysis is used for subjects like Gender studies, cultural studies, comparative literature, English, and Philosophy.</li>
                        </ul>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>How to write chapters for your dissertation?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">A chapter in every set of books helps to get the better ideas regarding the concerned topic. When the topics are chosen, then it is essential to divide the topics into several chapters as it will help the reader to grab the intention of the writer. The chapters therefore are a very important part of the dissertation. The main parts of the body of various topics are mentioned in separate chapters that will help to differentiate the topic into small chunks. There are some tips mentioned below that will help to guide you in maintaining the chapters.</p>
                        <ul>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">It is necessary to keep at least five chapters in the dissertation, which will include the introduction part and conclusion part. Apart from these two, the writer can divide the details of the research into remaining chapters and sub-sections, so that the reader will not find any difficulty in reading the paper. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The writer needs to choose wisely which topics or sections they are thinking to include as it is necessary to include those topics that must have maximum relevance to the topic. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">There will be certain dissertation which includes more than one research theme. In such cases, it is recommended to write several small chapters for each theme. Suppose your research theme is about Artificial intelligence and its impact on mankind in future, then you need to separate the theme into small order chapters like:
                        <ol type="1"><br>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">AI in its present form </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Disruption in different segments such as medicine, transport technology, automation of jobs, energy. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Future potential of Artificial Intelligence. </li>
                        
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Make the chapters short, relevant and to the point. Don’t reflect upon any unnecessary facts.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The committee needs to enjoy your writing, so it is recommended to use simple and effective writing style only. </li>
                        </ol></li></ul>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>How to do Citations and Bibliography?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">To maintain the citation and bibliography, it is important to possess the other qualities or the special skill that will help a student to make the write up attractive. The citations are mainly defined as the acknowledgement of the references, which are used by the students while writing the research paper. It is essential to maintain this as the reader can quickly locate the critical places in the story to grab better ideas within less time.</p>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Citations </b>- There are four basic ways to cite the sources: </p>
                        <ol type="1">
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Harvard –</b>This citation is parenthetical. Thus, the name of author and year of publication needs to be introduced in the parenthesis.  For example - John Williams: Finance Accounting, New York, 2001, as per Harvard style, it should be written like this: -John Williams, 2001.</li> 
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Chicago – </b>This citation style follows end text citations. Thus they are written as Endnotes. For example - Porter Stephen, Principles of Advanced Accounting, Minnesota, 1989. According to Chicago style, it should be written in the following manner: Porter Stephen, Principles of Advanced Accounting, Minnesota, 1989.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>APA –</b>This American Psychological Association citation style is mostly used citation and its in-text citation styles is quite similar to others.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>MLA – </b>This citation style is used in humanities-based subjects. It mainly includes author's name with the page number. For example - John Hamilton, Introduction to Literary Theory, London 1996, then as per MLA citations it should be (Hamilton, p. 26).</li>
                        </ol>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Bibliography</b>: After the citation, another important thing is the bibliography. It is the end of the dissertation. It is mandatory to use in the dissertation as it will contain all the necessary details of the references that are collected by the students while doing the dissertation task. The bibliography needs to be maintained in alphabetical order under proper segment. It can further be divided into books, resources or internet resources.</p>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>Writing a Dissertation: A recapitulation</b></h4>
                        <ul>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The topic is the critical part of the dissertation, and writing a dissertation is essential to maintain the significance of the chosen topic throughout the paper. One shouldn’t move out of the track while writing about the topics. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Always preserve five chapters of the dissertation. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Every chapter should be based on a particular theme.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">The writing style needs to be simple and clear all throughout.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Mention all the references in the citation.</li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Don’t forget to do a keen proofread, to make your dissertation error-free. </li>
                        <li class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">Remember that your dissertation is the final step towards the PhD degree, so write your best.</li>
                        </ul>
                        <h4 class="lh-18" style="font-size:18px; font-family: SourceSansProRegular,Arial,sans-serif;"><b>How a2z Assignment Help helps in writing a Dissertation?</b></h4>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">a2z Assignment Help</a> is there to help students in writing their dissertation. In <b>dissertation writing</b> requires it’s very important that a student gets critical inputs at the right time. We are here to assist you from choosing the research topic to providing a structure to your dissertation thesis to enable you to score good grades. We are providing such services to students in over 9 countries through our online platforms. Dissertations are a hard nut to crack and we could easily empathize with students who are facing problems while writing them. Choosing topics for research, submission time and deadlines, unique research objectives, providing a structure to your thoughts are some of the common headaches students face each day. </p>
                        <p class="lh-18" style="font-size:15px; font-family: SourceSansProRegular,Arial,sans-serif;">We are having some of the best academic writers with us who can provide customize solutions to your dissertation writing problems. They are highly experienced in writing dissertation thesis and have many years of professional experience. We assure you that students will not face any problems once they are with us. Well, before submitting a request, you can go through the samples which are provided on the website. To avail our service, you can just submit the details on our website or have a chat with our representative and they will guide you through.</p>
                        
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

