<?php 
session_start();
if(isset($_POST['enter'])){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
}

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="uc.css" />
<link rel = "icon" href = "https://raw.githubusercontent.com/szyyy-y/szyyy-y/main/iconlogo.png"type = "image/x-icon">

<style>
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #66757F;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transition: .9s ease;
}

.container:hover .overlay {
  width: 0%;
}

.text {
  color: white;
  font-size: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 50px;
  text-align: center;
  background: #55ACEE;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 80px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #292F33;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #CCD6DD;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #E1E8ED;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #F7F7F7;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (orientation: portrait) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (orientation: portrait) {
  .navbar a {
    float: none;
    width:100%;
    font-size:50px;
  }
}
#loading {
  color: #411;
  font-size: 60px;
  text-shadow: 0 0 15px #411;
  position: relative;
  top: 50%;
  margin: -30px auto;
  text-align: center;
}

.glow {
  color: #f00;
  text-shadow: 0px 0px 10px #f00;
}

span {
  display: inline-block;
  padding: 0 10px;
}


iframe {   
    width: 100%;
    height:600px;
    padding: 0;
}

@media screen and (max-width: 700px) {
  iframe {   
    width: 100%;
    height: 380px ;
    padding: 0;
  }

}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.icon-container {
  width: 50px;
  height: 50px;
  position: relative;
}

img {
  display:none;
}
.admin{
  height: 100%;
  width: 100%;
  border-radius: 50%; 
  display:block;
}

.status-circle {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background-color: green;
  border: 2px solid white;
  bottom: 0;
  right: 0;
  position: absolute;
}
</style>
</head>
<body>

<div class="header" >
  <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
  <div id="loading"> TOPLAB</div>
  <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
</div>

<div class="navbar">
  <a href="ac1.php">TS</a>
  <a href="ac2.php">TS</a>
  <a href="ac3.php">TS</a>
  <a onclick='logout()' class="right">logout</a>
</div>
<div class="row">
  <div class="side">
    <div class="container">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtS88VUAVeyPhSBnOqDN31FldYkpfvqavvTPgD2k0dQBTycItL7jo1YfLCmBcgAZPPg8w&usqp=CAU" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Welcome</div>
      </div>
    </div>
    <p>1. A robot must never harm a human, or through inaction allow a human to come to harm. 
    2. A robot must always obey the orders of humans except where to do so would conflict with obeying the first law. 
    3. A robot must protect its own existence, except where to do so would conflict with the first or second laws. </p>
    <div class="fakeimg" style="height:60px;"></div><br>
    <div class="fakeimg" style="height:60px;"></div><br>
    <div class="fakeimg" style="height:60px;"></div>
  </div>
  <div class="main">
    <h2>IMFORMATION</h2>
      <h5>hacking progress, Dec 18, 1999</h5>
      <div>
          <iframe src="https://drive.google.com/file/d/1kt3Yc_OQXIH09-PTTKgAPJLDjirZBGF1/preview" width="680" height="385" allow="autoplay" frameborder="0" allowfullscreen></iframe>
      </div>
    <p>..</p>
    <br>
    <h2>Contact</h2>
    <div class='icon-container'>
      <img class='admin' src="https://cdn.pixabay.com/photo/2013/07/13/12/07/avatar-159236_1280.png" />
      <div class='status-circle'>
      </div>
    </div>
    <h5>Admin </h5>
    <div id="chat">
            <div id="chatbox">
            <?php
            $u=$_SESSION['name'];
            if(file_exists($u."log.html") && filesize($u."log.html") > 0){
                $contents = file_get_contents($u."log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
      </div>
    <p>..</p>
  </div>
</div>
<div class="footer">
  <h2>Copyright © 2021 BOP All Rights Reserved</h2>
  <p>designed for OTC 2021</p>
</div>

<script>
    function logout() {
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'admin.php?logout=true';}
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                });
            
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
                    var s = '<?php echo $_SESSION['name']; ?>';
                    $.ajax({
                        url: s+"log.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
 
                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }   
                        }
                    });
                }
 
                setInterval (loadLog, 2500);
 
                
            });
alphabet = new Array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
letter_count = 0;
el = $("#loading");
word = el.html().trim();
finished = false;

el.html("");
for (var i = 0; i < word.length; i++) {
  el.append("<span>"+word.charAt(i)+"</span>");
}

setTimeout(write, 75);
incrementer = setTimeout(inc, 1000);

function write() {
  for (var i = letter_count; i < word.length; i++) {
    var c = Math.floor(Math.random() * 36);
    $("span")[i].innerHTML = alphabet[c];
  }
  if (!finished) {
    setTimeout(write, 75);
  }
}

function inc() {
  $("span")[letter_count].innerHTML = word[letter_count];
  $("span:eq("+letter_count+")").addClass("glow");
  letter_count++;
  if (letter_count >= word.length) {
    finished = true;
    setTimeout(reset, 1500);
  } else {
    setTimeout(inc, 1000);
  }
}

function reset() {
  letter_count = 0;
  finished = false;
  setTimeout(inc, 1000);
  setTimeout(write, 75);
  $("span").removeClass("glow");
}
u=window.location.href
if(u=="https://otc2k21.000webhostapp.com/newly.php?error=access%20denied"){
    setInterval(function(){ window.location.href = "./newly.php"; }, 3000);
}

</script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>