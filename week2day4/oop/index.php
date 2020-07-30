<pre>
<?php

require("animal.php");
require("frog.php");
require("ape.php");

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->getLegs(); // 2
echo "<br>";
echo $sheep->getCold_blooded(); // false
echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
echo "<br>";

?>
</pre>
