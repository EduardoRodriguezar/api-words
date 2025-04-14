<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima en {{ $weather['location']['name'] }} | WeatherPro</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .weather-gradient {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
        }
        .weather-card {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Contenedor principal (full-width) -->
    <div class="weather-gradient min-h-screen p-6">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8 text-white">
                <h1 class="text-3xl font-bold">WeatherPro</h1>
                <p class="text-lg">{{ date('l, d F Y') }}</p>
            </div>

            <!-- Sección horizontal principal -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Tarjeta principal (Clima actual) -->
                <div class="weather-card rounded-xl p-6 text-white col-span-2">
                    <div class="flex flex-col lg:flex-row items-center justify-between">
                        <div class="text-center lg:text-left mb-6 lg:mb-0">
                            <h2 class="text-4xl font-bold">{{ $weather['location']['name'] }}, {{ $weather['location']['country'] }}</h2>
                            <p class="text-xl mt-2">{{ $weather['current']['condition']['text'] }}</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ 'https:' . $weather['current']['condition']['icon'] }}" alt="Weather Icon" class="w-32 h-32">
                            <span class="text-6xl font-bold ml-4">{{ $weather['current']['temp_c'] }}°C</span>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta de detalles (derecha) -->
                <div class="weather-card rounded-xl p-6 text-white">
                    <h3 class="text-xl font-bold mb-4">Detalles</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span>Sensación térmica</span>
                            <span class="font-bold">{{ $weather['current']['feelslike_c'] }}°C</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Humedad</span>
                            <span class="font-bold">{{ $weather['current']['humidity'] }}%</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Viento</span>
                            <span class="font-bold">{{ $weather['current']['wind_kph'] }} km/h</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Presión</span>
                            <span class="font-bold">{{ $weather['current']['pressure_mb'] }} hPa</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección inferior (Pronóstico por horas) -->
            <div class="mt-8">
                <h3 class="text-2xl font-bold text-white mb-4">Próximas Horas</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <!-- Ejemplo de hora (puedes reemplazar con datos reales si tu API los proporciona) -->
                    <div class="weather-card rounded-lg p-4 text-center text-white">
                        <p class="font-bold">12:00 PM</p>
                        <img src="{{ 'https:' . $weather['current']['condition']['icon'] }}" alt="Hourly Icon" class="w-12 h-12 mx-auto">
                        <p class="text-xl font-bold mt-2">28°C</p>
                    </div>
                    <!-- Repetir para más horas -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>