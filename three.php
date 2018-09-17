<h2>Third Page</h2>
<p>
	This is the third page.
</p>

<p>
POST<br>
<?php

print_r($_POST);

echo "<br>";

echo 'Nimi '.$_POST['firstname1'].'<br>';
echo 'SukuNimi '.$_POST['lastname1'];

?>

</p>

<p>
GET<br>
<?php

print_r($_GET);

echo "<br>";

echo 'Nimi '.$_GET['firstname2'].'<br>';
echo 'SukuNimi '.$_GET['lastname2'];

?>

</p>
