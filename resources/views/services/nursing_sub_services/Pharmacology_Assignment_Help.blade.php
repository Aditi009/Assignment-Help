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
                              <h1 class="headingServices">Pharmacology Assignment Help</h1>
                              <h3 class="text-white headingServices2">Get nursing assignment help service to meet the high expectations of your professors</h3>
                              <p class="text-white ParagraphServices">Hire our academic expert writers and maintain high <br> grades

                              </p>
                           

                         </div>

                    </div>
                    <br>
                    <div class="col-md-7">
                         <div class="text-center backgroundService">
                              <div class="section-header text-white ">
                                   <h5 class="banner-header-small">Get expert academic writers for nursing assignment help!
                                   </h5>
                                   <h2
                                        style="color:black; font-size:25px; font-family: SourceSansProRegular,Arial,sans-serif;">
                                        Pharmacology Assignment Help
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
                    <h2 class="lh-18"
                              style=" font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                              Nursing Assignment Help</h2>

                         <p class="assignmentfont" style="text-align:center;"><i><b>“Nursing is one of the fine arts: I
                                        had almost said the finest of fine arts!”</b></i><br></p>
                         <p class="assignmentfont" style="text-align:right;">- Florence Nightingale</p>

                         <p class="assignmentfont">This quote from the founder of modern nursing, Florence Nightingale,
                              pretty much sums up the importance and the nature of nursing as an occupation. Nursing is
                              the heart of medical profession in the healthcare industry without which the whole
                              healthcare sector would collapse. </p>

                         <p class="assignmentfont">As nurses are responsible for taking care of patients and
                              administering various medications on them, it becomes very important for them to get the
                              proper training and knowledge in their field, both theoretically and practically. This is
                              why many students require <b>nursing assignment help</b> with their curricular, so that
                              they can pursue their studies and cope with the pressure of their nursing course, in order
                              to become a commendable nurse who can help hundreds of other people with their skills and
                              knowledge. </p>

                         <p class="assignmentfont">As the world is progressing and new issues and challenges arise each
                              day in every field, the field of nursing has also experienced significant impacts in the
                              form of social and technological influences. Due to this the colleges and universities, in
                              order to increase the value of the course and curriculum have formulated different
                              curriculums in the nursing course. </p>

                         <p class="assignmentfont">Although, this puts immense pressure on the students, many of whom
                              tent to feel overwhelmed by the new and difficult topics, which in-turn cause them to lose
                              valuable grades. </p>

                         <h3 class="assignmentfont"><b>What is Nursing Assignment Help? </b></h3>
                         <p class="assignmentfont">Nursing is a highly sought after profession amongst budding medical
                              students who are looking forward to having a career where they can help people and make a
                              change in people’s lives. In order to become a respected nurse, students have to prepare
                              tough assignment which are given by their university and learn a plethora of topics.
                              <b>Nursing Assignment help</b>, has become an integrated part of a nursing course, as
                              students require guidance and support from expert academic writer who have done plenty of
                              research in this field.
                         </p>

                         <h3 class="assignmentfont"><b>Various Aspects of a Nursing Assignment Help Which We Cover</b>
                         </h3>

                         <p class="assignmentfont"><b>Foundation of Nursing Practices </b><br>
                              Since nursing is a field where the nurses spend a majority of their time with ill and
                              suffering individuals, it becomes very important for them to have a thorough basic
                              knowledge about the fundamentals of nursing, irrespective of the intricacy or the nature
                              of the disease the patient is going through. This topic covers the basic fundamental
                              aspects of nursing which all nurses must learn, before starting their practice in the
                              medical field. It includes different topics such as, the history and evolution of nursing,
                              developing critical thinking, body mechanics, maintaining a therapeutic environment, code
                              of conduct, report making etc. Understanding the foundations of nursing and keeping
                              yourself up to date is crucial, in order to provide nursing assignment help to any
                              student.
                         </p>

                         <p class="assignmentfont"><b>Behavioural Health Nursing</b><br>
                              This topic of nursing could also be considered as part of psychiatric nursing; it involves
                              treating various medical problems that are prompted by stress or a person's lifestyle.
                              Nurses need to learn how to cope with these patients and diseases along with understanding
                              the appropriate tools and medications used for treating them. Professional nurses in
                              behavioural health nursing use unique methods such as biofeedback, relaxation techniques
                              along with cognitive behavioural therapy and promote a healthy lifestyle to cope with such
                              issues. Other forms of patient care that nurses undertake in behavioural health nursing
                              are assessing mental health, evaluating the psychological condition, performing
                              pathological tests, caring for post-operative trauma, etc. With behavioural health nursing
                              assignment help, from a2z assignment help, you can better understand the tasks which
                              have specific needs to be addressed with detailed approaches such as implementing
                              personality development philosophies, coping strategies, behavioural therapy, etc.
                         </p>

                         <p class="assignmentfont"><b>Legal and Professional Aspects of Nursing</b><br>
                              Being a nurse, one has to put up with the immense pressure of handling and administering
                              treatment to a patient when they are vulnerable, unfortunately this can open up a
                              possibility of miscommunication, misinterpretation and many other complication, which have
                              adverse effect on the life of the patients. There a laws and legal legislation, which
                              specify the various, job responsibilities, limits, and liabilities of the nursing
                              profession, which the nurses must adhere to in order establish a safe and effective
                              therapeutic environment. Our academic writing experts from different fields of science and
                              humanities include various individuals, who are experts in fields like, nursing, medicine
                              and law. We have a collaborative work environment over here at a2zassignmenthelp.com,
                              which enables our writers to interact with each other and provide the best nursing
                              assignment help to students.
                         </p>

                         <p class="assignmentfont"><b>Patient Safety </b><br>
                              Patient safety is a complex field that incorporates modern technologies, such as
                              electronic prescribing and redesigning facilities and infrastructure to properly wash
                              hands and collaborating with others. Most of the patient safety aspects don't require
                              finances; instead, they include clinicians’ dedication to safe practice. The involvement
                              of so many individuals and different kinds of medical professionals (doctors, nurses,
                              pharmacists, social workers, dietitians, and others) makes it hard to ensure, safe
                              treatment of a patient. There is already substantial evidence that increasing numbers of
                              patients are adversely affected as a consequence of their health care either resulting in
                              permanent injury or disability, extended hospital length of stay and even death. Patients
                              are not only affected by the mishandling of equipment but poor communication between
                              individual healthcare professionals or postponements in receiving care can also endanger
                              them. This why it makes it very important for nursing students, to learn everything about
                              patient safety, through our nursing assignment help services, in order to become competent
                              nurses in the future.
                         </p>

                         <p class="assignmentfont"><b>Health Care Policies &amp; Nursing Ethics</b><br>
                              This aspect of nursing can be termed as a subsidiary of the topic nursing laws, as it
                              deals with the various policies and management plans that need to be established, along
                              with laying down of code of conduct and ethics of the nursing profession, to provide
                              adequate care to the patients. Much like the legal boundaries for nursing are required to
                              be recognized for proper care, the same applies to heath care policy initiatives because
                              it requires suitable plans, actions and decisions to meet the particular medical care
                              objectives. It's also extremely essential for the nurses to grasp the ethical principles
                              of nursing and the codes of conduct as well for an optimal and effective workflow for the
                              day to day operations.
                         </p>

                         <p class="assignmentfont">Our writers are well- accustomed with codes of conduct and the
                              implementation of the right ethical values in any situation. Since it is such an important
                              part of the nursing occupation, we make sure to include the best of the content material
                              while providing nursing assignment help to students.</p>

                         <p class="assignmentfont"><b>Gerontology or Elder Care management in Nursing</b><br>
                              As the human body ages, it becomes vulnerable to a wide variety of diseases and ailments,
                              which require constant care and medication. Gerontology is the branch of nursing that
                              involves taking care of the elderly and ageing individuals. The nurse, who specialises in
                              the eldercare, is called a gerontological or geriatric nurse. These nurses are trained to
                              perform conventional nursing functions, but they also receive specialized training that
                              makes them better understand other additional needs of the elderly. This field of nursing
                              is in huge demand as elderly population require constant support with their basic daily
                              tasks. This is why, there is wide research possibilities in this section, thus colleges
                              and universities include different sub branches of this field such as, bio gerontology,
                              social gerontology, environmental gerontology etc. , and various theories of eldercare
                              such as, free radical theory of aging, biological theories of aging, disengagement theory
                              of social gerontology, age stratification theory, etc. Due to this reason, it becomes
                              essential for students to <b>get nursing assignment help</b>, to get the best research
                              outcomes and a well-structured assignment.
                         </p>

                         <p class="assignmentfont"><b>Psychiatric &amp; Mental Health Nursing</b><br>
                              Much like eldercare, mental health patients also requires constant care and monitoring, as
                              they are even more vulnerable to accidents, injuries and thus, require special care and
                              treatment. Psychiatric or mental health nurses work closely with patients having mental
                              health issues. They are specialized in nursing for psychiatric disorders, clinical
                              assessment, diagnosis and administering specialized drugs and treatment procedures. It is
                              one of the essential branches of nursing as nurses have to analyse and deduce what is
                              happening in the mind of a patient and the issues that contribute to it. In addition to
                              this, they are also responsible for identifying suspected illness, using proper detection
                              methods for effective diagnosis. Thus, a lot of learning and knowledge is required to
                              perform these tasks. Mental health nursing assignment helps a student to develop the
                              required theoretical as well as practical skills, in order to care the mental health
                              patients effectively.
                         </p>

                         <p class="assignmentfont"><b>Therapeutic Communication in Nursing </b><br>
                              Being a nurse means, caring patients and understanding their issues and problems, so that
                              it can be passed on to the doctor in charge or to make an informed decision about the
                              treatment plan that should be followed. It has been noted in several studies that,
                              patients are more comfortable in talking about their major and minor issues with the nurse
                              as compared to the doctor. This is why it is important for a nurse to have the necessary
                              communication skills, to get the patient to open up about their issues and establish a
                              therapeutic relation between the patient and the nurse. In the nursing assignment help
                              provided by a2z assignment help, we give our writer sufficient time and resources to
                              perform the required research and find the most suitable factual data which would increase
                              the relevancy and quality of the assignments provided by us.
                         </p>

                         <p class="assignmentfont"><b>Nutrition</b><br>
                              We are what we eat, right?! It is no new information that our eating habits reflect on our
                              body. Especially in case of patients having some pre-existing medical ailment, even the
                              slightest amount of a food which is unsuitable for that particular person can trigger
                              multiple other medical complications, which further deteriorate the health and set back
                              the recovery process. Thus, it is necessary for a patient to eat the right food while
                              recovering from a disease, but in order to do that, patients require assistance from
                              nurses and nutritionists who have knowledge about the different types of foods which help
                              in the recovery process and the ones they should totally avoid. For this, nurses have to
                              spend numerous hours to understand and memorize the correlation between the nutrients and
                              the different forms of recorded illnesses. Universities facilitate this process with the
                              help of assignment which require thorough research and understanding to fully comprehend
                              the process. In the nursing assignment help provided by a2z assignment help, we ensure
                              that each and every requirement of your university guidelines is fulfilled and the
                              questions are answered in the best possible way.
                         </p>

                         <p class="assignmentfont"><b>Pharmacology</b><br>
                              It is the branch of medical sciences that involves the study of drugs and its chemical
                              composition and implication on bodily elements. Pharmaceutical behaviour can be described
                              as a man-made, human, or endogenous substance in the greater aspect. This field attempts
                              to properly deal with a living system with chemicals that leave their influence on the
                              biochemical systems. Pharmacology is divided into the following sub-branches,
                              Pharmacokinetics, Pharmacodynamics, Therapeutics, Chemotherapy, Toxicology, Clinical
                              Pharmacology, Pharmacy, Pharmacognesy, Pharmacogenetics, Pharmacoeconomics,
                              Pharmacoepidemiology, Comparative Pharmacology, Animal Pharmacology, and Posology.
                         </p>

                         <p class="assignmentfont">It is apparent that a nurse has to learn all about the medications
                              along with their respective implication and administration in varying circumstances. They
                              also have to learn the composition of the medications along with knowing how different
                              drugs are administered in escalated situations. </p>

                         <p class="assignmentfont">Due to the vast scope of learning in pharmacology, medical students
                              require <b>nursing assignment help</b>, when comes to this particular subject, as a
                              majority of the students struggle with this subject, require guidance while writing
                              assignments.. </p>

                         <p class="assignmentfont"><b>Physiology </b><br>
                              Physiology is a fundamental subject of a nursing course or any medical course for that
                              matter. Nurses need to learn and understand the human body's different systems and
                              functions. This is the fundamental basis for extending clinical aid to patients.
                              Physiology is the comprehensive investigation of vital functions that exist inside a
                              biological system of any living organism. It is known to be a branch of biology that
                              comprises of essential information concerning tissues, organs, biological substances, and
                              anatomy along with various techniques of interacting with each other to ensure the
                              formulation of a suitable treatment plan.
                         </p>

                         <p class="assignmentfont">In every assignment we do under our <b>nursing assignment help
                                   services</b>, we make sure that we provide appropriate information, regarding the
                              physiology of the patient so that the examiner appreciates the amount of research done by
                              you and the simplicity of the contents of your assignments. </p>

                         <p class="assignmentfont"><b>Pathophysiology </b><br>
                              This discipline is a combination of physiology and pathology which is why it is often
                              known as physiopathology. Pathology describes the symptoms that are encountered when one
                              is under the impact of illness and physiology discusses the biochemical process in which
                              the body performs. Every nurse needs to study this field because they need to consider the
                              physiological changes that are related to a disease or arising from a disease. Along with
                              these, nurses are also required to perform conclusive diagnosis and therapies needed. It's
                              a very important aspect in the field of healthcare.
                         </p>

                         <p class="assignmentfont">While working on any nursing assignment, it is always a good practice
                              to include brief statements, highlighting your comprehension of the fundamentals of the
                              nursing field. This is why, while writing any assignment for the nursing assignment help
                              required by a student, our expert writers make sure to describe the basic fundamental
                              features of the topic in question, so as to display a good understanding of the research
                              questions. </p>

                         <p class="assignmentfont"><b>Community Health Nursing </b><br>
                              A nurse interacts with thousands of patients in their career as a medical practitioner,
                              and not only that, people also prefer to speak about their problems with the nurse more as
                              compared to a specialized doctor. Thus, nurses are many times regarded as the ambassadors
                              of good health. It is the responsibility of a nurse to provide people with genuine
                              information and resolution to their problems. Community health nurse is a branch of
                              nursing which deals with the wellbeing of the society, and promote care to a wide
                              demographic of people. A community health nurse spreads awareness about good and healthy
                              practices, educated people about various illnesses, policy reforms, and familiarizes
                              themselves with the particular problems existing in the society.
                         </p>

                         <p class="assignmentfont">While studying this course, students have to dedicate a majority of
                              their time in practical learning, which results in a lack of theoretical understanding
                              which is equally necessary. Nursing assignment help provided by a2z assignment help,
                              ensures that students get sufficient time to dedicate themselves to becoming an excellent
                              nurse by helping them submit their assignments on time with the proper guidance. </p>

                         <p class="assignmentfont"><b>Clinical Reason in Nursing </b><br>
                              Clinical reasoning is the step by step process using which a nurse or a medical
                              professional, gather information about the patient’s illness and using their own
                              competency makes a decision which forms the treatment plan which is then implemented, and
                              the progress is observed. It is an inherent skill which all nurses must possess and master
                              over time, so as to be able to make the correct judgment and administering the required
                              medications. Clinical
                                   reasoning cycle is an 8 step process using which any nurse or doctor analyses and
                              treats a patient. These 8 steps are:
                         </p>

                         <ul class="assignmentfont">
                              <li>Consideration</li>
                              <li>Gathering information</li>
                              <li>Analysis</li>
                              <li>Identification of problem</li>
                              <li>Establishing goals</li>
                              <li>Implementation</li>
                              <li>Evaluation of outcomes</li>
                              <li>Reflection</li>
                         </ul>


                         <p style="text-align: center;"><img
                                   src="https://www.totalassignmenthelp.com/uploads/nursing-assignment-help.webp"
                                   alt="nursing assignment help" width="50%"></p>

                         <p class="assignmentfont">Therefore, in order to effectively implement this process, a nurse is
                              required to have thorough knowledge and critical thinking skills, along with a good
                              decision making competency which allows them to treat their patients to the best of their
                              capabilities. </p>

                         <p class="assignmentfont">While getting <b>nursing assignment help</b>, it is important that
                              the assignments include some new information every time so that the students gets to learn
                              something new , which would help them in expanding their knowledge base and keep them
                              moving towards perfecting their clinical reasoning skills. </p>

                         <p class="assignmentfont"><b>Preoperative Nursing &amp; Postoperative Nursing </b><br>
                              A lot goes into prepping a patient for any surgical process or an operation. A nurse has
                              to work closely with the doctor and the patient, to provide all the necessary
                              pre-requisites to the doctor so that he/she can perform the operation smoothly. This
                              includes, knowing the duties and responsibilities, the issues that need to be examined and
                              addressed prior to performing any kind of clinical procedure on the patient, concepts of
                              preoperative evaluation such as recognition of the conditions of the patient, handling of
                              the entire course with a holistic tactic, accountability for the proper communication of
                              information etc.
                         </p>

                         <p class="assignmentfont">Furthermore, the responsibility of a nurse only increases once the
                              patient is done with the surgical procedure. Post-operative nursing refers to the
                              principles of recognizing the roles and responsibilities of nurses in caring for
                              post-operative patients, such as restoring body homeostasis, sustaining body system
                              functions, avoiding post-operative complications, encouraging movement and mobility,
                              upholding renal functions, mitigating obstructions while promoting patient recovery etc.
                         </p>

                         <p class="assignmentfont">In order to fully comprehend all of the functions and procedures that
                              go in before, after and during an operation, a nurse to have the required skills and
                              mental competency which can only be achieved through undertaking nursing assignment help
                              from a2z assignment help , as we
                              provide the best quality of information and academic guidance to students.</p>

                         <p class="assignmentfont"><b>Neonatal Care Nursing</b><br>
                              Neonatal nurses provide care to parents who are expecting a child or are trying to have a
                              baby and help them in taking care of a new born baby. A neonatal nurse must possess all of
                              the necessary information regarding the complications than can occur while carrying a baby
                              and during the delivery process, including handling situations of premature delivery. This
                              field also requires a nurse to have a good understanding of handling various complications
                              a new born suffers such as infection, cardiac malformations, prematurity, birth defects,
                              and surgical issues among others.
                         </p>

                         <p class="assignmentfont">Students aiming to become a neonatal nurse can get nursing assignment
                              help from a2z assignment help.com with their academic
                                   assignments and get them done by an assignment writing expert.</p>

                         <p class="assignmentfont">Pediatric Nursing <br>
                              Pediatric nursing is the branch of nursing that involves taking care of neonates and
                              children up to adolescence. A pediatric nurse is required to have sufficient knowledge
                              about providing due care to a child who may be suffering from in illness or injury. These
                              types of nurses are required to have proper knowledge and communication skills to handle
                              and interact with a toddler or adolescent child. Administering the medication in children
                              of such age is also a bit difficult and requires competency to handle the children.
                         </p>

                         <p class="assignmentfont">Students getting nursing assignment help from a2z assignment help
                              can rest assured of the quality of information that is included in their assignment, so
                              that they can submit it to their universities and pass the semester with flying colors and
                              achieve their dream of becoming a professional nurse. </p>

                         <p class="assignmentfont">Check out our other samples related to nursing assignment help and
                              get your assignment done from the top academic writing experts who specialize in various
                              fields of medical sciences, and themselves have worked as a professional nurse sometime in
                              their career and written many journal articles and books as well. </p>

                         <p class="assignmentfont">Try us now!!</p>



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
                                             Work</span>
                                   </li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/best-price.png"
                                                  alt="Academic Assignment Help at lowest Price"> Lowest Price
                                             Guarantee</span>
                                   </li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/money-back.png"
                                                  alt="Money Back"> 100% Money Back Guarantee</span>
                                   </li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/top-quility.png"
                                                  alt="  High quality Academic Assignment Help "> Top Quality
                                             Work</span>
                                   </li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/ontime.png"
                                                  alt=" On Time Academic Assignment Help"> On Time Deliver</span>
                                   </li>
                                   <li class="lh-18"
                                        style="font-size:15px; font-family: 'q_serif',Georgia,Times,'Times New Roman','Hiragino Kaku Gothic Pro','Meiryo',serif;">
                                        <span class="list-group-item-new bgn"><img
                                                  src="https://www.totalassignmenthelp.com/assets2/img/24-7.png"
                                                  alt="  24 x 7  Academic Assignment Help"> 24 x 7 Live Help</span>
                                   </li>
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

