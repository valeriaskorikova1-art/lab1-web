<?php
$name = $_POST['name'] ?? '';

if ($name === '') {
  echo "<h2>Ви не ввели ім’я!</h2>";
} else {
  echo "<h2>Вітаємо, $name!</h2>";
}
?>
