<body style="background-color: turquoise; peat;">
<div class="container">
  <br />
  <br />
  <br />



  <div class="panel-group" id="accordion">
    <div class="faqHeader">General questions</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How does this website work?</a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          This website lets patients and doctors communicate in a more convenient way by letting patients make an appointment to doctors
          near or favorable to their location. The doctors will then approve/disapprove the appointments depending on their choice. Once the doctor approves
          a patient's request, he/she (the doctor) can give prescriptions to their patients. The prescriptions can be viewed
          by the patients in their home page named View your Prescriptions.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Is this website for free?</a>
        </h4>
      </div>
      <div id="collapseTen" class="panel-collapse collapse">
        <div class="panel-body">
          This website is free and all you need to do is <#Login> if you're already a member. Not a member yet? Click <#Here> to signup.
	        What is this website all about?
		      This website is about making the search for doctors more convenient for the patients and by making the setting of appoitments to
		      doctors much easier.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is this website all about?</a>
        </h4>
      </div>
      <div id="collapseEleven" class="panel-collapse collapse">
        <div class="panel-body">
          This website is about making the search for doctors more convenient for the patients and by making the setting of appoitments to
		doctors much easier.
        </div>
      </div>
    </div>

    <div class="faqHeader">Patients</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How do I see a doctor's information?</a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          To view a doctor's info, you just have to look for the Locations part which is in the home page. After clicking a location (i.e. Metro Manila),
		a list of doctors including their information will be showed to the screen.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Can I make an appointment with a doctor?</a>
        </h4>
      </div>
      <div id="collapseThree" class="panel-collapse collapse">
        <div class="panel-body">
          Absolutely. To make an appointment, go to your home page and look to the right side of the screen and click Schedule an Appointment.
        </div>
      </div>
    </div>

    <div class="faqHeader">Doctors</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How do i see my set of appointments?</a>
        </h4>
      </div>
      <div id="collapseFour" class="panel-collapse collapse">
        <div class="panel-body">
        To see the set of appointments,you just have to click the <#Appointment> and then you will see the appointments.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How do i see a patient's information?</a>
        </h4>
      </div>
      <div id="collapseSeven" class="panel-collapse collapse">
        <div class="panel-body">
          upon clicking the <#Appointment> you will see the patient who scheduled an appointment and when you click it,you will see
		the information of the particular patient.
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.faqHeader {
  font-size: 27px;
  margin: 20px;
}

.panel-heading [data-toggle="collapse"]:after {
  font-family: 'Glyphicons Halflings';
  content: "e072"; /* "play" icon */
  float: right;
  color: #F58723;
  font-size: 18px;
  line-height: 22px;
  /* rotate "play" icon from > (right arrow) to down arrow */
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}

.panel-heading [data-toggle="collapse"].collapsed:after {
  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
  color: #454444;
}
</style>
