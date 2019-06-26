<?php

// Fix Api Whatsapp on Desktops
// Dev: Jean Livino

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
  header('Location: https://api.whatsapp.com/send?phone=+55(17)98191-5729&text=Preciso de mais insformação');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=+55(17)98191-5729&text=Preciso de mais insformação'</script>";
}

// all others
else {
  header('Location: https://web.whatsapp.com/send?phone=+55(17)98191-5729&text=Preciso de mais insformação');
  //OR
  echo "<script>window.location='https://web.whatsapp.com/send?phone=+55(17)98191-5729&text=Preciso de mais insformação'</script>";
}
?>