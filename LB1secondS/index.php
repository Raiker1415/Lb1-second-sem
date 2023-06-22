<!-- "Варіант 7" -->
<!DOCTYPE html>
<html>
<head>
    <title>Використання мережевого трафіку</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Використання мережевого трафіку</h1>
        <h2>Запит за ім'ям</h2>
        <form action="query1.php" method="post">
            <label for="name">Ім'я:</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" value="Виконати запит">
        </form>

        <h2>Запит за датою</h2>
        <form action="query2.php" method="post">
            <label for="start_date">Дата початку (год-хв-сек):</label>
            <input type="text" name="start_date" id="start_date" required>
            <input type="submit" value="Виконати запит">
        </form>
        
        <h2> </h2>
        <form action="query3.php" method="post">
            <input type="submit" value="Всі клієнти">
        </form>
    </div>
</body>
</html>