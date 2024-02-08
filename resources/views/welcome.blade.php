@extends('layouts.main')

@section('content')
    <div class="home">
        <section class="front__section">
            <p>THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1><span>The Perfect</span> Base For You</h1>
            <div class="front__section_buttons">
                <a href="#" class="front__section_buttons-tour">Take a tour</a>
                <a href="#" class="front__section_buttons-more">Learn more</a>
            </div>
        </section>
        <section class="schedule__section">
            <form action="../rooms-grid" method="GET">
                <div class="schedule__section-calendar">
                    <div class="input__container__arrival">
                        <label for="date">Arrival date</label>
                        <input type="date" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"
                            max="{{ date('Y-m-d', strtotime('+1 Year')) }}" name="availdatein"
                            class="input__container__arrival-date-input input-calendar">
                    </div>
                    <div class="input__container__departure">
                        <label for="date-departure">Departure date</label>
                        <input type="date" id="date-departure" value="{{ date('Y-m-d', strtotime('+1 day')) }}"
                            min="{{ date('Y-m-d', strtotime('+1 day')) }}" max="{{ date('Y-m-d', strtotime('+1 Year')) }}"
                            name="availdateout" class="input-calendar">
                    </div>
                </div>
                <div class="schedule__section-button">
                    <button type="submit">CHECK AVAILABILITY</button>
                </div>
            </form>
        </section>
        <section class="about__section">
            <div class="about__section-info">
                <h2>About Us</h2>
                <h3>Discover Our Underground.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                <div class="about__section-info-button">
                    <a href="rooms-grid">BOOK NOW</a>
                </div>
            </div>
            <div class="about__section-features">
                <div class="about__section-feature about__section-strong-team">
                    <img class="about__section-feature-img" src="/assets/home/hotel-view.jpg" alt="Hotel view from above">
                    <div class="about__section-feature-detail-team">
                        <img src="/assets/home/icon_strong-team.svg" alt="">
                        <h4>Strong Team</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="about__section-feature">
                    <img class="about__section-feature-img" src="/assets/home/room-view.jpg"
                        alt="Room view of a pool and a lake and mountains behind">
                    <div class="about__section-feature-detail-room">
                        <img src="/assets/home/icon_luxury-room.svg" alt="">
                        <h4>Luxury Room</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="rooms__section">
            <div class="rooms__section-info">
                <h2>Rooms</h2>
                <h3>Hand Picked Rooms</h3>
            </div>
            <!-- Slider main container -->
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <div class="swiper-slide__amenities">
                                <img src="assets/home/amenties.svg" alt="amenties" />
                            </div>
                            <div class="swiper-slide__images">
                                <img src="{{ asset('assets/' . $room->image) }}" alt="room image" />
                            </div>
                            <div class="swiper-slide__price">
                                <a href="../rooms-grid">
                                    <div class="swiper-slide__price-info">
                                        <h4>{{ $room['room_type'] }}</h4>
                                        <p>{{ $room['description'] }}</p>
                                    </div>
                                    <div class="swiper-slide__price-number">
                                        <span class='{{ $room['discount'] ? 'price-low-number' : 'price-number-big' }}'>$
                                            {{ $room['discountedPrice'] }} <span
                                                class="swiper-slide__price-number-night">/night</span></span>
                                        <span class='{{ $room['discount'] ? 'price-low-text' : 'price-high-text' }}'>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev">
                    <img src="/assets/home/icon-slider_left-arrow.svg" alt="left arrow">
                </div>
                <div class="swiper-button-next">
                    <img src="/assets/home/icon-slider_right-arrow.png" alt="right arrow">
                </div>
            </div>
        </section>
        <section class="video__section">
            <div class="video__section-content">
                <div class="video__section-content-info">
                    <h2>Intro video</h2>
                    <h3>Meet With Our Luxury Place.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat you have to understand this.</p>
                </div>
                <div class="video__section-content-iframe">
                    <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="video__section-button">
                <a href="rooms-grid">Book Now</a>
            </div>
        </section>
        <section class="features__section">
            <div class="features__section-info">
                <h2>Facilities</h2>
                <h3>Core Features</h3>
            </div>
            <div class="features__section-cards-container">
                <div class="cards-container swiper-container">
                    <div class="features__section-wrapper swiper-wrapper">
                        <div class="card card1  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-1.svg" alt="image card 1">
                            </div>
                            <h4>Have High Rating</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">01</span>
                        </div>
                        <div class="card card2  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-2.png" alt="image card 1">
                            </div>
                            <h4>Quiet Hours</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">02</span>
                        </div>
                        <div class="card card3  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-3.png" alt="image card 1">
                            </div>
                            <h4>Best Locations</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">03</span>
                        </div>
                        <div class="card card4  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-4.png" alt="image card 1">
                            </div>
                            <h4>Free Cancellation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">04</span>
                        </div>
                        <div class="card card5  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-5.png" alt="image card 1">
                            </div>
                            <h4>Payment Options</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">05</span>
                        </div>
                        <div class="card card6  swiper-slide">
                            <div class="card-img">
                                <img src="/assets/home/icon_facilities-6.png" alt="image card 1">
                            </div>
                            <h4>Special Offers</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna..</p>
                            <span class="card-number">06</span>
                        </div>
                    </div>
                </div>
                <button class="prev-btn1"><img src="/assets/home/icon-slider_left-arrow.svg" alt="left arrow"></button>
                <button class="next-btn1"><img src="/assets/home/icon-slider_right-arrow.png" alt="right arrow"></button>
            </div>
        </section>
        <section class="food__section">
            <img src="/assets/home/icon_food-section-mobile.png" alt="icon food" class="icon-food-mobile">
            <div class="food__section-info">
                <h2>MENU</h2>
                <h3>Our Foods Menu</h3>
            </div>
            <div class="food__section-cards-container">
                <img src="/assets/home/icon_food-section-desktop.png" class="icon-food-desktop">
                <div class="food__cards-container  swiper-container">
                    <div class="food__section-wrapper swiper-wrapper">
                        <div class="card-food card-food1  swiper-slide">
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_eggs-bacon.jpg"
                                        alt="Breakfast with eggs, bacon, fruits and chickpeas.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Eggs & Bacon</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_coffee.jpg" alt="A cup of coffee.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Tea or Coffee</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_chia-oatmeal.jpg"
                                        alt="Two chia puddings with oats and fruit.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Chia Oatmeal</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-food card-food2  swiper-slide">
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_fruit-parfait.jpg" alt="Fruit parfait with strawberries.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Fruit Parfait</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_marmalade-selection.jpg" alt="Blueberry jam with toast.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Marmalade Selection</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div class="section-food">
                                <div class="card-img-food">
                                    <img src="/assets/home/food_cheese-plate.jpg" alt="Variety of cheeses and wine.">
                                </div>
                                <div class="section-food-info">
                                    <h4>Cheese Plate</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food__cards-container-button">
                    <button class="prev-btn"><img src="/assets/home/icon-slider_left-arrow.svg"
                            alt="left arrow"></button>
                    <button class="next-btn"><img src="/assets/home/icon-slider_right-arrow.png"
                            alt="right arrow"></button>
                </div>
            </div>
            <div class="food__section-slider">
                <div class="food__section-slider-wrapper">
                    <img id="food-img1" src="/assets/home/slider_food-1.jpg" alt="Breakfast with coffee.">
                    <img id="food-img2" src="/assets/home/slider_food-2.jpg"
                        alt="Breakfast with fruit salad, ham and cheese, bread and scrambled eggs.">
                    <img id="food-img3" src="/assets/home/slider_food-3.jpg" alt="Snack with orange juice.">
                </div>
                <div class="food__section-slider-nav">
                    <a href="#food-img1"></a>
                    <a href="#food-img2"></a>
                    <a href="#food-img3"></a>
                </div>
            </div>
        </section>
        <section class="stadistics__section-container">
            <div class="stadistics__section stadistics__section-1">
                <img src="/assets/home/icon_projects.svg" alt="Icon image">
                <div class="stadistics__section-span">
                    <span class="stadistics__section-span-number">84K</span>
                    <span class="stadistics__section-span-symbol">+</span>
                </div>
                <p class="stadistics-category">Projects are Completed</p>
            </div>
            <div class="stadistics__section stadistics__section-2">
                <img src="/assets/home/icon_active-backers.svg" alt="Icon image">
                <div class="stadistics__section-span">
                    <span class="stadistics__section-span-number">10M</span>
                    <span class="stadistics__section-span-symbol">+</span>
                </div>
                <p class="stadistics-category">Active Backers Around World</p>
            </div>
            <div class="stadistics__section stadistics__section-3">
                <img src="/assets/home/icon_categories-served.svg" alt="Icon image">
                <div class="stadistics__section-span">
                    <span class="stadistics__section-span-number">02K</span>
                    <span class="stadistics__section-span-symbol">+</span>
                </div>
                <p class="stadistics-category">Categories Served</p>
            </div>
            <div class="stadistics__section stadistics__section-4">
                <img src="/assets/home/icon_raised-funds.svg" alt="">
                <div class="stadistics__section-span">
                    <span class="stadistics__section-span-number">100M</span>
                    <span class="stadistics__section-span-symbol">+</span>
                </div>
                <p class="stadistics-category">Idea Raised Funds</p>
            </div>
        </section>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.matchMedia("(max-width: 1024px)").matches) {

            var swiperFeatures = new Swiper('.cards-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                centeredSlides: false, // Esta línea centra las tarjetas
                navigation: {
                    nextEl: '.next-btn1',
                    prevEl: '.prev-btn1',
                },
            });

            // Manejar el clic en el botón previo
            document.querySelector('.prev-btn1').addEventListener('click', function() {
                swiperFeatures.slidePrev();
            });

            // Manejar el clic en el botón siguiente
            document.querySelector('.next-btn1').addEventListener('click', function() {
                swiperFeatures.slideNext();
            });


            var swiper = new Swiper('.food__cards-container', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.next-btn',
                    prevEl: '.prev-btn',
                },
            });

            // Manejar el clic en el botón previo
            document.querySelector('.prev-btn').addEventListener('click', function() {
                swiper.slidePrev();
            });

            // Manejar el clic en el botón siguiente
            document.querySelector('.next-btn').addEventListener('click', function() {
                swiper.slideNext();
            });
        }

        if (window.matchMedia("(min-width: 1024px)").matches) {
            // Eliminar la clase swiper-wrapper si existe
            let swiperWrapper = document.querySelector('.food__section-wrapper.swiper-wrapper');
            let swiperContainer = document.querySelector('.food__cards-container.swiper-container');

            let swiperWrapperFeatures = document.querySelector('.features__section-wrapper.swiper-wrapper');
            let swiperContainerFeatures = document.querySelector('.cards-container.swiper-container');

            if (swiperWrapper) {
                swiperWrapper.classList.remove('swiper-wrapper');
                swiperContainer.classList.remove('swiper-container');
            }

            if (swiperWrapperFeatures) {
                swiperWrapperFeatures.classList.remove('swiper-wrapper');
                swiperContainerFeatures.classList.remove('swiper-container');
            }
        }

        // Inicializar Swiper para la sección de habitaciones
        var swiperRooms = new Swiper('.swiper.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Manejar el clic en el botón previo (para la sección de habitaciones)
        document.querySelector('.swiper-button-prev').addEventListener('click', function() {
            swiperRooms.slidePrev();
        });

        // Manejar el clic en el botón siguiente (para la sección de habitaciones)
        document.querySelector('.swiper-button-next').addEventListener('click', function() {
            swiperRooms.slideNext();
        });

    });
</script>
