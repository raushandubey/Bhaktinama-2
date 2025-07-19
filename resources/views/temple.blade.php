@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple Service</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5; /* Light gray background */
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
        <h1 class="text-2xl font-semibold text-gray-800">Temple Service</h1>
        <div></div> <!-- Placeholder for right alignment -->
    </header>

    <!-- Main Content Section - Temple Service Cards -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Jain Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Jain+Temple" alt="Jain Temple" class="card-image">
                <div class="card-title">Jain Temple</div>
            </div>

            <!-- Ambika Niketan Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Ambika+Niketan" alt="Ambika Niketan Temple" class="card-image">
                <div class="card-title">Ambika Niketan Temple</div>
            </div>

            <!-- Gayatri Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Gayatri+Temple" alt="Gayatri Temple" class="card-image">
                <div class="card-title">Gayatri Temple</div>
            </div>

            <!-- Balaji Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Balaji+Mandir" alt="Balaji Mandir" class="card-image">
                <div class="card-title">Balaji Mandir</div>
            </div>

            <!-- Siddhnath Mahadev Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Siddhnath+Mahadev" alt="Siddhnath Mahadev Temple" class="card-image">
                <div class="card-title">Siddhnath Mahadev Temple</div>
            </div>

            <!-- Hanuman Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Hanuman+Temple" alt="Hanuman Temple" class="card-image">
                <div class="card-title">Hanuman Temple</div>
            </div>

            <!-- Kanteshwar Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Kanteshwar+Mandir" alt="Kanteshwar Mandir" class="card-image">
                <div class="card-title">Kanteshwar Mandir</div>
            </div>

            <!-- Shree Agam Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Shree+Aagam+Mandir" alt="Shree Agam Mandir" class="card-image">
                <div class="card-title">Shree Agam Mandir</div>
            </div>

            <!-- Annapurna Mata Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Annapurna+Mata" alt="Annapurna Mata Mandir" class="card-image">
                <div class="card-title">Annapurna Mata Mandir</div>
            </div>

            <!-- Gangeshwar Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Gangeshwar+Mandir" alt="Gangeshwar Mandir" class="card-image">
                <div class="card-title">Gangeshwar Mandir</div>
            </div>

            <!-- Old Ambaji Mandir Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Old+Ambaji+Mandir" alt="Old Ambaji Mandir" class="card-image">
                <div class="card-title">Old Ambaji Mandir</div>
            </div>

            <!-- Shri Shirdi Sai Baba Temple Card -->
            <div class="card">
                <img src="https://placehold.co/600x400/2c3e50/ffffff?text=Shirdi+Sai+Baba" alt="Shri Shirdi Sai Baba Temple" class="card-image">
                <div class="card-title">Shri Shirdi Sai Baba Temple</div>
            </div>


        </div>

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