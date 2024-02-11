@extends('layouts.main')

@section('title', 'Rooms Grid')

@section('content')

    <section class="rooms__about__section">
        <div class="taketour_section-header-rect"></div>
        <div class="rooms__about__section-general">
            <div class="rooms__about__section-info">
                <p>THE ULTIMATE LUXURY</p>
                <h1>Ultimate Room</h1>
            </div>
            <div class="rooms__about__section-links">
                <a href="./" class="rooms-link-home">Home</a>
                <span>|</span>
                <a href="./rooms-grid" class="rooms-link-about">Rooms</a>
            </div>
        </div>
    </section>
    <section class="rooms__slider__section">
        <div class="rooms-slider-container">
            @foreach ($rooms as $room)
                <div class="rooms__slider">
                    <img src="{{ asset('assets/' . $room->image) }}" alt="room image" />
                    <div class="rooms__slider-amenities">
                        <img src="assets/home/amenties.svg" alt="amenties" />
                    </div>
                    <h3>{{ $room['room_type'] }}</h3>
                    <p>{{ $room['description'] }}</p>
                    <div class="rooms__slider-price">
                        <span class='{{ $room['discount'] ? 'price-low-number' : 'price-number-small' }}'>$
                            {{ $room['discountedPrice'] }} /Night</span>
                        {{-- <form action="../room-detail" method="GET">
                            <input type="hidden" name="roomId" value="{{ $room['id'] }}">
                            <button type="submit">Booking Now</button>
                        </form> --}}
                        <a href="{{ route('room.detail', ['id' => $room->id]) }}" class="link me-4">Booking Now</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="rooms-pagination">
            {{-- <button class="rooms-prev"><img src="/assets/rooms/prev-arrow.png" alt=""></button> --}}
            <div class="rooms-pages">
                {{ $rooms->links() }}
            </div>
            {{-- <button class="rooms-next"><img src="/assets/rooms/next-arrow.png" alt=""></button> --}}
        </div>
    </section>

@endsection
