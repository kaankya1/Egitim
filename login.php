<!DOCTYPE html>
<html>
<head>
    <title>Login Sayfası</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: center;
            margin: center;
        }
        
        .login-form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Giriş Yap</h2>
        <form method="POST" action="login.php">
            <label for="tcno">TC no:</label>
            <input type="text" id="tcno" name="tcno" required><br><br>
            <input type="submit" value="Giriş">
        </form>
    </div>
</body>
</html>
