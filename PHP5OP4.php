<?php 
  $product = "persoon";
  if ($product == "bananen") {
    echo "Kleur is geel";
    $plaatje = "bananen.JPG";
  } elseif ($product == "appel") {
    echo "Kleur is oranje";
    $plaatje = "appel.JPG";
  } elseif ($product == "persoon") {
    echo "Kleur is oranje";
    $plaatje = "foto1.JPG";
  } elseif ($product == "meloen") {
    echo "Kleur is groen";
    $plaatje = "meloen.JPG";
  } elseif ($product == "sinaasappel") {
    echo "Kleur is oranje";
    $plaatje = "sinaasappel.JPG";
  } elseif ($product == "kersen") {
    echo "Kleur is rood";
    $plaatje = "kersen.JPG";
  }

  ?>
  <img src="<?= $plaatje; ?>"/> 