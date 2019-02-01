<?php

use Symfony\Component\Yaml\Yaml;

class KercodeWar {

  public static function weekday($number, $lang='en')
  {
    if ($lang !== 'fr') { $lang = 'en'; }
    $content = Yaml::parse(file_get_contents("locales/{$lang}.yml"));

    if ($number >= 1 && $number <= 7) {
      return $content['weekdays']['days'][$number - 1];
    } else {
      return $content['weekdays']['error'];
    }
  }

  public static function isWeekend($number) {
    return ('Sunday' === self::weekday($number)) || ('Saturday' === self::weekday($number)) ? true : false;
  }
}