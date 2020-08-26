<?php include_once ('php/connect.php')?>
<?php include_once ('php/mypage.php')?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<head>
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {Titillium Web
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
</head>
<head>
<style>
#message-search {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#message-search td, #message-search th {
  border: 1px solid #ddd;
  padding: 8px;
}

#message-search tr:nth-child(even){background-color: #FFFFFF;}

#message-search tr:hover {background-color: #ddd;}

#message-search th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<!-- Navigation -->
<div class="header" id="myHeader">
  <nav class="w3-bar w3-green">
    <a href="#about" class="w3-button w3-bar-item">About</a>
    <a href="#routines" class="w3-button w3-bar-item">Routines</a>
    <a href="#enter" class="w3-button w3-bar-item">Enter</a>
    <a href="#contact" class="w3-button w3-bar-item">Contact</a>

  </nav>
</div>

<!-- About Description -->
<div>
  <a name="about"></a>
  <section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">Routine Lab</h2>
    <p class="w3-opacity"><i>About Us</i></p>
    <p class="w3-justify"> With the creation of Alexa devices, the world now has access to AI in everyone's home for a minimal cost. These devices provide cool features like the ability to play music on the fly, learn the weather, or do quick internet searches. One feature we find lacking in use is the 'Routines' feature. This feature allows you to create a series of commands to provide AI use to all Alexa users. Whether it be automatic alerts when someone enters a certain location or connecting to your smart home devices for the early morning, there are features for everyone. Here we provide a simple service, you can enter your routines to share with the world and search our database for what you can find to make your life easier! We also take suggestions and will attempt to make the routine you requested for you for a small fee. Sorry the site is ugly, I am not a web developer and had to teach myself a lot for this.</p>
  </section>
</div>
<!-- Search bar and header for routines -->
<div>
  <a name="routines"></a>
    <h3 class="w3-wide w3-center" id="#routines">Routines</h3>
    <form id="my-form-search"action="php/mypage.php" method="POST">
      <input type="text" name="searchcategory" placeholder="Search routines here..."/>
      <input type="submit" value="Search"/>
    </form>
    <head>
    <style>
    #body {
    position: absolute;
    top: 150px;
    left: 150px;
    height: 500px;
    width: 100px;
    display: flex;
    flex-direction: row;
    }
    #content{
    border: green solid 2px;
    overflow-x: auto;
    overflow-y: auto;
    height: 100%;
    }
    </style>
    </head>
    <div id =content>
      <table class="w3-wide" id="message-search"></table>
    </div>
</div>

<!-- Input section -->
<div class="input" id="myInput">
  <a name="enter"></a>
  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3 class="w3-center">Create a new routine</h3>
<p class="w3-opacity w3-center"><i>Enter your Routine to be shared with everyone!</i></p>
<div>
  <form id="my-form-entry" action="" method="POST"> 
    <label for="routine_name">Routine Name*</label>
    <input type="text" id="Routine Name" name="routine_name" placeholder="Name of your routine...">
    <label for="AI">AI Device (Will support more in the future)*</label>
      <select type="text" id="AI" name="AI">
      <option value="Alexa">Alexa</option>
    </select>
    <label for="seeAnotherField">When This Happens*</label>
      <select type="text" class="form-control" id="seeAnotherField" name="wth">
        <option value="Voice">Voice</option>
        <option value="Schedule">Schedule</option>
        <option value="Smart Home">Smart Home</option>
        <option value="Location">Location</option>
        <option value="Alarms">Alarms</option>
        <option value="Echo Button">Echo Button</option>
        <option value="Guard">Guard</option>
      </select>

    <!-- specialized fields for certain "When This Happens" -->
    <!-- Voice -->
    <div class="form-group" id="otherFieldGroupDivVoice">
      <label>Phrase to activate the routine "Alexa, ..."</label>
      <input type="text" name="enter_voice_phrase" placeholder="Enter Phrase..."/>
    </div>

    <!-- Schedule -->
    <div class="form-group" id="otherFieldGroupDivSchedule">
      <label for="schedule">Schedule</label>
      <select type="text" id="schedule" name="schedule">
        <option value="At Time">At Time</option>
        <option value="Sunrise">Sunrise</option>
        <option value="Sunset">Sunset</option>
      </select>
    </div>

    <!-- Smart Home -->
    <div class="device_wrapper" id="otherFieldGroupDivSmartHome">
    <label for="devices">Other Smart Devices Needed (Max 10)</label>
      <div>
        <input type="text" name="extra_devices[]" placeholder="Device..."/>
        <a href="javascript:void(0);" class="add_button_device" title="Add field">Add Device</a>
      </div>
    </div>

    <!-- Location -->
    <div class="form-group" id="otherFieldGroupDivLocation">
      <label for="location">Location</label>
      <select type="text" id="location" name="location">
        <option value="Arrives">Arrives</option>
        <option value="Leaves">Leaves</option>
      </select>
    </div>

    <!-- this ones aren't used for now, will add these in the future -->
    <!-- Alarms -->

    <!-- Echo Button -->

    <!-- Guard -->

    <label for="devices">Add Action (Max 10 for now)</label>
    <div class="command_wrapper">
      <div>
        <select type="text" name="actions[]">
          <option value="None">None</option>
          <option value="Alexa Says">Alexa Says</option>
          <option value="Briefings">Briefings</option>
          <option value="Calendar">Calendar</option>
          <option value="Date and Time">Date and Time</option>
          <option value="Device Settings">Device Settings</option>
          <option value="Device Settings">Device Setings</option>
          <option value="Drop In Notification">Drop In Notification</option>
          <option value="E-mail">E-mail</option>
          <option value="Good News">Good News</option>
          <option value="Guard">Guard</option>
          <option value="IFTTT">IFTTT</option>
          <option value="Messaging">Messaging</option>
          <option value="Music">Music</option>
          <option value="News">News</option>
          <option value="Skills">Skills</option>
          <option value="Smart Home">Smart Home</option>
          <option value="Sounds">Sounds</option>
          <option value="Traffic">Traffic</option>
          <option value="Wait">Wait</option>
          <option value="Weather">Weather</option>
        </select>
        <input type="text" id="action_description[]" name=action_description[] placeholder="Action Description...">
        <a href="javascript:void(0);" class="add_button_command" title="Add field">Add Action</a>
      </div>
    </div>
    <label for="Description">Routine Summary*</label>
    <input type="text" id="describe" placeholder="Summary of Routine" name="describe">
    <label for="Creator">Creator*</label>
    <input type="text" id="creator" placeholder="Creator" name="creator">
    <p class="w3-justify">* = required field</p>
    <input type="submit"></input>
    <p id="message-entry"></p>
  </form>
