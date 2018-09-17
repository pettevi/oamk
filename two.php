<h2>Second Page</h2>
<p>
	This is the second page.
</p>

<?php

$nimmari='Heips';
$ika=5;

echo 'Moikkelis ';

echo "ika $ika <br>";
echo $ika;
echo 'Nimmarit '.$nimmari.'<br> juupa juu '.$ika.'<br> ja muuta semmosta';

?>

<p>Taulukko</p>

<?php

$nimet = array('eka','toka','kolmas');

echo 'Nimet olis<br>';

print_r($nimet);

echo '<br> Nimi yks:'.$nimet[0];
echo '<br> Nimi kaks:'.$nimet[1];
echo '<br> Nimi kol:'.$nimet[2];

?>

<?php

$hlo=array(
array("etu"=>'matti', "suku"=>'meikalainen'),
array("etu"=>'liisa', "suku"=>'meikalainen'),
array("etu"=>'matti', "suku"=>'Kukkonen'),
array("etu"=>'liisa', "suku"=>'Kukkonen')
);

?>


<p>Nimet: </p>


<?php print_r($hlo); ?>

<p>Sukunimet: </p>

<?php 

foreach ($hlo as $rivi)
{
	echo $rivi['etu'].' '.$rivi['suku'];
	
}

 ?>



