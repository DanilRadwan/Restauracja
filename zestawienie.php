<?php include 'db.php'; ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">🍴 Restauracja</div>

<div class="container">

<div class="menu">
<a href="index.php">Strona główna</a>
<a href="menu.php">Menu</a>
<a href="klienci.php">Klienci</a>
<a href="zamowienia.php">Zamówienia</a>
<a href="zestawienie.php">Kategorie</a>
<a href="najlepszy.php">Najlepszy klient</a>
</div>

<div class="content">
<h2>Zestawienie kategorii</h2>

<?php
$sql = "
SELECT m.kategoria, SUM(z.ilosc) AS suma
FROM rest_zamowienia z
JOIN rest_menu m ON z.id_pozycja = m.id_pozycja
GROUP BY m.kategoria
";

$res=$conn->query($sql);

echo "<table>";
echo "<tr><th>Lp</th><th>Kategoria</th><th>Ilość</th></tr>";

$i=1;
while($row=$res->fetch_assoc()){
echo "<tr>
<td>$i</td>
<td>$row[kategoria]</td>
<td>$row[suma]</td>
</tr>";
$i++;
}

echo "</table>";
?>

</div>
</div>

<div class="footer">Autor: Gall Anonim </div>

</body>
</html>