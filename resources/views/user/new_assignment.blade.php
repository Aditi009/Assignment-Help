@extends('user.layout.assignment_user')
@section('body')
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
#prevBtn {
    margin-right: 20px;
    background-color: #bbbbbb;
}

body {
  background-color: #f1f1f1;
}



#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 50%;
  min-width: 300px;
  margin-top: 200px;
}

h1 {
  text-align: center;
}
button, [type=button], [type=reset], [type=submit] {
    -webkit-appearance: button;
    margin-top: 20px;
}
li{
    list-style: none;
    margin-top: 10px;
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>


<div class="conatiner">
<form id="regForm" action="submitnew" method="POST">
@csrf
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h3 style="justify-content: center;display:flex;color:black">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
      <p style="justify-content: center;display:flex">GET HELP INSTANTLY</p>
<div class="row mt-5">
    <div class="col-6 col-md-6 mt-5">
        <li class="sticky_list"><input type="email" class="form-control" name="email" placeholder="Email" required></li>
        <br>
        <li class="sticky_list"><input type="text" class="form-control" name="subject" placeholder="Subject" required></li>
        </div>
    <div class="col-6 col-md-6">
        <li class="sticky_list"><select name="pages" class="form-control">
        <option>1 page/250 words</option>
        <option>2 page/500 words</option>
        <option>3 page/750 words</option>
        <option>4 page/1000 words</option>
        <option>5 page/1250 words</option>
        <option>6 page/1500 words</option>
        <option>7 page/1750 words</option>
        <option>8 page/2000 words</option>
        <option>9 page/2250 words</option>
        <option>10 page/2500 words</option>
        <option>11 page/2750 words</option>
        <option>12 page/3000 words</option>
        <option>13 page/3250 words</option>
        <option>14 page/3500 words</option>
        <option>15 page/3750 words</option>
        <option>16 page/4000 words</option>
        <select></li>
            <br>
        <li class="sticky_list mt-2">
            <input type="datetime-local" class="deadline_time mt-2 form-control" id="deadline" name="deadline" style="border:1px solid #C0C0C0;"></li>
        <input type="text" name="assignment_type" value="coming from nav" hidden>
    </div></div>
  </div>
  <div class="tab">
    <h3 style="justify-content: center;display:flex;color:black">GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!</h3>
    <p style="justify-content: center;display:flex">GET HELP INSTANTLY</p>
    <div class="" style="margin-top:50px">
        <label>Your Current Level Of Assignment</label>
        <li class="sticky_list"><select name="level_of_assignment" class="form-control">
        <option value="High School">High School</option>
        <option value="Diploma">Diploma</option>
        <option value="Undergraduate">Undergraduate</option>
        <option value="Postgraduate">Postgraduate</option>
        <option value="PhD/Doctorate">PhD/Doctorate</option>

        <select></li>
            <br>
        <li class="sticky_list mt-2"><div class="form-group col-12">
            <label>Reference Of Assignment</label>
            <select class="form-control"  name="rfa" id="referenceofassignment" required="">
                  <option value="">Select Assignment</option>
                                                                      <option value="AGLC">AGLC</option>
                                            <option value="APA">APA</option>
                                            <option value="BMJ">BMJ</option>
                                            <option value="Chicago">Chicago</option>
                                            <option value="Footnotes">Footnotes</option>
                                            <option value="Footnotes and Biblography">Footnotes and Biblography</option>
                                            <option value="Harvard">Harvard</option>
                                            <option value="IEEE">IEEE</option>
                                            <option value="MHRA">MHRA</option>
                                            <option value="MLA">MLA</option>
                                            <option value="Open">Open</option>
                                            <option value="OSCOLA">OSCOLA</option>
                                            <option value="Oxford">Oxford</option>
                                            <option value="Turabian">Turabian</option>
                                            <option value="Vancouver">Vancouver</option>
                                                                </select>
        </li>
        <br>
        <input type="text" name="assignment_type" value="coming from nav" hidden>
        <div>
<br>
        <label>phone Number</label>
        <input placeholder="Phone..." oninput="this.className = ''"  class="form-control" name="phone">
       <p> Contact number needed incase of emergency and receive assignment update.</p></div>
<br>
       <input id="summernote" type="text" class="form-control" placeholder="Tech effort"><br>
       <input type="text" name="desc" id="desc" hidden>
       <br>
        <div>
            <label>Best Call Time</label>
            <select class="form-control" name="callback_time" id="callback_time">
                <option value="12:00 AM To 03:00 AM">12:00 AM To 03:00 AM</option>
                <option value="03:00 AM To 06:00 AM">03:00 AM To 06:00 AM</option>
                <option value="06:00 AM To 09:00 AM">06:00 AM To 09:00 AM</option>
                <option value="09:00 AM To 12:00 PM">09:00 AM To 12:00 PM</option>
                <option value="12:00 PM To 03:00 PM">12:00 PM To 03:00 PM</option>
                <option value="03:00 PM To 06:00 PM">03:00 PM To 06:00 PM</option>
                <option value="06:00 PM To 09:00 PM">06:00 PM To 09:00 PM</option>
                <option value="09:00 PM To 12:00 AM">09:00 PM To 12:00 AM</option>
              </select>
        </div>


  </div></div>

  <div style="overflow:auto;">
    <div style="float:right;display:flex">
      <button type="button" id="prevBtn"  onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      <input type="submit" id="submits" value="submit" name="submit" class="btn btn-primary" style="display: none">
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>

  </div>
</form>
<div class="container">
    @if(session()->has('message'))
    <div class="alert mr-5" role="alert" style="margin-top: -100PX">
      <p style="color:green">  {{ session()->get('message') }}</p>
    </div>
    @endif</div>
</div>
<script>
    $("#submits").on('click', function()
  {
      var a=$($("#summernote").summernote("code")).html();
      $("#desc").val(a);
  });
    </script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display="none";
    document.getElementById("submits").style.display="block";

  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("nextBtn").style.display="block";
    document.getElementById("submits").style.display="none";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<script>
    // Get the modal

    $("#submit").on('click', function()
      {
          var a=$($("#summernote").summernote("code")).html();
          $("#desc").val(a);
      });


    </script>
    <link href="summernote/summernote.css" rel="stylesheet">
    <script src="summernote/summernote.js"></script>
    <script>
    $(document).ready(function() {
      $('#summernote').summernote('code');
      $('#summernote').summernote('insertImage', "img", filename);
    });
    </script>
</body>
</html>

@endsection
