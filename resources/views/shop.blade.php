@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Shop - MyPoojaPandit</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom gradient for buttons */
        .btn-gradient {
            background: linear-gradient(to right, #FF7B00, #FF9F00);
        }
        .text-gradient {
            background: linear-gradient(to right, #FF7B00, #FF9F00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        
    </header>

    <!-- Shop Hero Section -->
    <section class="relative bg-cover bg-center h-[400px] flex items-center justify-center rounded-b-lg overflow-hidden" style="background-image: url('{{ asset('images/SHOP PUJA SAMAGARI.jpg') }}')">
        <div class="absolute inset-0 bg-black opacity-50 rounded-b-lg"></div>
        <div class="relative z-10 text-white text-center px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 rounded-lg">
                Traditional Puja Essentials
            </h1>
            <p class="text-lg md:text-xl rounded-lg">
                Discover authentic, handcrafted Puja items sourced directly from artisans. Our products maintain the sacred traditions while meeting modern quality standards.
            </p>
        </div>
    </section>

    <!-- Shop by Category Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold text-gradient">Shop by Category</h2>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded-full shadow-lg transition duration-300 flex items-center space-x-2">
                    <i class="fas fa-shopping-cart"></i>
                    <span>My Cart</span>
                </button>
            </div>
            <p class="text-gray-600 mb-12">Browse our carefully curated collection of authentic puja essentials, each crafted with devotion and attention to detail</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Category Card 1 -->
                <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Thali') }}" alt="Puja Thali Sets" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Puja Thali Sets</h3>
                    </div>
                </div>
                <!-- Category Card 2 -->
                <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Diyas') }}" alt="Diyas & Lamps" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Diyas & Lamps</h3>
                    </div>
                </div>
                <!-- Category Card 3 -->
                <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Incense') }}" alt="Incense & Fragrances" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Incense & Fragrances</h3>
                    </div>
                </div>
                <!-- Category Card 4 -->
                <div class="bg-gray-100 rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Idols') }}" alt="Religious Idols" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Religious Idols</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Featured Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Product Card 1: Brass Puja Thali Set -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Brass+Thali') }}" alt="Brass Puja Thali Set" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Brass Puja Thali Set</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 2: Decorative Brass Diya Set -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Brass+Diya') }}" alt="Decorative Brass Diya Set" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Decorative Brass Diya Set</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 3: Premium Incense Sticks -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Incense+Sticks') }}" alt="Premium Incense Sticks" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Premium Incense Sticks</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 4: Brass Ganesh Idol -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Ganesh+Idol') }}" alt="Brass Ganesh Idol" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Brass Ganesh Idol</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 5: Silver Plated Bell -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Silver+Bell') }}" alt="Silver Plated Bell" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Silver Plated Bell</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 6: Artificial Flower Strings -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Flower+Strings') }}" alt="Artificial Flower Strings" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Artificial Flower Strings</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 7: Agarbatti -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Agarbatti') }}" alt="Agarbatti" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Agarbatti</h3>
                        <p class="text-gray-600 text-sm mb-2">Premium Quality Pack of 10 Sticks</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 8: Diya Lamps -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Diya+Lamps') }}" alt="Diya Lamps" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Diya Lamps</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 9: Haldi -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Haldi') }}" alt="Haldi" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Haldi</h3>
                        <p class="text-gray-600 text-sm mb-2">Premium Quality Pack of 200g</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 10: Pooja Thali -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Pooja+Thali') }}" alt="Pooja Thali" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Pooja Thali</h3>
                        <p class="text-gray-600 text-sm mb-2">Hand Crafted Size: 4 Inches</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 11: Chunri -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Chunri') }}" alt="Chunri" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Chunri</h3>
                        <p class="text-gray-600 text-sm mb-2">Elegant festive ethnic item</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 12: Kumkum -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Kumkum') }}" alt="Kumkum" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Kumkum</h3>
                        <p class="text-gray-600 text-sm mb-2">Fine quality festive kumkum</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 13: Sweets -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Sweets') }}" alt="Sweets" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Sweets</h3>
                        <p class="text-gray-600 text-sm mb-2">Delicious traditional festive sweets</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 14: Small Goddess Idols -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Goddess+Idols') }}" alt="Small Goddess Idols" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Small Goddess Idols</h3>
                        <p class="text-gray-600 text-sm mb-2">Elegant divine goddess idols</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 15: Deepam -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Deepam') }}" alt="Deepam" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Deepam</h3>
                        <p class="text-gray-600 text-sm mb-2">Sacred lamp that spreads divine light</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!-- Product Card 16: Scriptures -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Scriptures') }}" alt="Scriptures" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4 text-left">
                        <h3 class="text-lg font-semibold mb-1">Scriptures</h3>
                        <p class="text-gray-600 text-sm mb-2">Religious books with slokas and hymns</p>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-500 text-sm mr-2">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm">(47)</span>
                        </div>
                        <p class="text-xl font-bold text-orange-600 mb-2">INR 129</p>
                        <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-full shadow-md transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center space-x-2 mt-12">
                <button class="w-10 h-10 rounded-full bg-orange-500 text-white font-semibold flex items-center justify-center shadow-md">1</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">2</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">3</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">4</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">5</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">6</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer Section (reused from previous page) -->
  
</body>
</html>
@endsection
