<?php
require_once 'database.php';

$stmt = $pdo->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>
    <tr>
        <th>First Name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Conact</th>
        <th>Password</th>
        <th>DOB</th>
    </tr>";

foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['f_name'] . "</td>";
    echo "<td>" . $user['l_name'] . "</td>";
    echo "<td>" . $user['email'] . "</td>";
    echo "<td>" . $user['contact'] . "</td>";
    echo "<td>" . $user['password'] . "</td>";
    echo "<td>" . $user['DOB'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>