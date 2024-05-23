<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        Name: <input type="text" name="name"> <br>
        E-mail: <input type="text" name="email"> <br>
        password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>

    <form action=readdata.php method="POST">
        Search Data: <input type="text" name="search"> <br>
        <input type="submit" value="Search">
    </form>

    <form action=update1.php method="POST">
        Enter ID: <input type="text" name="id"> <br>
        <input type="submit" value="Edit">
    </form>


</body>
</html>
