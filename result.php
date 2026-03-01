<?php
require 'header.php';
?>

<h2>Результат отправки формы</h2>

<div class="result-box">
    <?php
    // МУ п.5: Проверка наличия данных и получение через $_POST
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        // МУ п.7: Экранирование для безопасности
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        echo "<p><strong>Имя:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Сообщение:</strong> $message</p>";
        echo "<p class='note'>Данные переданы методом POST (не видны в URL)</p>";
    } else {
        echo "<p>Ошибка: Данные не были получены</p>";
    }
    ?>
</div>

<p><a href="contact.php">Вернуться к форме</a></p>

<?php
require 'footer.php';
?>