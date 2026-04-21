# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

**Full development environment (recommended):**
```bash
composer dev
```
This runs concurrently: Laravel server, queue listener, Pail log viewer, and Vite dev server.

**Individual commands:**
```bash
composer setup       # First-time setup: install deps, generate key, migrate, build
composer test        # Run PHPUnit test suite (uses in-memory SQLite)
npm run dev          # Vite dev server only
npm run build        # Build production assets
php artisan migrate  # Run database migrations
```

**Run a single test:**
```bash
php artisan config:clear && ./vendor/bin/phpunit --filter TestName
```

## Architecture

This is a **Laravel 13 + Livewire 4 marketing website** ("Grind Coffee") — a single-page landing site with an interactive contact form.

**Request flow:**
- `routes/web.php` → single `GET /` route renders `resources/views/welcome.blade.php`
- `welcome.blade.php` composes anonymous Blade components from `resources/views/components/` (navbar, hero, features, menu, cta, footer)
- The contact form is a Livewire component: `app/Livewire/ContactForm.php` + `resources/views/livewire/contact-form.blade.php`
- Master layout lives at `resources/views/components/layouts/main.blade.php`

**Frontend pipeline:**
- Tailwind CSS 4 + Vite 8 — entry points are `resources/css/app.css` and `resources/js/app.js`
- `app.js` handles scroll-triggered navbar styling and mobile menu toggle (vanilla JS, no framework)
- Custom color theme (coffee browns, golds, dark backgrounds) defined in `resources/css/app.css`

**Database:** SQLite by default (`.env`); tests use an in-memory SQLite DB (`phpunit.xml`).

**Deployment:** Vercel (PHP buildpack via `vercel.json`) and Nixpacks (`nixpacks.toml`, PHP 8.4).
