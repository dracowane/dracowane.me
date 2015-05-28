<?php
$ip=$_SERVER['REMOTE_ADDR'];
?>
<html>
<head>
<title>A Race Down</title>
<style type="text/css">
#ddata{
color:E6E6E6;
font-family:Courier;
height:95%;
}
#leftbar {
color:E6E6E6;
font-family:Courier;
width:25%;
float: left;
}
#middle{
color:#E6E6E6;
font-family:Courier;
width:50%;
float: left;
}
#rightbar
{
color:#E6E6E6;
font-family:Courier;
display: inline-block;
width:25%;
float: right;
}

#footer{
  background-color:#000000;
  color:#E6E6E6;
font-family:Courier;
float:bottom;
height:5%;
clear: all;
}

.mainbutton
{
color:660000;
 background: transparent;
border:none;
  border-left: solid;
  border-left-width: 1px;
  border-left-color: 660000;

  border-right: solid;
  border-right-width: 1px;
  border-right-color: 660000;
}

.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}

#quest1{
   display: inline;
  
}
#quest3{
   display: inline;
  
}
#quest4{
   display: inline;
  
}
#quest6{
   display: inline;
  
}
#quest8{
   display: inline;
  
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
#chartContainer{
  background-color:#161616;

}

.iname
{

  color:#E6E6E6;
font-family:Courier;  
}

#info
{

	padding-top: 40%;
}
 
