<?php
/**
 * Author: Alexander Kuziv
 * E-mail: no lo se
 */

class GdiBugi 
{
  // Bug(Баг)-и будут всегда?..
  // Bug - Error - Ошибка 
  protected function ment_na_kuhne() 
  {
    // где сидит?
    return '';
  }
  
  static function alwaysExist($dreamDelete = 'Bug')
  {
    $make = null;
    if ($dreamDelete == 'Bug') {
      $make['director'] = 'kill cat';
    } else if ($dreamDelete == 'Stone') {
      $make['director'] = 'drink coffe'; // only beer       
    } else if ($dreamDelete == 'Mat') {
      $make['director'] = 'fuck ты новости'; // сказал
    } else {
      $make['director'] = 'дышать дочке';
    }
    
    return $make;
  }
  
  static function family($make)
  {
    echo '<pre>';
    print_r($make);
    echo '</pre>';
  }
}

