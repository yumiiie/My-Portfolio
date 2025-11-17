# Deployment Guide – Full Laravel Application

The portfolio now runs as a standard Laravel application. That means you **must** deploy to a PHP-capable host
(shared hosting, VPS, Laravel Forge/Ploi, Vapor, etc.). Static-only hosts such as Netlify or Vercel no longer work
because they cannot execute `php artisan` or route requests through `public/index.php`.

## 1. Production requirements

- PHP 8.2 or newer with the extensions required by Laravel (bcmath, ctype, fileinfo, json, mbstring, openssl, pdo, tokenizer, xml).
- Composer 2.x
- Web server pointing the document root to the project’s `public/` directory.
- Writable `storage/` and `bootstrap/cache/` directories.

## 2. Deployment steps

1. **Upload / clone the project**
   ```bash
   git clone <repo> portfolio
   cd portfolio
   cp .env.example .env
   composer install --optimize-autoloader --no-dev
   php artisan key:generate
   php artisan migrate --force    # optional (SQLite file already present)
   npm install && npm run build   # optional, only if you start using Vite assets
   ```

2. **Configure .env**
   - `APP_NAME="Khiane Portfolio"`
   - `APP_ENV=production`
   - `APP_URL=https://your-domain.com`
   - Update mail settings if you plan to send e-mail from the contact form.

3. **Optimize for production**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. **Set file permissions**
   - `storage/` and `bootstrap/cache/` should be writable by the web server user.

5. **Point the web server to /public**
   - Apache: update the VirtualHost `DocumentRoot`.
   - Nginx: `root /path/to/project/public;` and include Laravel’s `try_files` rule.

## 3. Scheduler & queue (optional)

If you later add scheduled tasks or queued jobs:
- Add a cron entry: `* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1`
- Run a queue worker: `php artisan queue:work --daemon`

## 4. SSL / HTTPS

Always force HTTPS using your web server (e.g., Apache rewrite or Nginx `return 301 https://$host$request_uri;`).
Then set `APP_URL` to the HTTPS URL and enable HSTS if desired.

## 5. Troubleshooting

- **500 errors**: check `storage/logs/laravel.log`.
- **Permission errors**: ensure `storage/` + `bootstrap/cache/` are writable.
- **Asset 404s**: confirm the web server points to `public/` and the files exist in `public/assets`, `public/css`, `public/js`.
- **Contact form e-mails**: configure `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, etc.
- **SQLite issues**: ensure `database/database.sqlite` exists and is writable.

## 6. Going serverless?

If you need a serverless option, consider Laravel Vapor (AWS Lambda) or Bref on AWS. They allow full Laravel apps to
run in serverless environments but require additional setup beyond this guide.

---

Need help? Run `php artisan about` for a quick diagnostic summary or consult the main `README.md`.
