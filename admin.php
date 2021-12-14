<?php
 
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    $logout_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span><span class='left-info'>User <b class='user-name-left'>". $_SESSION['name'] ."</b> has left</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: index.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
}

?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel = "icon" href = "https://raw.githubusercontent.com/szyyy-y/szyyy-y/main/iconlogo.png"type = "image/x-icon">
        <meta charset="utf-8" />
 
        <title>Chat Application</title>
        <meta name="description" content="Tuts+ Chat Application" />
        <link rel="stylesheet" href="stylechat.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
            </div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <label for="userc">choose user:</label>
                <select name="userc" id="userc">

                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>

               </select>
                <input type="submit">
            </form>
              
 
            <div id="chatbox">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $_SESSION['name'] =$_REQUEST["userc"];
            }
            $uc=$_SESSION['name'];
            if(file_exists($uc."log.html") && filesize($uc."log.html") > 0){
                $contents = file_get_contents($uc."log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
                <input name="warning" type="submit" id="warning" value="warning" />
                <input name="dl" type="submit" id="delete" value="clear" />
            </form>

        </div>
        <form name="message" action="admit.php" method="POST">
              <label for="name">admituser:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="deny.php" method="POST">
              <label for="user_name">denyuser:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="admitac1.php" method="POST">
              <label for="name">admitac1:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="denyac1.php" method="POST">
              <label for="name">denyac1:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="admitac2.php" method="POST">
              <label for="name">admitac2:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="denyac2.php" method="POST">
              <label for="name">denyac2:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="admitac3.php" method="POST">
              <label for="name">admitac3:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <form name="message" action="denyac3.php" method="POST">
              <label for="name">denyac3:</label>

               <select name="name" id="name">
                  <option value="patrol1">patrol1</option>
                  <option value="patrol2">patrol2</option>
                  <option value="patrol3">patrol3</option>
                  <option value="patrol4">patrol4</option>
                  <option value="patrol5">patrol5</option>
                  <option value="patrol6">patrol6</option>
                  <option value="patrol7">patrol7</option>
                  <option value="patrol8">patrol8</option>
               </select>
               <button type="submit" onclick="">finish</button>
        </form>
        <body> 
	<div> 
		<a href="./upload">Click here to open the folder 
		</a> 
	</div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    $.post("adminpost.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                });
                
                $("#warning").click(function () {
                    $.post("warning.php");
                    return false;
                });
                
                $("#delete").click(function () {
                    $.post("delete.php");
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
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to end the session?");
                    if(exit==true){window.location = 'admin.php?logout=true';}
                });
            });
        </script>
    </body>
</html>