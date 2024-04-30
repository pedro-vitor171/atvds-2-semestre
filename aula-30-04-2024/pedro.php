<?php 

echo "<br>";
echo "<br>";
echo "exercicio 1:";

echo "<br>";
echo "<br>";

$var = array(2, 5, 7, 9, 11);
echo "[for]: ";
for($a=0; $a<count($var); $a++) {
echo "$var[$a] ";
}

echo "<br>";
echo "<br>";
echo "exercicio 2:";

echo "<br>";
echo "<br>";

$var1 = array("antonio", "joão", "zeca",);
echo "[for]: ";
for($a=0; $a<count($var1); $a++) {
echo "$var1[$a] ";
}

echo "<br>";
echo "<br>";
echo "exercicio 3:";

echo "<br>";
echo "<br>";

$var2 = array("windows", 10, 2024, "v1.2021");
echo "[for]: ";
for($a=0; $a<count($var2); $a++) {
echo "$var2[$a] ";
}


echo "<br>";
echo "<br>";
echo "exercicio 4:";

echo "<br>";
echo "<br>";

$var3 = array ("italo" => 30, "hubert" => 25, "luna" => 18);

echo "nome é italo sua idade: $var3[italo]";
echo "<br>";
echo "nome é hubert sua idade: $var3[hubert]";
echo "<br>";
echo "nome é luna sua idade: $var3[luna]";

echo "<br>";
echo "<br>";
echo "exercicio 5:";

echo "<br>";
echo "<br>";

$num = array (2 => 7, 3 => 8, 9 => 5);

$num[1]=4;

echo "$num[2]";
echo "<br>";
echo "$num[3]";
echo "<br>";
echo "$num[9]";
echo "$num [1]";


?>