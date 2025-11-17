## Khiane Aquino – Laravel Portfolio

This repository now contains a full Laravel 12 application that powers Khiane Aquino’s personal portfolio.  
It uses Blade templates for every section (hero, projects, certificates, skills, resume, contact) and serves the
original static assets directly from Laravel’s `public/` directory, so everything works out-of-the-box with
standard `php artisan` tooling.

### Tech stack

- Laravel 12 (PHP 8.2+) with Blade templates
- Custom layout + section partials mirroring the original portfolio design
- Vanilla CSS/JS assets (no bundler needed)
- SQLite database pre-configured for default Laravel features

### Local development

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan serve
```

Open `http://127.0.0.1:8000` to view the site.

### Structure

```
app/
bootstrap/
config/
public/
├── assets/      # images + resume
├── css/style.css
└── js/script.js
resources/views/
├── home.blade.php
├── layouts/app.blade.php
├── partials/{navbar,footer}.blade.php
└── sections/{projects,certificates,skills,resume,contact}.blade.php
routes/web.php   # Route::view('/', 'home')
```

All asset references use `asset()` so you can swap files without editing Blade templates.

### Useful artisan commands

- `php artisan serve` – local dev server
- `php artisan migrate` – run database migrations (SQLite file already provided)
- `php artisan test` – run the default PHPUnit suite

### Deployment

Use any PHP host that supports Laravel (e.g., shared hosting with PHP 8.2+, Forge, Ploi, Laravel Vapor, or a VPS).
Static-only hosts such as Netlify/Vercel will not work because Laravel requires PHP running on the server.  
See `DEPLOYMENT.md` for a step-by-step deployment checklist (web server config, scheduler/queue notes, etc.).

### License

MIT (see `LICENSE`).

