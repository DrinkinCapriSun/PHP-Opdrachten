<?php
function getAge($gebdatum){
  $bday = new DateTime($gebdatum);
  $vndg = new Datetime(date('m.d.y'));
  if ($bday->format("m-d") == $vndg->format("m-d")) {
    echo 'Gefeliciteerd, ';
   } else {
    echo 'Je bent niet jarig maar ';
   }

  $diff = $vndg->diff($bday);
  return 'je bent: '.$diff->y.' jaar oud!';

}
 
?>
<hr>
<div>
  <form>
    <div>
      <label>Geboortedatum: </label>
      <input type="date" name="gebdatum" value="<?php echo (isset($_GET['gebdatum']))?$_GET['gebdatum']:'';?>">
      <input type="submit" value="Bereken Leeftijd">
    </div>
  </form>
  <?php
    if(isset($_GET['gebdatum']) && $_GET['gebdatum']!=''){?>
      <div>
        
        <?php echo getAge($_GET['gebdatum']);?>
      </div>
    <?php }
  ?>
</div>