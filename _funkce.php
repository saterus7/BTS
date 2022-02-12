<?php

echo"<style>BODY {FONT-SIZE: 20px;}</style>";

$str=0;
$par=0;
$id =0; // ID v ramci paragrafu

$pocet = 0; // pocet zaznamu

$sp = new PDO("sqlite:../BoToS.db3");

function vl ($a0, $a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13)
{

$a_4 = str_replace(' ', '_', $a4);
$a_12 = str_replace(' ', '_', $a12);
$a_13 = str_replace(' ', '_', $a13);

$a_4  = $a4;
$a_12 = $a12;
$a_13 = $a13;

  global $sp, $pocet;
  try {
    $prikaz = "INSERT INTO tabulka VALUES ('" 
      .$a0 ."', '" .$a1 ."', '" .$a2 ."', '"
      .$a3 ."', '" .$a_4 ."', '" .$a5 ."', '"
      .$a6 ."', '" .$a7 ."', '" .$a8 ."', '"
      .$a9 ."', '" .$a10 ."', '" .$a11 ."', '"
     .$a_12 ."', '" .$a_13 ."')"; 
    $sp->exec($prikaz);
    $pocet++;
  } catch(PDOException $e) {
    echo $e->getMessage(); } 
//echo"$prikaz <br>";
}

function konec($s)
{
  global $sp, $pocet;

  $sp = null;
  echo ("<HR>Spojení uzevřeno.<P>"); 
  echo ("Vloženo záznamů: ".$pocet."<P>"); 
}

$str = 0; // stranka
$por = 0; // poradi hesla na strance
$zaz = 0; // poradi zaznamu v hesle


function hes($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $por++;
  $b2 = $por;
  $zaz = 1;
  $b3 = 1;
  vl($b1,$b2,$b3,'**',$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9, $a10);
  //echo ("<br>** $b1 $b2 $b3 $a1");
}
function poh($a1,$a2,$a3,$a4,$a5,$a6)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3,'%%','','',$a1,$a2,$a3,$a4,$a5,$a6,'','');
  //echo ("<br>## $b1 $b2 $b3 $a1");
}

function fr1($a1,$a2,$a3,$a4)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3,'••',$a1,'','','','',$a2,$a3,$a4,'','');
  //echo ("<br>•• $b1 $b2 $b3 $a1");
}
function fr2($a1,$a2,$a3,$a4)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3,'°°',$a1,'','','','',$a2,$a3,$a4,'','');
  //echo ("<br>°° $b1 $b2 $b3 $a1");
}
function fr3($a1,$a2,$a3)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3,'||','','','','','',$a1,$a2,$a3,'','');
  //echo ("<br>|| $b1 $b2 $b3 $a1");
}
function fr4($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3,'@@',$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,'','');
  //echo ("<br>@@ $b1 $b2 $b3 $a1");
}
function poz($a1)
{ 
  global $sp, $str, $por, $zaz;
  $b1 = $str;
  $b2 = $por;
  $zaz++;
  $b3 = $zaz;
  vl($b1,$b2,$b3+1000,'!!',$a1,'','','','','','','','','');
  //echo ("<br>!! $b1 $b2 $b3 $a1");
}


function str($a1)
{ 
  global $str, $por;
  //echo ("<hr>STR <b>$a1</b>");
  echo (".");
  $str = $a1;
  $por = 0;
}

echo ("<P> Zpracovávám data.</P>");

?>
