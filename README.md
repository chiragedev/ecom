# TECHHEAVEN

A full-stack ecommerce platform built with Laravel, featuring Stripe payment integration and a built-in CMS for managing products and content.

---

## What it does

TECHHEAVEN is a complete online store with everything you'd expect from a modern ecommerce site — product listings, a shopping cart, checkout with real payment processing via Stripe, and an admin CMS to manage it all without touching code.

## Tech Stack

- **Backend** — Laravel (PHP)
- **Frontend** — Blade templates, Tailwind CSS, Vite
- **Payments** — Stripe
- **Database** — MySQL (via Laravel Eloquent)
- **JS tooling** — Node.js / npm

## Getting Started

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL
- A Stripe account (for payment keys)

### Installation

```bash
# Clone the repo
git clone https://github.com/chiragedev/ecom.git
cd ecom

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Set up your environment
cp .env.example .env
php artisan key:generate
```

Then open `.env` and fill in your database credentials and Stripe keys:

```env
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

STRIPE_KEY=pk_test_...
STRIPE_SECRET=sk_test_...
```

```bash
# Run migrations
php artisan migrate

# Build frontend assets
npm run dev

# Start the server
php artisan serve
```

App will be running at `http://localhost:8000`.

## Project Structure

```
app/          → Controllers, Models, Middleware
resources/    → Blade views, CSS, JS
routes/       → Web and API routes
database/     → Migrations and seeders
public/       → Compiled assets
config/       → App configuration
```

## Features

- Product catalog with CMS-managed content
- Shopping cart and checkout flow
- Stripe payment processing
- Admin panel for managing products/orders
- Responsive UI with Tailwind CSS

## License

MIT
