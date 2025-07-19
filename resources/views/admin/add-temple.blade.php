@extends('layouts.admin')

@section('title', 'Add New Temple')

@section('content')
    <div class="mb-6">
        <div class="flex items-center space-x-2">
            <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-orange-500">
                <i class="fas fa-arrow-left"></i> Go Back
            </a>
        </div>
        <h1 class="text-2xl font-bold text-gray-900 mt-4">Add New Temple</h1>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <form action="{{ route('admin.temples.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Temple Images</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <div class="flex justify-center">
                            <div class="text-orange-500">
                                <i class="fas fa-image text-3xl"></i>
                            </div>
                        </div>
                        <p class="mt-2 text-sm text-gray-600">Click to upload images</p>
                        <p class="text-xs text-gray-500">PNG, JPG up to 5MB (Max. 5 images)</p>
                        <input type="file" name="temple_images[]" multiple class="hidden" id="temple-images">
                    </div>
                </div>

                <div>
                    <label for="temple_name" class="block text-sm font-medium text-gray-700 mb-2">Temple Name</label>
                    <input type="text" id="temple_name" name="temple_name" placeholder="Enter the temple name" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                    <input type="text" id="location" name="location" placeholder="Enter the location" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>

                <div>
                    <label for="short_description" class="block text-sm font-medium text-gray-700 mb-2">Short Description</label>
                    <textarea id="short_description" name="short_description" rows="2" placeholder="Enter the short description" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Add Package</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input type="text" name="packages[0][name]" placeholder="Enter the package" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <div>
                            <input type="text" name="packages[0][price]" placeholder="Enter the amount" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                    </div>
                    <div class="text-right mt-2">
                        <button type="button" class="text-orange-500 hover:text-orange-600 text-sm font-medium">
                            + Add package
                        </button>
                    </div>
                </div>

                <div class="md:col-span-2">
                    <label for="overall_description" class="block text-sm font-medium text-gray-700 mb-2">Overall Description</label>
                    <textarea id="overall_description" name="overall_description" rows="4" placeholder="Enter the overall description" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </div>

                <div class="md:col-span-2">
                    <label for="visiting_information" class="block text-sm font-medium text-gray-700 mb-2">Visiting Information</label>
                    <textarea id="visiting_information" name="visiting_information" rows="3" placeholder="Enter the visiting information" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </div>
            </div>

            <div class="mt-8">
                <button type="submit" class="w-full md:w-auto bg-gray-900 hover:bg-gray-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300">
                    Add Temple
                </button>
            </div>
        </form>
    </div>

    <script>
        // Handle image upload preview
        document.querySelector('.border-dashed').addEventListener('click', function() {
            document.getElementById('temple-images').click();
        });
    </script>
@endsection