<?php
require 'config.php';

$fields = ['name', 'email', 'age', 'comment'];
$data = [];

foreach ($fields as $f) {
    $data[$f] = isset($_POST[$f]) && $_POST[$f] !== '' ? $_POST[$f] : null;
}

$sql = "INSERT INTO submissions (name, email, age, comment)
        VALUES (:name, :email, :age, :comment)";
$stmt = $pdo->prepare($sql);
$stmt->execute($data);

echo "<p>✅ Данните са успешно записани в базата!</p>";
echo '<a href="index.php">Назад</a>';
?>
