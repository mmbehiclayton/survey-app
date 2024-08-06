<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Homepage - Diaspora Support</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}"/>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex items-center justify-between px-4">
            <!-- Logo and Company Name -->
            <div class="flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Company Logo" class="h-8 mr-3">
                <span class="text-xl text-black font-semibold">Diaspora Support</span>
            </div>
            <!-- Authentication Links -->
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        @yield('content')
    </div>

    <!-- Services Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold text-center mb-8">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Service 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Service 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-lg font-semibold mb-4">Service 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-black py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; {{ date('Y') }} Diaspora Support. All rights reserved.</p>
            <p class="mt-2">1234 Address St, City, Country</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
</body>
</html>
