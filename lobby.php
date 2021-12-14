<!DOCTYPE html>
<html>
<head>
    <title>lobby</title>
<link rel = "icon" href = "https://raw.githubusercontent.com/szyyy-y/szyyy-y/main/iconlogo.png"type = "image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#000;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;

}

/* Images used */
.img1 { background-image: url("https://raw.githubusercontent.com/szyyy-y/szyyy-y/main/Black%20%26%20Blue%20Futuristic%20Technology%20Logo.gif"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 90px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 550px;
  padding: 5px;
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.bg-text span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.bg-text span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.bg-text:hover span {
  padding-right: 25px;
}

.bg-text:hover span:after {
  opacity: 1;
  right: 0;
}
@-webkit-keyframes Font {
    0% {color: crimson;}
    20% {color: #FAEBD7;}
    40% {color: goldenrod;}
    60% {color: #00FA9A;}
    80% {color: #DCDCDC;}
    100% {color: #FFF5EE;}
}
@media screen and (orientation: portrait) {
  .bg-text {
    font-size: 60px;
    width: 355px;
    -webkit-animation:Font 3s infinite alternate;
  }
}

.datetime{
  z-index:3;
  color: #fff;
  background: #10101E;
  font-family: "Segoe UI", sans-serif;
  width: 350px;
  padding: 15px 10px;
  border: 3px solid #2E94E3;
  border-radius: 5px;
  -webkit-box-reflect: below 1px linear-gradient(transparent, rgba(255, 255, 255, 0.1));
  transition: 0.5s;
  transition-property: background, box-shadow;
}

.datetime:hover{
  background: #2E94E3;
  box-shadow: 0 0 30px #2E94E3;
}

.date{
  font-size: 20px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}

.time{
  font-size: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.time span:not(:last-child){
  position: relative;
  margin: 0 6px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}

.time span:last-child{
  background: #2E94E3;
  font-size: 30px;
  font-weight: 600;
  text-transform: uppercase;
  margin-top: 10px;
  padding: 0 5px;
  border-radius: 3px;
}
</style>
</head>
<body onload="initClock()">
    <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->
    <div class="bg-image img1"></div>
    <a class="bg-text" href="./newly.php" class="button"><span>EXPLORE&#160;</span></a>
    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear()+78,
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";
		  
          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>

</body>
</html>