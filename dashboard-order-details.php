<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GIFTS24 - Panel Klienta - Szczegóły zamówienia</title>
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
            <div class="dashboard-container container">
                <div class="dashboard-container__left">
                    <aside class="dashboard-menu">
                        <div class="expand-menu">
                            <p><img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8">Rozwiń menu<img src="./assets/icons/common/grey-arrow-down.svg" alt="arrow down icon" width="12" height="8"></p>
                        </div>
                        <div class="menu-links-container">
                            <div class="menu-hello-box">
                                <span>Witaj!</span>
                                <strong>Jan Kowalski</strong>
                            </div>
                            <div class="menu-links-box">
                                <a class="menu-link" href="">
                                    <img src="./assets/icons/dashboard/desktop.svg" alt="ikona" class="menu-link__img">
                                    <span class="menu-link__text">Pulpit</span>
                                </a>
                                <a class="menu-link active" href="">
                                    <img src="./assets/icons/dashboard/orders.svg" alt="ikona" class="menu-link__img">
                                    <span class="menu-link__text">Zamówienia</span>
                                </a>
                                <a class="menu-link" href="">
                                    <img src="./assets/icons/dashboard/your-data.svg" alt="ikona" class="menu-link__img">
                                    <span class="menu-link__text">Twoje Dane</span>
                                </a>
                                <a class="menu-link" href="">
                                    <img src="./assets/icons/dashboard/invoice-data.svg" alt="ikona" class="menu-link__img">
                                    <span class="menu-link__text">Dane do faktury</span>
                                </a>
                                <a class="menu-link" href="">
                                    <img src="./assets/icons/dashboard/delivery-address.svg" alt="ikona" class="menu-link__img">
                                    <span class="menu-link__text">Adres wysyłki</span>
                                </a>
                                <button class="dashboard-logout-btn">
                                    <svg width="27" height="15" viewBox="0 0 27 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.797883 8.24656C0.798188 8.24688 0.798441 8.24725 0.798798 8.24756L6.10564 13.7319C6.50321 14.1428 7.14625 14.1413 7.54199 13.7284C7.93768 13.3155 7.93615 12.6477 7.53859 12.2368L3.97557 8.55469L25.4844 8.55469C26.0453 8.55469 26.5 8.08251 26.5 7.5C26.5 6.9175 26.0453 6.44532 25.4844 6.44532L3.97562 6.44531L7.53854 2.76319C7.9361 2.35228 7.93763 1.68451 7.54194 1.27165C7.1462 0.858688 6.50311 0.857265 6.10559 1.26806L0.798747 6.75244C0.798442 6.75276 0.798188 6.75312 0.797833 6.75344C0.400063 7.16572 0.401331 7.83566 0.797883 8.24656Z" fill="#253037"/>
                                    </svg>
                                    <span>Wyloguj się</span>
                                </button>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="dashboard-container__right">
                    <?php include "./components/dashboard/dashboard_order_details_content.php"; ?> 
                </div>
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
        <script src="./js/dashboard/dashboard_menu.js"></script>
    </body>
</html>