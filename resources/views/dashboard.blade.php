<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - My App</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="bg-gray-800 text-white w-1/4">
            <div class="p-4">
                <h2 class="text-lg font-bold mb-4">Sidebar</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="block text-blue-500 hover:text-blue-700">Groups</a></li>
                    <li><a href="#" class="block text-blue-500 hover:text-blue-700">Buddies</a></li>
                    <li><a href="#" class="block text-blue-500 hover:text-blue-700">Settings</a></li>
                </ul>
            </div>
        </aside>

        <main class="flex-1 p-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <!-- Google Map integration -->
                        <div id="map" class="h-64"></div>
                    </div>
                </div>
                <div>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-xl font-bold mb-4">Groups</h2>
                        <!-- Groups section content -->
                    </div>
                </div>
                <div class="md:col-span-2">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-xl font-bold mb-4">Most Recent Buddies</h2>
                        <!-- Most recent buddies section content -->
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        // Initialize and configure Google Map
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 37.7749, lng: -122.4194}, // Default map center
                zoom: 12 // Default zoom level
            });

            // Add markers or other map functionality as needed
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</body>
</html>

</x-app-layout>
