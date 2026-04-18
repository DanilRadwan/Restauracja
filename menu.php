<?php include 'db.php'; include 'index.php'; ?>

<div class="content">
<h2>Menu</h2>

<?php
$sql="SELECT * FROM rest_menu";
$res=$conn->query($sql);

echo "<table>";
echo "<tr><th>ID</th><th>Nazwa</th><th>Cena</th><th>Kategoria</th></tr>";

while($row=$res->fetch_assoc()){
echo "<tr>
<td>$row[id_pozycja]</td>
<td>$row[nazwa_pozycji]</td>
<td>$row[cena] zł</td>
<td>$row[kategoria]</td>
</tr>";
}
echo "</table>";
?>
</div>