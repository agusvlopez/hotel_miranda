<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ejemplo de creación de una habitación
        DB::table('rooms')->insert([
            [
                'id' => 1,
                'image' => 'rooms/minimal-duplex-room.jpg',
                'room_type' => 'Minimal Duplex Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 385.00,
                'discount' => 00.00,
                'discountedPrice' => 385.00,
            ],
            [
                'id' => 2,
                'image' => 'rooms/comfort-room.jpg',
                'room_type' => 'Comfort Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 325.00,
                'discount' => 10.00,
                'discountedPrice' => 315.00,
            ],
            [
                'id' => 3,
                'image' => 'rooms/privileged-deluxe-room.jpg',
                'room_type' => 'Privileged Deluxe Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 335.00,
                'discount' => 10.00,
                'discountedPrice' => 325.00,
            ],
            [
                'id' => 4,
                'image' => 'rooms/privileged-romance-deluxe.jpg',
                'room_type' => 'Privileged Romance Deluxe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 355.00,
                'discount' => 00.00,
                'discountedPrice' => 355.00,
            ],
            [
                'id' => 5,
                'image' => 'rooms/comfort-room-simple.jpg',
                'room_type' => 'Comfort Room Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 305.00,
                'discount' => 00.00,
                'discountedPrice' => 305.00,
            ],
            [
                'id' => 6,
                'image' => 'rooms/privileged-romance-simple.jpg',
                'room_type' => 'Privileged Romance Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 340.00,
                'discount' => 00.00,
                'discountedPrice' => 340.00,
            ],
            [
                'id' => 7,
                'image' => 'rooms/privileged-family-deluxe-5.jpg',
                'room_type' => 'Privileged Family Deluxe 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 450.00,
                'discount' => 10.00,
                'discountedPrice' => 440.00,
            ],
            [
                'id' => 8,
                'image' => 'rooms/privileged-family-deluxe-6.jpg',
                'room_type' => 'Privileged Family Deluxe 6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 480.00,
                'discount' => 00.00,
                'discountedPrice' => 480.00,
            ],
            [
                'id' => 9,
                'image' => 'rooms/minimal-duplex-room.jpg',
                'room_type' => 'Minimal Duplex Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 385.00,
                'discount' => 00.00,
                'discountedPrice' => 385.00,
            ],
            [
                'id' => 10,
                'image' => 'rooms/comfort-room.jpg',
                'room_type' => 'Comfort Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 325.00,
                'discount' => 10.00,
                'discountedPrice' => 315.00,
            ],
            [
                'id' => 11,
                'image' => 'rooms/privileged-deluxe-room.jpg',
                'room_type' => 'Privileged Deluxe Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 335.00,
                'discount' => 10.00,
                'discountedPrice' => 325.00,
            ],
            [
                'id' => 12,
                'image' => 'rooms/privileged-romance-deluxe.jpg',
                'room_type' => 'Privileged Romance Deluxe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 355.00,
                'discount' => 00.00,
                'discountedPrice' => 355.00,
            ],
            [
                'id' => 13,
                'image' => 'rooms/comfort-room-simple.jpg',
                'room_type' => 'Comfort Room Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 305.00,
                'discount' => 00.00,
                'discountedPrice' => 305.00,
            ],
            [
                'id' => 14,
                'image' => 'rooms/privileged-romance-simple.jpg',
                'room_type' => 'Privileged Romance Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 340.00,
                'discount' => 00.00,
                'discountedPrice' => 340.00,
            ],
            [
                'id' => 15,
                'image' => 'rooms/privileged-family-deluxe-5.jpg',
                'room_type' => 'Privileged Family Deluxe 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 450.00,
                'discount' => 10.00,
                'discountedPrice' => 440.00,
            ],
            [
                'id' => 16,
                'image' => 'rooms/privileged-family-deluxe-6.jpg',
                'room_type' => 'Privileged Family Deluxe 6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 480.00,
                'discount' => 00.00,
                'discountedPrice' => 480.00,
            ],
            [
                'id' => 17,
                'image' => 'rooms/minimal-duplex-room.jpg',
                'room_type' => 'Minimal Duplex Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 385.00,
                'discount' => 00.00,
                'discountedPrice' => 385.00,
            ],
            [
                'id' => 18,
                'image' => 'rooms/comfort-room.jpg',
                'room_type' => 'Comfort Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 325.00,
                'discount' => 10.00,
                'discountedPrice' => 315.00,
            ],
            [
                'id' => 19,
                'image' => 'rooms/privileged-deluxe-room.jpg',
                'room_type' => 'Privileged Deluxe Room',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 335.00,
                'discount' => 10.00,
                'discountedPrice' => 325.00,
            ],
            [
                'id' => 20,
                'image' => 'rooms/privileged-romance-deluxe.jpg',
                'room_type' => 'Privileged Romance Deluxe',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 355.00,
                'discount' => 00.00,
                'discountedPrice' => 355.00,
            ],
            [
                'id' => 21,
                'image' => 'rooms/comfort-room-simple.jpg',
                'room_type' => 'Comfort Room Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 305.00,
                'discount' => 00.00,
                'discountedPrice' => 305.00,
            ],
            [
                'id' => 22,
                'image' => 'rooms/privileged-romance-simple.jpg',
                'room_type' => 'Privileged Romance Simple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 340.00,
                'discount' => 00.00,
                'discountedPrice' => 340.00,
            ],
            [
                'id' => 23,
                'image' => 'rooms/privileged-family-deluxe-5.jpg',
                'room_type' => 'Privileged Family Deluxe 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 450.00,
                'discount' => 10.00,
                'discountedPrice' => 440.00,
            ],
            [
                'id' => 24,
                'image' => 'rooms/privileged-family-deluxe-6.jpg',
                'room_type' => 'Privileged Family Deluxe 6',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.',
                'price' => 480.00,
                'discount' => 00.00,
                'discountedPrice' => 480.00,
            ],
        ]);

        // Puedes agregar más habitaciones aquí según sea necesario
    }
}
