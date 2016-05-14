# Laravel Book REST API

Aplikácia obsahuje definované 2 volania:

GET: http://bookshop.dev/search/isbn/978-3-16-148410-0
POST http://bookshop.dev/add-book

Pričom pri volaní metódy na vkladanie knihy, sú povinné tieto parametre: isbn, author, title, published_at. Doplnkový nepovinný parameter je rating.

## Inštalácia a konfigurácia

Po stiahnutí zdrojového kódu aplikácie je potrebné zmeniť príslušné nastavenia v .env súbore. PRe túto aplikáciu sa používajú nasledovné časti:

APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:J0eO6bkj4egARrrvuW6mxgcD4dBkIopOWID8lHcRWO0=
APP_URL=http://books.dev

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=books
DB_USERNAME=root
DB_PASSWORD=root

Všetky ostatné časti sú pre beh aplikácie nepodstatné. Po vykonaní danej zmeny je potrebné spustiť nasledovný príkaz v koreňovom adresáry aplikácie:
composer install
php artisan db:seed

## Testing

V prípade, že máte záujem o spustenie jednotlivých testovacích scenárov v rámci Unit testingu. Stačí spustiť príkaz v koreňovom adresáry aplikácie: phpunit