
<?php

if ($_POST ['inlognaam'] == ""){
	echo "je moet nog een inlognaam invullen!<br>";
	echo "<a href=\"form.html\">Terug naar het formulier</a>";
};

if ($_POST ['wachtwoord'] == ""){
	echo "je moet nog een wachtwoord invullen!<br>";
	echo "<a href=\"form.html\">Terug naar het formulier</a>";
};

if ($_POST ['voornaam'] == ""){
	echo "je moet nog een naam invullen!<br>";
	echo "<a href=\"form.html\">Terug naar het formulier</a>";
};

if ($_POST ['adres'] == ""){
	echo "je moet nog een adres invullen!<br>";
	echo "<a href=\"form.html\">Terug naar het formulier</a>";
};

if ($_POST ['inlognaam'] == ""){
	echo "je moet nog een email invullen!<br>";
	echo "<a href=\"form.html\">Terug naar het formulier</a>";
};

print_r ($_POST);
?>