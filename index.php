<?php
// МУ п.3: Подключение общих частей сайта
require 'header.php';
?>

<h2>Поиск по сайту</h2>

<!-- Задание 6: Форма поиска методом GET -->
<form method="get" action="index.php">
    <input type="text" name="q" placeholder="Введите запрос...">
    <button type="submit">Найти</button>
</form>

<div class="result-box">
    <?php
    // МУ п.6: Получение данных через $_GET
    if (isset($_GET['q'])) {
        $query = $_GET['q'];
        // МУ п.7: Для безопасности используем htmlspecialchars
        echo "<p>Результат поиска по запросу: <strong>" . htmlspecialchars($query) . "</strong></p>";
        echo "<p>Данные передаются через URL (метод GET)</p>";
    } else {
        echo "<p>Введите запрос для поиска</p>";
    }
    ?>
</div>

<?php
require 'footer.php';
?>