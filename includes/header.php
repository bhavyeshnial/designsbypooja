<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative Design By Pooja</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
     <!-- <link rel="stylesheet" href="/designsbypooja/assets/css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
</head>

<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header-inner">
                <!-- LOGO START -->
                <div class="logo">
                    <button type="button" class="menu-btn" aria-label="Open Menu" aria-expanded="false"
                        aria-controls="mobile-menu">
                        <i class="fa-solid fa-bars-staggered" aria-hidden="true"></i>
                    </button>

                    <a href="<?= BASE_URL ?>" aria-label="Creative Design By Pooja Home">
                        <img src="<?= BASE_URL ?>assets/img/creativedesignsbypooja.png" alt="Creative Design By Pooja Logo"
                            loading="eager" fetchpriority="high" />
                    </a>
                </div>
                <!-- LOGO END -->
                <!-- NAV START -->
                <nav id="navbar" aria-label="Main Navigation">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="<?= BASE_URL ?>" class="nav-link" aria-current="page">
                                <i class="fa-solid fa-house" aria-hidden="true"></i>
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#about-us" class="nav-link">
                                <i class="fa-solid fa-user" aria-hidden="true"></i>
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#services" class="nav-link">
                                <i class="fa-solid fa-gear" aria-hidden="true"></i>
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">
                                <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                                Portfolio
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact-us" class="nav-link">
                                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                                <a href="https://api.whatsapp.com/send?phone=919004630046&text=Logo" class="nav-cta nav-link" aria-label="Get a Design">
                                <i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i>
                                Get a Design
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- NAV END -->
                <!-- HEADER BTN START -->
                <a href="https://api.whatsapp.com/send?phone=919004630046&text=Logo" class="header-btn" aria-label="Get a Design">
                    <i class="fa-solid fa-arrow-right-from-bracket" aria-hidden="true"></i>
                    Get a Design
                </a>
                <!-- HEADER BTN END -->
            </div>
        </div>
    </header>
