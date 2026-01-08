<div align="center">

<h1>🚀 Simple Laravel Blog</h1>

<p>
A clean, lightweight, and robust blogging application built with the <strong>Laravel</strong> framework.  
This project demonstrates essential CRUD operations, request validation, and feature testing.
</p>

<p>
  <a href="https://laravel.com">
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
  </a>
  <a href="https://www.php.net">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  </a>
  <a href="https://vitejs.dev">
    <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite" />
  </a>
  <a href="https://tailwindcss.com">
    <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS" />
  </a>
</p>

</div>

## 📖 About The Project

This repository contains a simple yet powerful blog application. It serves as a practical implementation of Laravel's core features, focusing on clean code architecture and best practices. It allows users to manage blog posts through a secure and responsive interface.

## 🔑 Key Features

- **📝 Full CRUD System**: Create, Read, Update, and Delete blog posts effortlessly.  
- **🛡️ Robust Validation**: Utilizes FormRequest classes (e.g., `StorePostRequest`) to ensure data integrity.  
- **🧪 Automated Testing**: Includes Feature tests (e.g., `PostCreationTest`) using PHPUnit to ensure stability.  
- **🎨 Modern Frontend**: Bundled with Vite for fast asset compilation.  
- **🔌 Resource Routing**: Clean and RESTful URL structure.

## 🛠️ Tech Stack

- **Framework**: Laravel 11.x  
- **Language**: PHP 8.2+  
- **Database**: MySQL / SQLite  
- **Frontend Tooling**: Vite, PostCSS  
- **Testing**: PHPUnit

## ⚡ Getting Started

Follow these steps to set up the project locally on your machine.

### Prerequisites

Make sure you have the following installed:
- PHP >= 8.2
- Composer
- Node.js & NPM

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/galhoom22/simple-laravel-blog.git
   cd simple-laravel-blog
   Install PHP dependencies:
bash
1
composer install
Install NPM dependencies:
bash
1
Environment Configuration:
Copy the example environment file and configure your database credentials.
bash
1
Open the .env file and update DB_DATABASE, DB_USERNAME, and DB_PASSWORD.
Generate Application Key:
bash
1
php artisan key:generate
Run Migrations (creates users, posts, etc.):
bash
1
php artisan migrate
(Optional) Seed the database with dummy data:
bash
1
Build Assets:
bash
1
npm run build
Start the Server:
bash
1
php artisan serve
Visit http://localhost:8000 in your browser.
🧪 Running Tests
This project comes with a suite of automated tests to verify functionality.

Run all tests:
bash
1
php artisan test
Run a specific test file:
bash
1
php artisan test tests/Feature/PostCreationTest.php
📂 Project Structure
A quick look at the top-level files and directories you'll work with:

12345678910111213141516
.
├── app
│   ├── Http
│   │   ├── Controllers (PostController.php)
│   │   └── Requests (StorePostRequest.php)
│   └── Models (Post.php)
├── database
│   ├── migrations (create_posts_table.php)
│   └── seeders
├── resources

🤝 Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')
Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request
📄 License
Distributed under the MIT License. See LICENSE for more information.


Made with ❤️ by galhoom22



```
