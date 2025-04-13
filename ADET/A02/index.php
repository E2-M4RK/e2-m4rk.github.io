<?php
$page = "home";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case "home":
        case "services":
        case "requests":
        case "about":
        case "contact":
            $page = $_GET['page'];
            break;
        default:
            header("Location: ?page=home");
            break;
    }
} else {
    header("Location: ?page=home");
}

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : "light";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barangay E-Service Portal</title>
    <link rel="icon" type="image/x-icon" href="assets/img/barangaylog.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
</head>

<body data-bs-theme="<?php echo $theme ?>">

    <div class="d-flex flex-column min-vh-100">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Barangay E-Service Portal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-flex align-items-center gap-4 ms-auto">
                        <a href="" class="text-white">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a href="" class="text-white">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="" class="text-white">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <button class="btn btn-outline-light btn-sm ms-2" id="themeToggle">
                            <i class="fas <?php echo ($theme === 'dark') ? 'fa-sun' : 'fa-moon'; ?>"></i>
                            <span
                                class="ms-1 d-none d-md-inline"><?php echo ($theme === 'dark') ? 'Light Mode' : 'Dark Mode'; ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start bg-primary text-white" tabindex="-1" id="sidebarMenu"
            aria-labelledby="sidebarMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">Barangay E-Services</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="text-center mb-4">
                    <img src="assets/img/barangaylog.png" alt="Barangay Logo" class="rounded-circle img-fluid"
                        style="width: 100px; height: 100px; object-fit: cover; border: 3px solid #f8f9fa;">
                </div>
                <div class="d-grid gap-3 mb-4">
                    <a href="?page=home"
                        class="btn btn-<?php echo ($page == 'home') ? 'light' : 'outline-light'; ?> py-2">
                        <i class="fas fa-home me-3"></i>Home
                    </a>
                    <a href="?page=services"
                        class="btn btn-<?php echo ($page == 'services') ? 'light' : 'outline-light'; ?> py-2">
                        <i class="fas fa-hands-helping me-3"></i>Services
                    </a>
                    <a href="?page=requests"
                        class="btn btn-<?php echo ($page == 'requests') ? 'light' : 'outline-light'; ?> py-2">
                        <i class="fas fa-file-alt me-3"></i>Request Document
                    </a>
                    <a href="?page=about"
                        class="btn btn-<?php echo ($page == 'about') ? 'light' : 'outline-light'; ?> py-2">
                        <i class="fas fa-info-circle me-3"></i>About
                    </a>
                    <a href="?page=contact"
                        class="btn btn-<?php echo ($page == 'contact') ? 'light' : 'outline-light'; ?> py-2">
                        <i class="fas fa-envelope me-3"></i>Contact
                    </a>
                </div>

                <div class="mt-5 pt-4 border-top border-light">
                    <div class="mb-4">
                        <h5 class="mb-3"><i class="far fa-clock me-2"></i>Office Hours</h5>
                        <p class="mb-0 ms-3">
                            <i class="fas fa-calendar-day me-2"></i>Monday - Friday: 8AM - 5PM<br>
                            <i class="fas fa-calendar-day me-2"></i>Saturday: 8AM - 12PM
                        </p>
                    </div>

                    <div>
                        <h5 class="mb-3"><i class="fas fa-address-card me-2"></i>Contact Info</h5>
                        <p class="mb-0 ms-3">
                            <i class="fas fa-phone me-2"></i>Phone: (02) 8123-4567<br>
                            <i class="fas fa-envelope me-2"></i>Email: barangay@example.com
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid my-3">
            <div class="row g-3">
                <button class="btn btn-primary rounded-circle position-fixed bottom-0 start-0 m-3 d-lg-none"
                    type="button" style="width: 50px; height: 50px; z-index: 1030;" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="col-lg-2 d-none d-lg-block">
                    <div class="card bg-primary text-white" style="min-height: 70vh;">
                        <div class="card-body d-flex flex-column justify-content-between p-2">
                            <div>
                                <div class="text-center mb-3">
                                    <img src="assets/img/barangaylog.png" alt="Barangay Logo"
                                        class="rounded-circle img-fluid"
                                        style="width: 80px; height: 80px; object-fit: cover; border: 3px solid #f8f9fa;">
                                </div>
                                <div class="d-grid gap-3 mb-3">
                                    <a href="?page=home"
                                        class="btn btn-<?php echo ($page == 'home') ? 'light' : 'outline-light'; ?> py-1">
                                        <i class="fas fa-home me-2"></i>Home
                                    </a>
                                    <a href="?page=services"
                                        class="btn btn-<?php echo ($page == 'services') ? 'light' : 'outline-light'; ?> py-1">
                                        <i class="fas fa-hands-helping me-2"></i>Services
                                    </a>
                                    <a href="?page=requests"
                                        class="btn btn-<?php echo ($page == 'requests') ? 'light' : 'outline-light'; ?> py-1">
                                        <i class="fas fa-file-alt me-2"></i>Request Document
                                    </a>
                                    <a href="?page=about"
                                        class="btn btn-<?php echo ($page == 'about') ? 'light' : 'outline-light'; ?> py-1">
                                        <i class="fas fa-info-circle me-2"></i>About
                                    </a>
                                    <a href="?page=contact"
                                        class="btn btn-<?php echo ($page == 'contact') ? 'light' : 'outline-light'; ?> py-1">
                                        <i class="fas fa-envelope me-2"></i>Contact
                                    </a>
                                </div>
                            </div>

                            <div class="pt-4 border-top border-light">
                                <div class="mb-4">
                                    <h6 class="mb-2"><i class="far fa-clock me-2"></i>Office Hours</h6>
                                    <p class="mb-0 ms-3 small">
                                        <i class="fas fa-calendar-day me-1"></i>Monday - Friday: 8AM - 5PM<br>
                                        <i class="fas fa-calendar-day me-1"></i>Saturday: 8AM - 12PM
                                    </p>
                                </div>

                                <div>
                                    <h6 class="mb-3"><i class="fas fa-address-card me-2"></i>Contact Info</h6>
                                    <p class="mb-0 ms-3 small">
                                        <i class="fas fa-phone me-1"></i>Phone: (02) 8123-4567<br>
                                        <i class="fas fa-envelope me-1"></i>Email: barangay@example.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <?php include("shared/" . $page . ".php"); ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="mb-0">Barangay Officials</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <strong>Nani Himpisao</strong><br>
                                <span class="small text-muted">Barangay Captain</span>
                            </div>

                            <div class="mb-3">
                                <strong>Gil boy Naval</strong><br>
                                <span class="small text-muted">Kagawad</span>
                            </div>

                            <div class="mb-3">
                                <strong>Jervis Himpisao</strong><br>
                                <span class="small text-muted">Kagawad</span>
                            </div>

                            <div class="mb-3">
                                <strong>Jimboy Alcabasa</strong><br>
                                <span class="small text-muted">Kagawad</span>
                            </div>

                            <div class="mb-3">
                                <strong>Ariel Bariring</strong><br>
                                <span class="small text-muted">Kagawad</span>
                            </div>

                            <div class="mb-3">
                                <strong>Walang Ginagawa</strong><br>
                                <span class="small text-muted">Sk Chairman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary bg-opacity-75 text-muted py-3 mt-auto">
        <div class="container text-center">
            <p class="mb-0">Sample of Barangay E-Service Portal</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggle = document.getElementById('themeToggle');

            themeToggle.addEventListener('click', function () {
                const currentTheme = document.body.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                document.body.setAttribute('data-bs-theme', newTheme);

                const themeIcon = themeToggle.querySelector('i');
                const themeText = themeToggle.querySelector('span');

                if (newTheme === 'dark') {
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                    themeText.textContent = 'Light Mode';
                } else {
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                    themeText.textContent = 'Dark Mode';
                }

                const expiry = new Date();
                expiry.setDate(expiry.getDate() + 30);
                document.cookie = `theme=${newTheme};expires=${expiry.toUTCString()};path=/`;
            });
        });
    </script>
</body>

</html>