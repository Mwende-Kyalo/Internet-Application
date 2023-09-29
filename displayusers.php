<?php
require_once 'database.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
    </tr>";

foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . $user['username'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>