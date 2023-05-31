
<!DOCTYPE html>

<head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    


  </head>
  <body>
  <div>
    <header>Home</header>
 
    <h1>Vyhledání</h1>
    <form  method="GET">
<input name ="search" type="text" placeholder="Jmeno, Přijmení..... ">
<input type="submit" value="Odeslat">
<a href="home.php">Zobrazit vše</a>
<a href="../about.html">Konec</a>


</form>

<br><br>

<a href="vlozeni.php">Vlozeni brigadnika</a>

     
<?php

$server="sql6.webzdarma.cz";
$uzivatel="ludvablackwz1417";
$heslo="Pacina72&Ludek";

$databaze="ludvablackwz1417";
$connection=new mysqli($server,$uzivatel,$heslo,$databaze); 



$query ="SELECT * FROM brigadnici";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("dotaz do databaze selhal");
}

if(isset($_GET["search"])){

  $_GET["search"]=$connection->real_escape_string($_GET["search"]);
  $result="WHERE jmeno like '%{$_GET["search"]}%' or prijmeni like '%{$_GET["search"]}%' or datum_narozeni like '%{$_GET["search"]}%' ";}
else {$result="";}


$dotaz=$connection->prepare("SELECT jmeno, prijmeni, datum_narozeni, datum_prace, pocet_hodin from brigadnici $result;");
$dotaz->bind_result($jmeno, $prijmeni,$datum_narozeni,$datum_prace,$pocet_hodin );
$dotaz->execute();



echo "<br>";
echo "  <h1>Seznam Brigádníků</h1>";
  echo "<table>";
echo "<thead><tr><th>Jmeno</th><th>Příjmení</th><th>Datum Narození</th><th>Datum práce</th><th>Počet hodin</th></tr><thead>\n";
while($dotaz->fetch()){
 


  echo "<tbody><tr><td>$jmeno</td><td>$prijmeni</td><td>$datum_narozeni</td><td>$datum_prace</td><td>$pocet_hodin</td><td>
</td></tr></tbody>\n";

}    

echo "</table>";

?>

</body>

</html>
     







  