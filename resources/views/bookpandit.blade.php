@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <!-- Page specific content -->

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Pandit Online</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5; /* Light gray background */
        }
        .card {
            background-color: #ffffff;
            border-radius: 0.75rem; /* rounded-xl */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); /* shadow-md */
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-image {
            width: 100%;
            height: 180px; /* Fixed height for consistency */
            object-fit: cover;
        }
        .card-title {
            background-color: #2c3e50; /* Dark blue-gray for title background */
            color: #ffffff;
            padding: 0.75rem 1rem;
            text-align: center;
            font-weight: 500; /* font-medium */
        }
        .pagination-button {
            background-color: #f39c12; /* Orange for active pagination */
            color: #ffffff;
            border-radius: 9999px; /* rounded-full */
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        .pagination-button:hover {
            background-color: #e67e22; /* Darker orange on hover */
        }
        .pagination-button.inactive {
            background-color: #e0e0e0; /* Light gray for inactive pagination */
            color: #333333;
        }
        .pagination-button.inactive:hover {
            background-color: #cccccc;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">

    <!-- Header Section -->
    <header class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex items-center justify-between">
        <a href="{{route('homepage')}}" class="text-gray-600 hover:text-gray-800 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            Go Back
        </a>
        <h1 class="text-2xl font-semibold text-gray-800">Book Pandit Online for Puja</h1>
        <div></div> <!-- Placeholder for right alignment -->
    </header>

    <!-- Main Content Section - Puja Cards -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Annaprashan Sanskar Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Annaprashan" alt="Annaprashan Sanskar Puja" class="card-image">
                <div class="card-title">Annaprashan Sanskar Puja</div>
            </div>

            <!-- Satyanarayan Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Satyanarayan" alt="Satyanarayan Puja" class="card-image">
                <div class="card-title">Satyanarayan Puja</div>
            </div>

            <!-- Bhoomi Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Bhoomi" alt="Bhoomi Puja" class="card-image">
                <div class="card-title">Bhoomi Puja</div>
            </div>

            <!-- Griha Pravesh Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Griha+Pravesh" alt="Griha Pravesh Puja" class="card-image">
                <div class="card-title">Griha Pravesh Puja</div>
            </div>

            <!-- New Office Opening Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Office+Opening" alt="New Office Opening Puja" class="card-image">
                <div class="card-title">New Office Opening Puja</div>
            </div>

            <!-- Vivah - Marriage Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Vivah" alt="Vivah - Marriage" class="card-image">
                <div class="card-title">Vivah - Marriage</div>
            </div>

            <!-- Vishwakarma Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Vishwakarma" alt="Vishwakarma Puja" class="card-image">
                <div class="card-title">Vishwakarma Puja</div>
            </div>

            <!-- Yagnopavit Sanskar Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Yagnopavit" alt="Yagnopavit Sanskar" class="card-image">
                <div class="card-title">Yagnopavit Sanskar</div>
            </div>

            <!-- Saraswati Pooja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Saraswati" alt="Saraswati Pooja" class="card-image">
                <div class="card-title">Saraswati Pooja</div>
            </div>

            <!-- Rudrabhishek Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Rudrabhishek" alt="Rudrabhishek Puja" class="card-image">
                <div class="card-title">Rudrabhishek Puja</div>
            </div>

            <!-- Engagement Ceremony - Sagai Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Engagement" alt="Engagement Ceremony - Sagai" class="card-image">
                <div class="card-title">Engagement Ceremony - Sagai</div>
            </div>

            <!-- Naming Ceremony Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Naming" alt="Naming Ceremony" class="card-image">
                <div class="card-title">Naming Ceremony</div>
            </div>

            <!-- Ganesh Chaturthi Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Ganesh+Chaturthi" alt="Ganesh Chaturthi" class="card-image">
                <div class="card-title">Ganesh Chaturthi</div>
            </div>

            <!-- Vehicle/Vahan Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Vehicle+Puja" alt="Vehicle/Vahan Puja" class="card-image">
                <div class="card-title">Vehicle/Vahan Puja</div>
            </div>

            <!-- Mundan Sanskar Puja Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Mundan+Sanskar" alt="Mundan Sanskar Puja" class="card-image">
                <div class="card-title">Mundan Sanskar Puja</div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center space-x-2 mt-8">
            <div class="pagination-button">1</div>
            <div class="pagination-button inactive">2</div>
            <div class="pagination-button inactive">3</div>
            <div class="pagination-button inactive">4</div>
            <div class="pagination-button inactive">5</div>
            <div class="pagination-button inactive">6</div>
        </div>
    </main>

</body>
</html>
@endsection