</div>
</body>
</div>

<!-- Contact Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <a name="contact"></a>
  <h2 class="w3-wide">Contact Us</h2>
  <p class="w3-opacity"><i>We're here to help!</i></p>
  <p class="w3-justify">Please feel free to email us at _company_name_@gmail.com or click on one of the icons below to reach out to us on all social media. We will answer in a timely manner!</p>
</section>

<!-- Footer --> 
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">

<!-- Footer 
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://www.facebook.com/nick.krute"><i class="fa fa-facebook-official"></i></a>
  <a href="https://twitter.com/nickkrute?lang=en"><i class="fa fa-twitter"></i></a>
  <a href="https://www.instagram.com/nick_krute/"><i class="fa fa-instagram"></i></a>
  <a href="https://www.linkedin.com/in/nicholas-krute-4433a0104"><i class="fa fa-linkedin"></i></a>
</footer>
-->

<!-- Scrolling function -->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button_device'); //Add button selector
    var wrapper = $('.device_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="extra_devices[]" placeholder="Device..."/><a href="javascript:void(0);" class="remove_button" title="Remove Device">Remove Device</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e){
          e.preventDefault();
          $(this).parent('div').remove(); //Remove field html
          x--; //Decrement field counter
    });
});
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button_command'); //Add button selector
    var wrapper = $('.command_wrapper'); //Input field wrapper
    var fieldHTML = '<div><select type="text" name="actions[]" placeholder="Action..."><option value="None">None</option><option value="Alexa Says">Alexa Says</option><option value="Briefings">Briefings</option><option value="Calendar">Calendar</option>  <option value="Date and Time">Date and Time</option><option value="Device Settings">Device Settings</option><option value="Device Settings">Device Setings</option><option value="Drop In Notification">Drop In Notification</option><option value="E-mail">E-mail</option><option value="Good News">Good News</option><option value="Guard">Guard</option><option value="IFTTT">IFTTT</option><option value="Messaging">Messaging</option><option value="Music">Music</option><option value="News">News</option><option value="Skills">Skills</option><option value="Smart Home">Smart Home</option><option value="Sounds">Sounds</option><option value="Traffic">Traffic</option><option value="Wait">Wait</option><option value="Weather">Weather</option></select><input type="text" id="action_description[]" name=action_description[] placeholder="Action Description..."><a href="javascript:void(0);" class="remove_button" title="Remove Action">Remove Action</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e){
          e.preventDefault();
          $(this).parent('div').remove(); //Remove field html
          x--; //Decrement field counter
    });
});
</script>
<!--AJAX for entry of routines-->
<script>
$(document).ready(function() {
$("#my-form-entry").submit(function(e) {
  e.preventDefault();
  $.ajax( {
    url: "php/connect.php",
    method: "post",
    data: $("form").serialize(),
    dataType: "text",
    success: function(strMessage) {
    $("#message-entry").text(strMessage);
    $("#my-form-entry")[0].reset();
    }
  });
});
});
</script>
</script>
<!--AJAX for searching of routines-->
<script>
$(document).ready(function() {
$("#my-form-search").submit(function(e) {
  e.preventDefault();
  $.ajax( {
    url: "php/mypage.php",
    method: "get",
    data: $("form").serialize(),
    dataType: "text",
    success: function(strMessage) {
    $("#message-search").html("");
    $("#message-search").append(strMessage);
    $("#my-form-search")[0].reset();
    }
  });
});
});
</script>
<script>
$("#seeAnotherField").change(function() {
  if ($(this).val() == "Voice") {
    $('#otherFieldGroupDivVoice').show();
  } else {
    $('#otherFieldGroupDivVoice').hide();
  }
  if ($(this).val() == "Schedule") {
    $('#otherFieldGroupDivSchedule').show();
  } else {
    $('#otherFieldGroupDivSchedule').hide();
  }
  if ($(this).val() == "Smart Home") {
    $('#otherFieldGroupDivSmartHome').show();
  } else {
    $('#otherFieldGroupDivSmartHome').hide();
  }
  if ($(this).val() == "Location") {
    $('#otherFieldGroupDivLocation').show();
  } else {
    $('#otherFieldGroupDivLocation').hide();
  }
  if ($(this).val() == "Alarms") {
    $('#otherFieldGroupDivAlarms').show();
  } else {
    $('#otherFieldGroupDivAlarms').hide();
  }
  if ($(this).val() == "Echo Button") {
    $('#otherFieldGroupDivEchoButton').show();
  } else {
    $('#otherFieldGroupDivEchoButton').hide();
  }
  if ($(this).val() == "Guard") {
    $('#otherFieldGroupDivGuard').show();
  } else {
    $('#otherFieldGroupDivGuard').hide();
  }
});
$("#seeAnotherField").trigger("change");
</script>
</body>
</html>

