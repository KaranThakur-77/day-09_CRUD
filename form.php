<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Add new movies.</h1>
    <form action="create.php" method="get">
    Title:<input type="text" name="title" required><br><br>
    Rating:<input type="number" name="rating" required min="1" max="5"><br><br>
    Description: <textarea name="description" required></textarea><br><br>
    <button  type="submit">ADD</button>
    </form>
</body>
</html>