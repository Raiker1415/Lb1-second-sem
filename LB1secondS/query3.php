<?php
require_once 'db_connection.php';

// Підготовка запиту
$stmt = $pdo->prepare('SELECT DISTINCT name, balance, start, stop, in_traffic, out_traffic FROM client, seanse WHERE id_client = fid_client');

// Виконання запиту
$stmt->execute();

// Отримання результатів
$results = $stmt->fetchAll(PDO::FETCH_NUM);

// Виведення результатів
echo "<table border='1'>";
echo "<thead><tr><th>Ім'я</th><th>Баланс</th><th>Початок сеансу</th><th>Кінець сеансу</th><th>Вхідний трафік</th><th>Вихідний трафік</th></tr></thead>";
echo "<tbody>";
foreach ($results as $row) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</tbody>";
echo "</table>";
?>
