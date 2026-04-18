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
<h2>Najlepszy klient</h2>

<?php
$sql = "
SELECT k.imie, k.nazwisko, SUM(m.cena * z.ilosc) AS suma
FROM rest_zamowienia z
JOIN rest_klienci k ON z.id_klient = k.id_klient
JOIN rest_menu m ON z.id_pozycja = m.id_pozycja
GROUP BY k.id_klient
ORDER BY suma DESC
LIMIT 1
";

$res=$conn->query($sql);
$row=$res->fetch_assoc();

echo "<h3>$row[imie] $row[nazwisko]</h3>";
echo "<p>Łączna kwota zamówień: <b>$row[suma] zł</b></p>";
?>

</div>
</div>

<div class="footer">Autor: Gall Anonim</div>

</body>
</html>