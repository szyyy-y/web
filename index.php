<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link rel = "icon" href = "https://raw.githubusercontent.com/szyyy-y/szyyy-y/main/iconlogo.png"type = "image/x-icon">

<link rel="stylesheet" href="style.css">
<style>
    img{
        display:none;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>
<body>
 <div class="login-box">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="user-box">
      <input type="text" name="uname" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <button id="fstbtn" onclick="move()" type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Login
    </button>
    <h3>Please give me your photo before YOU can login or you will see some errors</h3>
    <div id="my_camera"></div>
    <input type="hidden" name="image" class="image-tag">
  </form>
 </div>
<script>
console.log(`%c                                                                            
                                                                            
                                                                            
                               %c FBI WARNING %c                                
                                                                            
                                                                            
%c        Federal Law provides severe civil and criminal penalties for        
        the unauthorized reproduction,distribution, or exhibition of        
         copyrighted motion pictures (Title 17, United States Code,         
        Sections 501 and 508). The Federal Bureau of Investigation          
         investigates allegations of criminal copyright infringement        
                 (Title 17, United States Code, Section 506).               
                                                                            
                     想从这里找答案？Brilliant                                
                                                                            
`,
'background: #000; font-size: 18px; font-family: monospace',
'background: #f33; font-size: 18px; font-family: monospace; color: #eee; text-shadow:0 0 1px #fff',
'background: #000; font-size: 18px; font-family: monospace',
'background: #000; font-size: 18px; font-family: monospace; color: #ddd; text-shadow:0 0 2px #fff'
)

    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }


var i = 0;
function move() {
  take_snapshot()
  var submit = document.getElementById("fstbtn").type = "submit";
}


</script>   
</body>
</html>
