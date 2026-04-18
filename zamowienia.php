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
<h2>Zamówienia</h2>

<?php
$sql = "
SELECT k.imie, k.nazwisko, z.data_zamowienia,
m.nazwa_pozycji, z.ilosc, (m.cena * z.ilosc) AS cena
FROM rest_zamowienia z
JOIN rest_klienci k ON z.id_klient = k.id_klient
JOIN rest_menu m ON z.id_pozycja = m.id_pozycja
ORDER BY k.nazwisko, k.imie
";

$res=$conn->query($sql);

echo "<table>";
echo "<tr>
<th>Lp</th>
<th>Imię</th>
<th>Nazwisko</th>
<th>Data</th>
<th>Produkt</th>
<th>Ilość</th>
<th>Cena</th>
</tr>";

$i=1;
while($row=$res->fetch_assoc()){
echo "<tr>
<td>$i</td>
<td>$row[imie]</td>
<td>$row[nazwisko]</td>
<td>$row[data_zamowienia]</td>
<td>$row[nazwa_pozycji]</td>
<td>$row[ilosc]</td>
<td>$row[cena] zł</td>
</tr>";
$i++;
}

echo "</table>";
?>

</div>
</div>

<div class="footer">Autor: Gall Anonim</div>

</body>
</html>