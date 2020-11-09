
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - login</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <img src="public/img/logo-vektam/cropped-logo-2019.png" alt="Vektam logo">
        <h1>Vektam Music</h1>
        <form action="index.php?action=admin" method="post">
            <input type="text" name="login" id="login" placeholder="Login" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>