<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <h1>Customer Registration</h1>
        <form action="../Login/registerprocess.php" method="POST">
            <div class="form-control">
                <input type="text" placeholder="name" name="name" id="name">
            </div>

            <div class="form-control">
                <input type="email" placeholder="email" name="email" id="email">
            </div>

            <div class="form-control">
                <input type="password" placeholder="password" name="password" id="password">
            </div>

            <div class="form-control">
                <input type="text" placeholder="country" name="country" id="country">
            </div>

            <div class="form-control">
                <input type="text" placeholder="city" name="city" id="city">
            </div>

            <div class="form-control">
                <input type="tel" placeholder="contact" name="contact" id="contact">
            </div>

            <div class="form-control">
                <button class="btn" type="submit" name="registerCustomer" id="btn">LOGIN</button>
            </div>
            
        </form>
    </div>

    <script src="../JS/validation.js"></script>
</body>
</html>