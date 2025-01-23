<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="/assets/css/log-in.css"> <!-- Fichier CSS dédié -->
    <!-- Lien vers Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section id="login">
        <div class="content">
            <h1>Log in</h1>
            <form action="" method="post">
                <div class="input-container">
                    <i class="fa fa-envelope"></i>
                    <label for="mail">Email address</label>
                    <input type="email" name="mail" id="mail" required>
                </div>

                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" required>
                </div>

                <button type="submit">Log in</button>
            </form>
        </div>
    </section>
</body>
</html>
