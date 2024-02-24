# Laravel & Inertia.js Search Filter Example

This project is a full-stack web application developed as part of the Nina.care Laravel & Inertia.js assessment. The application is built using the Laravel framework for the backend and Inertia.js with Vue.js for the frontend.

## Getting Started

### Prerequisites

Make sure you have the following installed on your local machine:

- [PHP](https://www.php.net/) (minimum version: 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (minimum version: 14)
- [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/)

### Installation

1. Clone the repository:

   ```bash
   git clone git@github.com:sami1367/nina_assessment.git
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node.js dependencies:

   ```bash
   npm install
   # or
   yarn
   ```

4. Set up your environment:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update the `.env` file with your database configuration.

5. Run migrations and seeders:

   ```bash
   php artisan migrate --seed
   ```

6. Start the development server:

   ```bash
   php artisan serve
   ```

   ```bash
   npm run dev
   ```

   The application will be accessible at `http://localhost:8000`.

## Features

- **Nanny Booking Management:** View a list of nanny bookings with associated user information.
- **Clean Code:** Follows best practices for clean and maintainable code.
- **Filtering Mechanism:** Implement a reusable filtering mechanism for nanny bookings.

## Video Presentation

[Watch the Video Presentation](https://youtu.be/eH9AajZ5HA0)