.iname {

	border:none;
	background-color:#161616;
	border-bottom: solid;
	border-bottom-width: 1px;
	border-bottom-color: 660000;
	color:E6E6E6;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.js"></script>
<script src="typed.js"></script>
<script>
typeit3();
function typeit(){
  $(function(){
      $("#quest1").typed({
        strings: ["Hey!, My name is kashish , Welcome to my website!, What is your name? "],
        typeSpeed: 0
      });
  });

}

function typeit3(){
  $(function(){
      $(".contactme").typed({
        strings: ["kashishmittal55@gmail.com","dracowane@gmail.com"],
        typeSpeed: 50,
         backDelay: 500,
        loop: true, // loop on or off (true or false)
        loopCount: false
      });
  });
  //document.getElementById("contactme").textContent="";
  window.setTimeout(typeit3, 3000);

}

 if (document.addEventListener) document.addEventListener("DOMContentLoaded", typeit3, false);
  else if (window.addEventListener) window.addEventListener("load", typeit3, false);
  else if (window.attachEvent) window.attachEvent("onload", typeit3);
  else window.onload = typeit3;
function typeit1(){
  $(function(){
      $("#quest3").typed({
        strings: ["Hello " +  document.getElementById("iname").value + ", I hope You are fine :D "],
        typeSpeed: 0,
      });
  });
}


function typeit2(){
  $(function(){
      $("#quest4").typed({
        strings: ["So , Don't you think weather is too hot today? ", "Well, I think so it is :). So are you a competitive programmer? "],
        typeSpeed: 0
      });
  });
}


function typeit4(){
  $(function(){
      $("#quest6").typed({
        strings: ["Cool, i like competitive programming too. So, what's your handle?  I go with 'dracowane'."],
        typeSpeed: 0
      });
  });
}


function typeit44(){
  $(function(){
      $("#quest6").typed({
        strings: ["So , in which stream is your interest is in? I really like to know :)"],
        typeSpeed: 0
      });
  });
}

function typeit5(){
  $(function(){
      $("#quest8").typed({
        strings: ["Wow, " + document.getElementById("inname").value + " is a nice handle. Now, we'll redirect to our main page. Thanks for the information. You can find all details at my homepage."],
        typeSpeed: 0
      });
  });
}

function typeit55(){
  $(function(){
      $("#quest8").typed({
        strings: ["Wow, " + document.getElementById("inname").value + " is a nice field to work in. Now, we'll redirect to our main page. Thanks for the information. You can find all details at my homepage."],
        typeSpeed: 0
      });
  });
}

</script>
</head>
<body style="background-color:161616">
<script type="text/javascript">
  function blink() {
    var blinks = document.getElementsByTagName('blink');
    for (var i = blinks.length - 1; i >= 0; i--) {
      var s = blinks[i];
      s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
    }
    window.setTimeout(blink, 600);
  }
  if (document.addEventListener) document.addEventListener("DOMContentLoaded", blink, false);
  else if (window.addEventListener) window.addEventListener("load", blink, false);
  else if (window.attachEvent) window.attachEvent("onload", blink);
  else window.onload = blink;

</script>
	<div id="ddata">
     <div id="leftbar"  ><br><h4><blink>A Race Down</blink></h4><br>session: <span id="session"></span><br>user id: <span id="userid"></span><br>duration: <span id='duration'></span><br>IP Address: <?php echo $ip ?><br>Host Name: <?php echo gethostbyaddr($ip)?><br>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT'];?><br><br><br><br><br><br><br>Server: <br>OS: Ubuntu 14.04 x64<br>RAM: 512MB Ram<br>Disk: 20GB SSD Disk<br>CPU Usage: <span id="cpuusage"></span>


                <br>Memory Usage: <span id="musage"></span><br>Server Addr: <?php echo $_SERVER['SERVER_ADDR'] ?><br>Server Name: <?php echo $_SERVER['SERVER_NAME']?><br>
     </div>
	   <div id="middle" >
		      <div id="info">
      			<div id="quest1" class="quest1">></div>
      			<div id="quest2" class="quest2">><input type="text" id="iname" class="iname" size="10"></input></div>
      			<div id="quest3" class="quest3">></div>
      			<div id="quest4" class="quest4">></div>
            <div id="quest5" class="quest5">>
              <input type="submit" id="coder yes" class="mainbutton" value="Yes" onclick="coderyes()">
              <input type="submit" id="coder no" class="mainbutton" value="No" onclick="coderno()">
            </div>
            <div id="quest6" class="quest6">>
            </div>
            <div id="quest7" class="quest7" style="visibility:hidden">><input type="text" id="inname" class="iname" size="10"></input></div>
      		</div>	
          <div id ="quest8" class="quest8" style="visibility:hidden">></div>
	   </div>
	   <div id="rightbar">

      <div id="chartContainer" style="height: 300px; width:100%;">
  </div>
  <script type="text/javascript" src="canvasjs.min.js"></script>
    <script type="text/javascript">
  window.onload = function () {

    var dps = []; // dataPoints

    var chart = new CanvasJS.Chart("chartContainer",{
      backgroundColor: "#161616",

      title :{
        text: "Live Data"
      },      
      data: [{
        type: "line",
        dataPoints: dps 
      }]
    });

    var xVal = 0;
    var yVal = 100; 
    var updateInterval = 3000;
    var dataLength = 500; // number of dataPoints visible at any point

    var updateChart = function (count) {
      count = count || 1;
      // count is number of times loop runs to generate random dataPoints.
      
      for (var j = 0; j < count; j++) { 
        yVal = yVal +  Math.round(5 + Math.random() *(-5-5));
        dps.push({
          x: xVal,
          y: yVal
        });
        xVal++;
      };
      if (dps.length > dataLength)
      {
        dps.shift();        
      }
      
      chart.render();   

    };

    // generates first set of dataPoints
    updateChart(dataLength); 

    // update chart after specified time. 
    setInterval(function(){updateChart()}, updateInterval); 

  }
  </script>
    </div>
  </div>
  <div id="footer" >
     <span style="padding-left:10%">Copyright &copy; <script type="text/javascript">var d = new Date();
   var year = d.getFullYear(); document.write(year);</script> - Made with &hearts; by Kashish Mittal. All Rights Reserved. Contact me [at]</span> <span class="contactme" id="contactme"></span> 
  </div>

<script type="text/javascript">
var ff = 0;
function coderyes()
{
 $( "#info span:nth-child(7)" ).css( "display", "none" );
        $("#quest4").css("display","block");
document.getElementById("quest3").style.display= 'none';
document.getElementById("quest4").style.display= 'none';
document.getElementById("quest5").style.display= 'none';
document.getElementById("quest6").style.visibility = 'visible';
typeit4();
window.setTimeout(coderyes1,3000);
}

function coderno()
{
  ff = 1;
 $( "#info span:nth-child(7)" ).css( "display", "none" );
        $("#quest4").css("display","block");
document.getElementById("quest3").style.display= 'none';
document.getElementById("quest4").style.display= 'none';
document.getElementById("quest5").style.display= 'none';
document.getElementById("quest6").style.visibility = 'visible';
typeit44();
window.setTimeout(coderno1,3000);
}


function coderno1()
{

 $( "#info span:nth-child(10)" ).css( "display", "none" );
        $("#quest6").css("display","block");
        document.getElementById("quest7").value="";
  document.getElementById("quest7").style.visibility='visible';
window.setTimeout(redirectt,11000);
}
function redirectt()
{
   window.location="http://www.dracowane.me/profile";
}

function coderyes1()
{

 $( "#info span:nth-child(10)" ).css( "display", "none" );
        $("#quest6").css("display","block");
  document.getElementById("quest7").style.visibility='visible';
window.setTimeout(redirectt,11000);
}

$("#inname").bind("keypress", {}, keypressInBoxx);

function keypressInBoxx(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) { //Enter keycode                        
        e.preventDefault();
  document.getElementById("quest6").style.display='none';document.getElementById("quest7").style.display='none';
        document.getElementById("quest8").style.visibility='visible';
        if(ff === 0)
        typeit5();
      else
        typeit55();
        $( "#info span:nth-child(13)" ).css( "display", "none" );
        //alert(document.getElementById("iname").value);
      //  document.getElementById("uname").textContent = document.getElementById("iname").value;
  //      coderyes2();
    }
};



