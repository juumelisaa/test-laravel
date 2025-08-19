# Laravel Docker Template (Tanpa Sail)

## Cara Pakai

1. Clone project ini:
```bash
git clone <repo-url> myproject
cd myproject
```

2. Buat Laravel project di folder `app`:
```bash
docker run --rm -v $(pwd)/app:/app composer create-project laravel/laravel app-name
```

3. Jalankan docker:
```bash
docker-compose up -d --build
```

4. Masuk ke container:
```bash
docker exec -it laravel-app bash
```

5. Masuk ke folder project:
```bash
cd app-name
```

6. Jalankan Laravel:
```bash
composer install
composer require livewire/breeze --dev
composer require guzzlehttp/guzzle
php artisan breeze:install react
npm install vite
php artisan key:generate
php artisan migrate
php artisan serve --host=0.0.0.0 --port=8000
npm run dev
```

Akses Laravel di http://localhost:8000
