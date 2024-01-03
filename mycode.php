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

  // 
  public function __construct($marido, $esposa)
  {
    $this->nombre_marido = $marido;
    $this->nombre_esposa = $esposa;
  }

  //
  public function setFecha($fecha)
  {
    $this->fecha = $fecha;
  }
  
  // 
  public function getFecha()
  {
    return $this->fecha;
  }
  
  // 
  public function haceCompras()
  {
    $listaDeCompras = [
      '0' => 'Anillos', // compré yo 
      '1' => 'Floras', // las rosas
      '2' => 'Vestido', // <----- ¿Tienes unas ideas? Tenemos 380,377,376,375,374,370,369,367,366,365,364,363,362,358,357,356,355,353,352,349,347,346,345,343,342,341,340,336,335,333,332,331,330,328,327,326,325,324,322,321,319,316,314,312,311,310,309,308,304,300,299,298,296,293,292,291,290,280 - the end - 278,277,272,264,262,260,258,257,256,255,254,251,250,249,248,247,244,241,237,234,233,230,229,228,223,222,215,214,213,212,210,208,207,206,205,204,202,201,200,199,194,193,191,188,187,182,181,179,178,177,175,174,173,172,173,170,169,168,166,165,164,163,160,159,157,156,155,154,153,151 días hasta nuestra boda
      '3' => 'Traje', // traje negro
      '4' => 'Musica', // me gusta violín ¿Y tu?
      '5' => '', 
    ]
    return $listaDeCompras;
  }
  
  // 
  public function elejirLugar($numero)
  {
    $lugars = [
      '0' => 'En el casa',
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
  
  // 
  public function invitarInvitados($numero)
  {
    $invitados = [
      '0' => 'solo testigos',
      '1' => '20 personas',
      '2' => '40 personas',
      '3' => '60 perosnas', 
      '4' => '100 personas'
    ];
    return $invitados[$numero];
  }
  
  // 
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
  
  // 
  public function elejirLugarPrimeraNoche($numero)
  {
    $n = [
      '0' => 'En el mar',
      '1' => 'En la casa', 
      '2' => 'Afuera de la casa',
      '3' => 'En Palma de Mallorca', 
      '4' => 'En Europa',  
      '5' => 'En Alemania',
      '6' => 'En un habitación de el/la hermano/a', 
      '7' => 'En un castillo antiguo',
    ];
    
    return $n[$numero];
  }
  
  // 
  public function lugarPrimeroMes($numero)
  {
    $lugares = [
      '0' => 'En Palma de Mallorca',
      '1' => 'En la casa',
      '2' => 'Afuera de la casa', 
    ];
    
    return $lugares[$numero];
  }
  
  // 
  public function elejirLugarNuestraVacanciones($numero)
  {
    $lugares = [
      '0' => 'En el mar',
      '1' => 'En la casa', 
      '2' => 'Afuera de la casa',
      '3' => 'En Palma de Mallorca', 
      '4' => 'En Europa',  
      '5' => 'En Alemania',
      '6' => 'En un habitación de el/la hermano/a =) es chiste', 
      '7' => 'En un castillo antiguo',
    ];
    
    return $lugares[$numero];
  }
}

// 
$boda = new MiBoda('Alexander', 'Maria');
$boda->setFecha('02-06-2024');
echo $boda->getFecha(); // veo '02-06-2024'

// ¿Cuanto tiempo más?
echo $boda->countDiasAMiBoda(); // 417 dias, 406, 403, 387, 386, 377, 376, 375, 374, 370, 369, 367, 366, 365, 364, 363, 362, 358, 357, 356, 355, 353, 352, 349, 347, 346, 345, 343, 342, 341, 340, 336,335,333,332,331,330,328,327,326,325,324,322,321,319,316,314,312,311,310,309,308,304,300, 299, 298,296,293,292,291,290,280 - the end - 278,277,272,264,262,260,258,257,256,255,254,251,250,249,248,247,244,241,237,234,233,230,229,228,223,222,215,214,213,212,210,208,207,206,205,204,202,201,200,199,194,193,191,188,187,182,181,179,178,177,175,174,173,172,173,170,169,168,166,165,164,163,160,159,157,156,155,154,153 dias  

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
$boda->elejirLugarPrimeraNoche(1); // 
$boda->lugarPrimeroMes(1); // 
//
//
//
