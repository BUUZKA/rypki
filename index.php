

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
<header>
<h1> Portal dla Wędkarzy</h1>
</header>
<div id="lewy">
<h2> Ryby drapiezne naszych wod</h2>
<ul>
<?php
        $db = new mysqli('localhost','root','','wedkowanie');
        $sql = $sql = "SELECT nazwa, wystepowanie FROM ryby where   styl_zycia = 1";
        $wynik = $db->query($sql);
        while($wiersz = $wynik->fetch_assoc()) {
            $nazwa = $wiersz['nazwa'];
            $wystepowanie = $wiersz['wystepowanie'];
            echo "<li>$nazwa,wystepowanie: $wystepowanie </li>";
        }

    $db->close();

?>
</div>
<div id="prawy">
<img src="ryba1.jpg" alt="Sum">
<a href="kwerendy.txt"> Pobierz kwerendy
</div>
<footer>
<p> Strone wykonał: bombelek</p>

</footer>
    
</body>
</html>

