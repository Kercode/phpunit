<?php

require_once('./vendor/autoload.php');
require_once('./src/KercodeWar.php');

if(isset($_POST['number']) && isset($_POST['lang'])) {
  $number = htmlspecialchars($_POST['number']);
  $lang = htmlspecialchars($_POST['lang']);

  echo(KercodeWar::weekday($number, $lang));
}
