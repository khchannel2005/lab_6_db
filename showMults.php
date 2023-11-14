<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Country</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Country</h1>


    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM mults");
        // Виконання запиту і отримання результатів
        printf("<h3>Список мультів:</h3>");
        printf("<table><tr><th>ID</th><th>Назва мультиків</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['name']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="#">Звіт Кількість мультиків</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
