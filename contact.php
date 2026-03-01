<?php
require 'header.php';
?>

<h2>Форма обратной связи</h2>

<!-- Задание 3 и 4: Форма отправляется методом POST на result.php -->
<form method="post" action="result.php">
    <label>Имя:</label><br>
    <input type="text" name="name" required><br><br>
    
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    
    <label>Сообщение:</label><br>
    <textarea name="message" rows="5" cols="30" required></textarea><br><br>
    
    <button type="submit">Отправить</button>
</form>

<?php
require 'footer.php';
?>