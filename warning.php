<?php
session_start();
$text_message = <<<EOT
<meta name="viewport" content="width=device-width, initial-scale=1"><style>.alert{padding: 20px; background-color: #f44336; color: white; border-radius: 15px; font-size: 25px;}.closebtn{margin-left: 15px; color: white; font-weight: bold; float: right; font-size: 22px; line-height: 20px; cursor: pointer; transition: 0.3s;}.closebtn:hover{color: black;}</style></head><body><div class="alert"> <strong>Danger!</strong>Indicates a dangerous or potentially negative action.</div><br><a href="default.asp"><img src="https://media2.giphy.com/media/lp3GUtG2waC88/giphy.gif?cid=790b76119338cb3852e570f037c8f11c8266e97f2f3310d8&rid=giphy.gif&ct=g" alt="erno" style="height:142px;display: block;margin-left: auto;margin-right: auto;width: 100%;"></a>
EOT;
file_put_contents($_SESSION['name']."log.html", $text_message, FILE_APPEND | LOCK_EX);
?>