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
  
  // 
  public function haceCompras()
  {
    $listaDeCompras = [
      '0' => 'Anillos',
      '1' => 'Floras',
      '2' => 'Vestido',
    ]
    return $listaDeCompras;
  }
  
  public function elejirLugar($numero)
  {
    $lugars = [
      '1' => 'En el mar',
      '2' => 'En el registro de matrinomio',
      '3' => 'En las montanas',
      '4' => 'En el avion',
      '5' => 'En el barco',
      '6' => 'Al lado del registro de matrinomio',
      '7' => 'En España',
    ];
    
    if (!empty($lugars[$numero])) {
      return $lugars[$numero];
    } else {
      return 'Elije otro numero!';
    }
  }
  
  public function invitarInvitados($numero)
  {
    $invitados = [
      '1' => '40 personas',
      '2' => '60 personas',
      '3' => '80 perosnas', 
    ];
    return $invitados[$numero];
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
echo $boda->countDiasAMiBoda(); // 417 dias, 406 dias  

echo '<pre>';
print_r($boda->haceCompras()); 
echo '</pre>';

// veo la lista de compras
// [
//   '1' => 'Floras',
//   '2' => 'Vestido',
// ]

$boda->elejirLugar(1); // En el mar
$boda->invitarInvitados(1); // 40 personas 

//
//
//
