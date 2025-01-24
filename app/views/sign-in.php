<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="/assets/css/sign-in.css"> <!-- Nouveau fichier CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section id="signin">
        <div class="content">
            <h1>Sign in</h1>
            <?php if (isset($error)): ?>
                <p class="error"><?= $error ?></p>
            <?php endif; ?>
            <form action="/user/inscription-check" method="post" enctype="multipart/form-data">
                <div class="input-container">
                    <i class="fa fa-user"></i>
                    <label for="first_name">First name</label>
                    <input type="text" name="first_name" id="first_name" required>
                </div>

                <div class="input-container">
                    <i class="fa fa-user"></i>
                    <label for="second_name">Second name</label>
                    <input type="text" name="second_name" id="second_name" required>
                </div>

                <div class="input-container">
                    <i class="fa fa-phone"></i>
                    <label for="num">Phone number</label>
                    <input type="tel" name="num" id="num" required>
                </div>

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

                <div class="input-container">
                    <i class="fa fa-lock"></i>
                    <label for="pwdd">Confirm password</label>
                    <input type="password" name="pwdd" id="pwdd" required>
                </div>

                <button type="submit">Sign in</button>
            </form>
        </div>
    </section>

    <script src="/assets/js/sign-in.js"></script> <!-- Ajout du JS -->
</body>
</html>
