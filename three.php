<h2>Third Page</h2>
<p>
	This is the third page.
</p>

<p>
POST<br>
<?php

print_r($_POST);

echo "<br>";

echo 'Nimi '.$_POST['firstname'].'<br>';
echo 'SukuNimi '.$_POST['lastname'];

?>

</p>

<p>
GET<br>
<?php

print_r($_GET);

echo "<br>";

echo 'Nimi '.$_GET['firstname'].'<br>';
echo 'SukuNimi '.$_GET['lastname'];

?>

</p>
