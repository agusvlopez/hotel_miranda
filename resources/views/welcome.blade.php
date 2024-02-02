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
    </div>
@endsection
