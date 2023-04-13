<?php
/**
 * Author: Alexander Kuziv
 * E-mail: makklays@gmail.com
 *  Fecha: 12.04.2023
 */

class MiBoda 
{
  protected $nombre_marido;
  protected $nombre_esposa;
  protected $fecha;

  public function __construct($marido, $esposa)
  {
    $this->nombre_marido = $marido;
    $this->nombre_esposa = $esposa;
  }

  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }
  
  public function getFecha()
  {
    return $this->fecha;
  }
  
  public function countDiasAMiBoda()
  {
    $time = strtotime('02-06-2024') - strtotime(date('d-m-Y'));
    $dias = round(($time / (60 * 60 * 24)), 2);
    
    if ($dias > 0) {
      return $dias;
    } else {
      return 0;
    }
  }
}

// 
$boda = new MiBoda('Alexander', 'Maria');
$boda->setFecha('02-06-2024');
echo $boda->getFecha(); // veo '02-06-2024'

// ¿Cuanto tiempo más?
echo $boda->countDiasAMiBoda(); // 417 dias 

// 
//
//
//
