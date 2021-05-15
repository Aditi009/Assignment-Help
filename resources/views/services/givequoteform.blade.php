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
                              <h1 class="headingServices">Academic Writing Service</h1>
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
                                        Academic Writing Service</h2>
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
     <div class="container">
      <div class="row">
        <div class=col-sm-3></div>
        <div class="col-sm-3">
            <form method="Post" action="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="image">image</label><span>
                <input type="file" class="form-control" id="image" name="image"></span>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class=col-sm-3>&nbsp</div>
      </div>
    </div>

    
@endsection

