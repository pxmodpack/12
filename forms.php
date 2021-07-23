<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "";

//Сюда вставляем chat_id
$chat_id = "";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $text = ($_POST['text']);
    $email = ($_POST['email']);
    $url = ($_POST['url']);
    $mesage = ($_POST['mesage']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
         'Имя:' => $text,
        'Телефон:' => $email,
        'Адрес:' => $url,
        'Сообщение:' => $mesage
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

}
 if ($sendToTelegram) {
 echo "<script>";
   echo "alert('Successfully submitted for review!');";
   echo "</script>";
    
 }

    

 
?>
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SKINS-SWAP — New skinchanger for fortnite</title>
     <link rel="stylesheet" href="./css/main.css">
     <link rel="stylesheet" href="./css/fonts.css">
      <link rel="stylesheet" href="./css/media.css" />
 <link rel="shortcut icon" href="./img/favicon.svg" type="image/x-icon">
 
 </head>
 <body>
    <header class="header">
     <div class="wrapper">
        <div class="header_wrapper">
         <div class="header_LOGO">
            <a href="index.html" class="header_LOGO">
            
                <nav class="header_nav">
               
               <ul class="header_list">
                   <li class="header_item_logo">
                   <a href="index" class="header_logo"><img src="img/logo.png">&nbsp;&nbsp; SKINS-SWAP</a>
                   </li>
                    <li class="header_item">
                   <a href="index" class="header_link">HOME</a>
                   </li>
                   <li class="header_item">
                   <a href="partntership" class="header_link">PARTNTERSHIP</a>
                   </li>
                   <li class="header_download1">
                   <form action="https://vk.com/">
                <button type="submit" class="intro_button1"> DOWNLOAD
                    </button> </form>
                   </li>
                   
                    </ul>
                </nav>
            </a>
            </div></div>
        </div>
     </header>
        <main class="main">
            
        <section class="partntership">
            <div class="wrapper">
               
               <div class="do">
                   
                   <form onclick="javascript:history.back(); return false;">
                       <h6><img src="img/backK.png">&nbsp;&nbsp;Go back</h6></form>
            <h2 class=partnterships>Filling form
</h2>
                </div> 
                
            <form class="contact_form" action="#" method="post" name="contact_form">
    <ul>
        <li>
            
        </li>
        <li>
            
            <input type="text"  name="text" placeholder="Your Name" required />
        </li>
        <li>
            
            <input type="email" name="email" placeholder="Email adress" required />

        </li>
        <li>
           
            <input type="url" name="url" placeholder="Link on YouTube video" required pattern="(http|https)://.+"/>
            
        </li>
        <li>
            <div class="contact_form2">
                <textarea type="mesage" class="contact_form2" name="mesage" placeholder="Tell us about your channel: the number of subscribers, the total number of views on the channel"></textarea></div>
        </li>
        <li> <form class="form" method="post" action="$sendToTelegram">
            
            <button type="hidden" id="rer" name="act" value="order"class="submit" type="submit" onclick="myFunction()"><img src="img/rightt.png" class="btn_icon">	&nbsp;	&nbsp send a request form</button>
            
            
        </li>
    </ul>
</form>
            
            </section></div></div>
        </main>
         <section class="podval2">
        
        <div class="wrap">
            <hr class="hr-line">
            <div class="wrapp">
            <h6>© All rights reserved SKINS-SWAPP, 2021</h6>
                <h7>·  Privacy policy   &#160;&#160;&#160;  ·  Terms of service</h7>
            </div>
            </div>
        </section>
               
 </body>
</html>