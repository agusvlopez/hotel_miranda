<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') :: Hotel Miranda</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= url('css/style.css') ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="menu">
            <a href="#">
                <div class="menu__icon" id="menuIcon"></div>
            </a>
            <a href="./" class="menu__logo">
                <div class="menu__logo_section">
                    <div class="menu__logo_section-H"><span>H</span></div>
                    <div class="menu__logo_section-name"><span class="menu__logo_section-name_hotel">Hotel</span>
                        Miranda</div>
                </div>
            </a>
            <nav class="menu__items" id="menuItems">
                <ul class="menu__items-list">
                    <li>About us</li>
                    <li><a href="/rooms-grid">Rooms</a></li>
                    <li>Offers</li>
                    <li>Contact</li>
                </ul>
            </nav>
            <div class="icons-section">
                <a href="/login" class="icons-section__user-section"><span class="icons-section__user-icon"
                        aria-label="My profile"></span></a>
                <a href="#" class="icons-section__search-section"><span class="icons-section__search-icon"
                        aria-label="Search"></span></a>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            @if (\Session::has('status.message'))
                <div class="alert alert-success">{!! \Session::get('status.message') !!}</div>
            @elseif (\Session::has('danger.message'))
                <div class="alert alert-danger">{!! \Session::get('danger.message') !!}</div>
            @endif
        </div>
        @yield('content')

    </main>

    <footer class="footer">
        <section class="footer__sections">
            <section class="footer__section-1">
                <div class="footer__logo">
                    <img src={{ asset('assets/logo-footer.svg') }} alt="">
                </div>
                <div class="footer__text">
                    Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris
                    nisi.
                </div>
                <div class="footer__socials">
                    <img src="./assets/socials-footer.svg" alt="">
                </div>
            </section>
            <div class="footer__services">
                <h2>Services.</h2>
                <div class="footer__services-list">
                    <ul>
                        <li>+ Resturent & Bar</li>
                        <li>+ Swimming Pool</li>
                        <li>+ Wellness & Spa</li>
                        <li>+ Restaurant</li>
                        <li>+ Conference Room</li>
                        <li>+ Coctail Party House</li>
                    </ul>
                    <ul>
                        <li>+ Gaming Zone </li>
                        <li>+ Marrige Party</li>
                        <li>+ Party Planning</li>
                        <li>+ Tour Consultancy</li>
                    </ul>
                </div>
            </div>
            <div class="footer__contact">
                <h2>Contact Us.</h2>
                <div class="footer__contact_list">
                    <img src="./assets/phone_icon-footer.svg" alt="">
                    <div class="footer__contact_list-content">
                        <h3>Phone Number</h3>
                        <span>+987 876 765 76 577</span>
                    </div>
                </div>
                <div class="footer__contact_list">
                    <img src="./assets/message_icon-footer.svg" alt="">
                    <div class="footer__contact_list-content">
                        <h3>Phone Number</h3>
                        <span>+987 876 765 76 577</span>
                    </div>
                </div>
                <div class="footer__contact_list">
                    <img src="./assets/location_icon-footer.svg" alt="">
                    <div class="footer__contact_list-content">
                        <h3>Phone Number</h3>
                        <span>+987 876 765 76 577</span>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer__copyright">
            <p class="footer__copyright-by">Copyright By@Example - 2024</p>
            <p class="footer__copyright-terms">Terms of use | Privacy Environmental Policy</p>
        </div>
    </footer>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuIcon = document.getElementById('menuIcon');
        const menuItems = document.getElementById('menuItems');

        menuIcon.addEventListener('click', function() {
            menuItems.classList.toggle('show');
            menuIcon.classList.toggle('close');
        });
    });
</script>
