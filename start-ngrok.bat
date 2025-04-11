@echo off
title Iniciando API Laravel + Ngrok...

:: Iniciar el servidor Laravel en el puerto 8000
start "" /B cmd /c "php artisan serve --host=127.0.0.1 --port=8000"

:: Esperar 5 segundos para asegurarse de que Laravel esté corriendo
timeout /t 5 >nul

:: Iniciar Ngrok
start "" /B cmd /c "ngrok http 8000 > ngrok-log.txt"

:: Esperar unos segundos para que Ngrok genere la URL
timeout /t 5 >nul

:: Leer la URL pública desde la web interface de Ngrok
powershell -Command "$url = (Invoke-RestMethod http://127.0.0.1:4040/api/tunnels).tunnels[0].public_url; Write-Host 'Tu URL pública es:' $url"

pause
