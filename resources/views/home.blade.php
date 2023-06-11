<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-white py-4">
        <nav class="container mx-auto px-4">
            <!-- Navigation links -->
        </nav>
    </header>

    <main>
        <section class="hero bg-blue-500 py-16 text-white">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome to My App</h1>
                <p class="text-xl mb-8">Discover and connect with buddies in your area.</p>
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-full">Get Started</a>
            </div>
        </section>

        <!-- Other sections and content of the home page -->

    </main>

    <footer class="bg-gray-200 py-4">
        <div class="container mx-auto px-4">
            <!-- Footer content -->
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

