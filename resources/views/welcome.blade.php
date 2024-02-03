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
            <div class="about__section-feature">
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
        </section>
        {{-- PARA DESPUES --}}
        {{-- <section class="rooms__section">
            <div class="rooms__section-info">
                <p>ROOMS</p>
                <h1>Hand Picked Rooms</h1>
            </div>

            <!-- Slider main container -->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($rooms as $room)
                    <div class="swiper-slide">
                        <div class="rooms__section-amenities">
                            @foreach ($room['amenityImages'] as $image)
                            {!! $image !!}
                            @endforeach
                        </div>
                        <div class="slider-images">
                            <img src="{{$room['randomImage']}}" alt="room image" />
                        </div>
                        <div class="rooms__section-price">
                            <a href="../rooms-grid">
                                <div class="rooms__section-price-info">
                                    <h1>{{$room['room_type']}}</h1>
                                    <p>{{$room['description']}}</p>
                                </div>
                                <div class="rooms__section-price-number">
                                    <span class='{{ $room["discount"] ? "price-low-number" : "price-number-big" }}'>$ {{$room['discountedPrice']}} /night</span>
                                    <!-- <span class='{{ $room["discount"] ? "price-low-text" : "price-high-text" }}'> /night</span> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></div>
                <div class="swiper-button-next"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></div>
            </div>
        </section> --}}
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
            <div class="swiper-container features__section-cards-container">
                <div class="swiper-wrapper cards-container">
                    <div class="swiper-slide card card1">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-1.svg" alt="">
                        </div>
                        <h4>Have High Rating</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">01</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                        </span>
                    </div>

                    <div class="swiper-slide card card2">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-2.png" alt="">
                        </div>
                        <h4>Quiet Hours</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">02</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                        </span>
                    </div>
                    <div class="swiper-slide card card3">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-3.png" alt="">
                        </div>
                        <h4>Best Locations</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">03</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                        </span>
                    </div>
                    <div class="swiper-slide card card4">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-4.png" alt="">
                        </div>
                        <h4>Free Cancellation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">04</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                        </span>
                    </div>
                    <div class="swiper-slide card card5">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-5.png" alt="">
                        </div>
                        <h4>Payment Options</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">05</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                        </span>
                    </div>
                    <div class="swiper-slide card card6">
                        <div class="card-img">
                            <img src="/assets/home/icon_facilities-6.png" alt="">
                        </div>
                        <h4>Special Offers</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna..</p>
                        <span class="card-number">06</span>
                        <span class="card-elipses">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-white.svg" alt="">
                            <img src="/assets/home/elipse-brown.svg" alt="">
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Verificar si el dispositivo es móvil
        console.log(window.matchMedia("(max-width:1024px)").matches);
        if (window.matchMedia("(max-width: 1024px)").matches) {
            var swiper = new Swiper('.swiper-container', {

                slidesPerView: 'auto', // Muestra la cantidad de slides que quepan en el contenedor
                spaceBetween: 20, // Espacio entre las tarjetas
                loop: true, // Activa el bucle infinito
                // Más opciones de configuración según tus necesidades
                centeredSlides: true,
            });
        }
    });
</script>
