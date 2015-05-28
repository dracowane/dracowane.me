<?php
$ip=$_SERVER['REMOTE_ADDR'];
?>
<html>
<head>
<title>A Race Down</title>
<style type="text/css">
#leftbar {
color:E6E6E6;
font-family:Courier;
width:25%;
float:left;
}
#middle{
color:#E6E6E6;
font-family:Courier;
width:50%;
float: left;
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

#iname
{

  color:#E6E6E6;
font-family:Courier;  
}

#rightbar
{
color:#E6E6E6;
font-family:Courier;
float:right;
width:25%;

}

#info
{

	padding-top: 40%;
}
 
#iname {

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

function typeit(){
  $(function(){
      $("#quest1").typed({
        strings: ["Hey!, My name is kashish , Welcome to my website!, What is your name? "],
        typeSpeed: 0
      });
  });

}

function typeit1(){
  $(function(){
      $("#quest3").typed({
        strings: ["Hello " +  document.getElementById("iname").value + ", I hope You are fine :D "],
        typeSpeed: 0
      });
  });
}


function typeit2(){
  $(function(){
      $("#quest4").typed({
        strings: ["So , Don't you think weather is too hazy today? ", "Well, I think so it is :). You'll now be navigated to main page. Thanks for the information.....    "],
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
	<div id="leftbar"  ><br><br><br><blink>A Race Down</blink><br>session: <span id="session"></span><br>user id: <span id="userid"></span><br>duration: <span id='duration'></span><br>IP Address: <?echo $ip ?><br>Host Name: <? echo gethostbyaddr($ip)?><br><br><br>User Agent: <? echo $_SERVER['HTTP_USER_AGENT'];?><br><br><br><br><br>Server: <br>CPU Usage: <span id="cpuusage"></span>


    <br>Memory Usage: <span id="musage"></span><br>Server Addr: <?echo $_SERVER['SERVER_ADDR'] ?><br>Server Name: <?echo $_SERVER['SERVER_NAME']?><br></div>
	<div id="middle" >
		<div id="info">
			<div id="quest1" class="quest1">></div>
			<div id="quest2" class="quest2">><input type="text" id="iname" class="iname" size="10"></input></div>
			<div id="quest3" class="quest3">></div>
			<div id="quest4" class="quest4">></div>
		</div>	
	</div>
	<div id="rightbar">




	</div>
<script type="text/javascript">
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
        window.setTimeout(ques4,2000);
    }
};

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