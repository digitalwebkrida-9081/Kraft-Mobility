## Using this static site inside a Laravel project

This folder now contains Blade views and routes that mirror your original static HTML pages.
To run this as a real Laravel application, follow these steps on your machine:

1. **Create a fresh Laravel project (outside this folder)**  
   ```bash
   composer create-project laravel/laravel kraft-mobility
   ```

2. **Copy project files into the Laravel app**
   - Copy all your static assets (the existing `assets` folder, `index.css`, `about-us.css`, `blog.css`, `contact-us.css`, and `services` folder, etc.) into the Laravel app's `public/` directory, preserving the same paths:
     - `public/assets/...`
     - `public/index.css`
     - `public/about-us.css`
     - `public/blog.css`
     - `public/contact-us.css`
     - `public/services/...`
   - Copy the new Blade views from this project into the Laravel app:
     - `resources/views/layouts/app.blade.php`
     - `resources/views/index.blade.php`
     - `resources/views/about-us.blade.php`
     - `resources/views/blog.blade.php`
     - `resources/views/contact-us.blade.php`
     - `resources/views/login.blade.php`
   - Copy `routes/web.php` from this project into the Laravel app (or merge the route definitions if `web.php` already exists).

3. **Routes provided**
   The `routes/web.php` file defines:
   - `GET /` → `resources/views/index.blade.php` (named route: `home`)
   - `GET /about-us` → `resources/views/about-us.blade.php` (named route: `about`)
   - `GET /blog` → `resources/views/blog.blade.php` (named route: `blog`)
   - `GET /contact-us` → `resources/views/contact-us.blade.php` (named route: `contact`)
   - `GET /login` → `resources/views/login.blade.php` (named route: `login`)

   Existing location and service pages (like `locations/mumbai.html` or `services/destination-service.html`) continue to work as **static files** under `public/` and are linked using `url(...)` from the layout.

4. **Run Laravel**
   From inside the new Laravel project folder:
   ```bash
   php artisan serve
   ```

5. **Next steps (optional)**
   - Gradually convert each `locations/*.html` and `services/*.html` page into Blade views and add proper Laravel routes for them.
   - Replace the placeholder `login.blade.php` page with Laravel’s real authentication scaffolding (e.g. Breeze, Jetstream, or Fortify).


