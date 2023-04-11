<?php
/**
 * Author: Alexander Kuziv
 * E-mail: makklays@gmail.com
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
}

// 
$boda = new MiBoda('Alexander', 'Maria');
//$boda->fecha('02-06-2024');