var x = new Date();
$("#iname").bind("keypress", {}, keypressInBox);

function keypressInBox(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) { //Enter keycode                        
        e.preventDefault();
        document.getElementById("info").style.padding-top;
  document.getElementById("quest1").style.display='none';document.getElementById("quest2").style.display='none';
        document.getElementById("quest3").style.visibility='visible';
        typeit1()
        $( "#info span:nth-child(5)" ).css( "display", "none" );
        $("#quest3").css("display","block");
        //alert(document.getElementById("iname").value);
      //  document.getElementById("uname").textContent = document.getElementById("iname").value;
        window.setTimeout(ques4,1300);
        window.setTimeout(ques5,8000);

    }
};

function ques5()
{

  $( "#info span:nth-child(7)" ).css( "display", "none" );
        $("#quest4").css("display","block");
document.getElementById("quest5").style.visibility = 'visible';

}
function ques4()
{

        document.getElementById("quest4").style.visibility = 'visible';
        typeit2();
        $( "#info span:nth-child(6)" ).css( "display", "none" );

}
document.getElementById("iname").value = "";
document.getElementById("userid").textContent = makeid();
document.getElementById("session").textContent = makeid();
document.getElementById("middle").style.visibility= 'hidden';
function makeid()
{
    var text = "";
    var possible = "ABC234D3E4FG5HI65J6K7LM78N7OPQ0RST0U0V0W0X0Y0Za0bcdefghijk4534l7mnopqrsty65uvwxyz0123456789";

    for( var i=0; i < 7; i++ )
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

function getcpuusage() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("cpuusage").textContent = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","getusage.php",true);
        xmlhttp.send();
}


function getmusage() {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhtttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhtttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhtttp.onreadystatechange = function() {
            if (xmlhtttp.readyState == 4 && xmlhtttp.status == 200) {
                document.getElementById("musage").textContent = xmlhtttp.responseText;
            }
        }
        xmlhtttp.open("GET","getmusaage.php",true);
        xmlhtttp.send();
}

function duration() {

getcpuusage();
getmusage();
var y = new Date();
var a = y-x;
var hour = Math.floor(a/3600000);
a = a - hour*3600000;
var min = Math.floor(a/60000);
a = a - min*60000;
var sec = Math.floor(a/1000);
a = a- sec*1000;


if(sec >=4 && sec<=5 && min==0 && hour == 0)
{

	document.getElementById("middle").style.visibility = 'visible';
	document.getElementById("quest3").style.visibility = 'hidden';
	document.getElementById("quest4").style.visibility = 'hidden';
  document.getElementById("quest5").style.visibility = 'hidden';
  document.getElementById("quest6").style.visibility = 'hidden';
  typeit();
  $( "#info span:nth-child(2)" ).css( "display", "none" );
}
document.getElementById('duration').textContent= hour+ ":" + min + ":" + sec + ":" + a;    
    window.setTimeout(duration, 600);
  }
  if (document.addEventListener) document.addEventListener("DOMContentLoaded", duration, false);
  else if (window.addEventListener) window.addEventListener("load", duration, false);
  else if (window.attachEvent) window.attachEvent("onload", duration);
  else window.onload = duration;
</script>
</body>
</html>