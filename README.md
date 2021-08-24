## Een good games website waar je een review aan games kunt toevoegen en games kunt raten gemaakt met Laravel

Je kunt hem in werking zien op <a href="http://games.rinusportfolio.nl">Good Games</a>
Om dit lokaal te installeren maak met git een clone met de groene button "code".
Maak een database aan en doe nu lokaal:
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

