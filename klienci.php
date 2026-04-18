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
<h2>Klienci</h2>

<?php
$sql="SELECT * FROM rest_klienci";
$res=$conn->query($sql);

echo "<table>";
echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Telefon</th></tr>";

while($row=$res->fetch_assoc()){
echo "<tr>
<td>$row[id_klient]</td>
<td>$row[imie]</td>
<td>$row[nazwisko]</td>
<td>$row[numer_telefonu]</td>
</tr>";
}

echo "</table>";
?>

</div>
</div>

<div class="footer">Autor: Gall Anonim</div>

</body>
</html>