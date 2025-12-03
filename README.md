# Konferencijų Administravimo Sistema

Laravel aplikacija ekologijos, gamtos saugos ir aplinkosaugos konferencijų valdymui su pilnu CRUD funkcionalumu, autentifikacija ir autorizacija. Minimalistiškas ir šiuolaikiškas dizainas.

## Funkcionalumas

- ✅ Konferencijų sąrašo peržiūra (visiems)
- ✅ Konferencijos detalių peržiūra (visiems)
- ✅ Prisijungimas / Atsijungimas
- ✅ Konferencijų kūrimas (tik administratoriams)
- ✅ Konferencijų redagavimas (tik administratoriams)
- ✅ Konferencijų trynimas su patvirtinimu (tik administratoriams)
- ✅ Pilna validacija visose formose
- ✅ Lietuviški vertimai

## Technologijos

- **Backend**: Laravel 12
- **Frontend**: Bootstrap 5
- **JavaScript**: SweetAlert2 (modal'ams)
- **Build**: Laravel Mix + NPM
- **Database**: SQLite
- **Autentifikacija**: Laravel Session Auth

## Įdiegimas

### Reikalavimai

- PHP 8.2+
- Composer
- Node.js & NPM
- SQLite

### Žingsniai

1. Clone repository:
```bash
git clone <repository-url>
cd ND
```

2. Įdiegti PHP priklausomybes:
```bash
composer install
```

3. Nukopijuoti .env failą:
```bash
copy .env.example .env
```

4. Generuoti application key:
```bash
php artisan key:generate
```

5. Sukurti duomenų bazę ir paleisti migracijas:
```bash
php artisan migrate:fresh --seed
```

6. Įdiegti NPM priklausomybes:
```bash
npm install
```

7. Sukompiliuoti assets:
```bash
npm run dev
```

8. Paleisti serverį:
```bash
php artisan serve
```

9. Atidaryti naršyklėje: http://localhost:8000

## Prisijungimo duomenys

### Administratorius (gali kurti/redaguoti/trinti)
- **Username**: admintest
- **Password**: admintest

### Svečias (tik peržiūra)
- **Username**: usertest
- **Password**: usertest

## Projekto struktūra

```
ND/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   └── ConferenceController.php
│   │   ├── Middleware/
│   │   │   └── AdminMiddleware.php
│   │   └── Requests/
│   │       └── ConferenceRequest.php
│   └── Models/
│       ├── Conference.php
│       └── User.php
├── database/
│   ├── migrations/
│   └── seeders/
│       ├── ConferenceSeeder.php
│       └── DatabaseSeeder.php
├── lang/
│   └── lt/
│       └── messages.php
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── auth/
│   │   │   └── login.blade.php
│   │   └── conferences/
│   │       ├── index.blade.php
│   │       ├── show.blade.php
│   │       ├── create.blade.php
│   │       ├── edit.blade.php
│   │       └── _form.blade.php
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── sass/
│       └── app.scss
└── routes/
    └── web.php
```

## Autorizacija

- **Neprisijungęs vartotojas**: Gali matyti konferencijų sąrašą ir peržiūrėti detales
- **Administratorius**: Gali kurti, redaguoti ir trinti konferencijas

## Validacija

Visi konferencijos laukai yra privalomi:
- Pavadinimas (max 255 simboliai)
- Aprašymas
- Data (negali būti praeityje)
- Adresas
- Miestas
- Šalis
- Dalyvių skaičius (min 0)

## PSR Standartai

Projektas laikosi PSR-4 (Autoloading) ir PSR-12 (Coding Style) standartų.

## Licencija

MIT License

---

Sukurta su ❤️ naudojant Laravel 12
