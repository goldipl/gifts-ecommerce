<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GIFTS24 - Koszyk - Płatność</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/common/topbar.php"; ?> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
        <main id="main-wrapper">
            <div class="cart_container step_three">
                <div class="cart-steps">
                    <div class="cart-steps-slot">
                    <span>Twój koszyk</span>
                    </div>
                    <div class="cart-steps-divider">
                    <img src="./assets/icons/cart/steps-grey-chevron-right.svg" alt="chevron" width="8" height="18">
                    </div>
                    <div class="cart-steps-slot">
                    <span>Adres dostawy</span>
                    </div>
                    <div class="cart-steps-divider">
                    <img src="./assets/icons/cart/steps-grey-chevron-right.svg" alt="chevron" width="8" height="18">
                    </div>
                    <div class="cart-steps-slot active">
                    <span>Płatność</span>
                    </div>
                </div>
                <?php include "./components/cart/cart_step_three_content.php"; ?> 
            </div>
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>