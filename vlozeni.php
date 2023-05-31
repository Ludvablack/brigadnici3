<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vložení</title>
</head>
<body>
<h1>Vložení brigádníka</h1>
<a href="home.php">Home</a>
<br><br>
    <form  action="vlozeni.php" method="GET">
<input name ="jmenob" type="text" placeholder="Jmeno ">
<input name ="prijmenib" type="text" placeholder="Prjmeni ">
<br><br>
Datum narození <input name ="daten" type="date" >
<br><br>
Datum práce <input name ="datep" type="date"  >
<br><br>
<input name ="hodinyb" type="number"  placeholder="Počet hodin ">
<input type="submit" value="odeslat">
<br><br>


</body>
</html>

<?php
if (!empty($_GET))  {
$server="localhost";
$uzivatel="root";
$heslo="";

$databaze="evidence";
$connection=new mysqli($server,$uzivatel,$heslo,$databaze); 


$jmenobb= $_GET["jmenob"];
$prijmenibb= $_GET["prijmenib"];
$datenn= $_GET["daten"];
$datepp= $_GET["datep"];
$hodinybb= $_GET["hodinyb"];



$sql = "INSERT INTO `brigadnici` (`poradove_cislo`, `jmeno`, `prijmeni`, `datum_narozeni`, `datum_prace`, `pocet_hodin`) VALUES (NULL, '$jmenobb', '$prijmenibb', '$datenn', '$datepp', '$hodinybb')";
echo $sql;
if ($connection->query($sql) === TRUE) {
                    
  echo "</br>";
  echo "Brigádník úspěšně uložen!","</br>","</br>";  }
}

                   
            


     

