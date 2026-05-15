# CommonGround 🏺

CommonGround is a modern Hostel Management System built with Laravel 13. It features a unique design language inspired by Moroccan heritage, riads, and the vibrant colors of the Maghreb, providing a "Moroccan Oasis" aesthetic for both travelers and administrators.

## ✨ Features

- **Multi-Role Dashboards**: Tailored experiences for Admins, Staff, and Guests.
- **Accommodation Management**: Full control over room categories, dorms, and individual beds.
- **Booking Engine**: Seamless booking process with real-time availability checks.
- **Secure Payments**: Integrated with **Stripe** for reliable transaction processing and automated webhooks.
- **Invoice Generation**: Automated PDF invoice creation for every booking.
- **Review System**: Built-in feedback loop for guests to rate their stay.
- **User Governance**: Advanced administrative tools for managing staff and guest accounts, including moderation features.

## 🎨 Design System: "Moroccan Oasis"

The UI is built with a custom component-driven approach using Tailwind CSS, featuring:
- **Primary Color**: Majorelle Blue (#2b5797) - Deep, vibrant blue.
- **Secondary Color**: Terracotta - Warm, earthy red-orange.
- **Accent**: Saharan Gold - Bright, sandy gold.
- **Architecture**: Arch-inspired shapes and soft `rounded-2xl` corners mimicking Moroccan architecture.
- **Background**: Warm "Tadelakt" off-white (`#fdf8f1`).

## 🛠️ Tech Stack

- **Framework**: [Laravel 13](https://laravel.com)
- **Authentication**: [Laravel Breeze](https://laravel.com/docs/breeze)
- **Styling**: [Tailwind CSS](https://tailwindcss.com)
- **Payments**: [Stripe](https://stripe.com)
- **PDF Generation**: [Laravel DomPDF](https://github.com/barryvdh/laravel-dompdf)

## 🚀 Getting Started

### Prerequisites
- PHP 8.3+
- Composer
- Node.js & NPM

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd commonground
   ```

2. **Run the setup script**
   The project includes a convenient setup command:
   ```bash
   composer run setup
   ```
   *This will install dependencies, create your .env file, generate keys, and run migrations.*

3. **Configure Environment**
   Update your `.env` file with your database credentials and Stripe API keys:
   ```env
   STRIPE_KEY=your_public_key
   STRIPE_SECRET=your_secret_key
   STRIPE_WEBHOOK_SECRET=your_webhook_secret
   ```

4. **Launch the development server**
   ```bash
   composer run dev
   ```

## 🧪 Testing

Run the test suite using:
```bash
composer run test
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
