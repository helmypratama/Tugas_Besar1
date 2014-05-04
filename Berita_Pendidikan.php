<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TUGAS BESAR 1 WEBSERVICE</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="konten">
 <div id="head">
  <div id="logo">
  </div>
   <div id="nav">
    <ul class="nav-link">
       <li id="acitve-nav"><a href="index.php" title="home">home</a></li>
       <li><a href="about.php" title="about">about</a></li>
       <li class="border-right"><a href="contact.php" title="contact">contact</a></li>
    </ul>
   </div>
 </div> 

 <div id="welcome">
  <div id="welcome-text">
<?php
$html = "";
$url = "http://feeds.feedburner.com/go/dikti";
$xml = simplexml_load_file($url);
 
for($i = 0; $i < 5; $i++){
 
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;
 
    $html .= "<a href='$link'><h3>$title</h3></a>";
    $html .= "$description";
    $html .= "<br />$pubDate<hr />";
}
echo $html;
?>
  <a href="index.php">Kembali</a></p>
  </div>
</body>
</html>
