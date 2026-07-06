# 📝 Laravel Notes App

> A fully containerized Laravel 12 notes application with user authentication and CRUD operations.

![Laravel](https://img.shields.io/badge/Laravel-13.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.4-blue.svg)
![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED.svg)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3.svg)
![Apple Silicon](https://img.shields.io/badge/Apple%20Silicon-M5%20Optimized-green.svg)

---

## 🚀 Overview

A clean, production-ready notes application built with **Laravel 12**, fully containerized with **Docker** for seamless development on any system, optimized for Apple Silicon M5 chips. 

### ✨ Features

| Feature | Description |
|---------|-------------|
| 🔐 **Authentication** | User registration, login, and logout with session management |
| 📝 **CRUD Operations** | Create, Read, Update, and Delete notes |
| 🎨 **Modern UI** | Beautiful interface using Bootstrap 5 with icons |
| 🐳 **Dockerized** | Containerized for consistent development across all environments |
| 🔒 **Authorization** | Users can only access their own notes |
| 📱 **Responsive** | Optimized for desktop, tablet, and mobile devices |
| ⚡ **Lightweight** | PHP built-in server for fast development |
| 🗄️ **External DB** | Connect to any external MySQL database |

---

## 🛠️ Tech Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| **Laravel** | 13.x | PHP Framework |
| **PHP** | 8.4 | Backend Language |
| **MySQL** | 8.0+ | External Database |
| **Docker** | Latest | Containerization |
| **Bootstrap** | 5.3 | Frontend UI |
| **Composer** | Latest | Dependency Management |

---

## 📁 Project Structure
# 📝 Laravel Notes App

A fully containerized Laravel 12 notes application with user authentication and CRUD operations.

[![Laravel](https://img.shields.io/badge/Laravel-13.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-blue.svg)](https://php.net)
[![Docker](https://img.shields.io/badge/Docker-Enabled-2496ED.svg)](https://docker.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3.svg)](https://getbootstrap.com)
[![Apple Silicon](https://img.shields.io/badge/Apple%20Silicon-M5%20Optimized-green.svg)](https://www.apple.com)

---

## 🚀 Overview

A clean, production-ready notes application built with Laravel 12, fully containerized with Docker for seamless development on any system, optimized for Apple Silicon M5 chips.

### ✨ Features

| Feature | Description |
|---------|-------------|
| 🔐 Authentication | User registration, login, and logout with session management |
| 📝 CRUD Operations | Create, Read, Update, and Delete notes |
| 🎨 Modern UI | Beautiful interface using Bootstrap 5 with icons |
| 🐳 Dockerized | Containerized for consistent development across all environments |
| 🔒 Authorization | Users can only access their own notes |
| 📱 Responsive | Optimized for desktop, tablet, and mobile devices |
| ⚡ Lightweight | PHP built-in server for fast development |
| 🗄️ External DB | Connect to any external MySQL database |

---

## 🛠️ Tech Stack

| Technology | Version | Purpose |
|------------|---------|---------|
| Laravel | 13.x | PHP Framework |
| PHP | 8.4 | Backend Language |
| MySQL | 8.0+ | External Database |
| Docker | Latest | Containerization |
| Bootstrap | 5.3 | Frontend UI |
| Composer | Latest | Dependency Management |

---

## 📁 Project Structure

laravel-notes-app/
├── docker/
│   └── php/
│       ├── Dockerfile
│       └── local.ini
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       │   ├── LoginController.php
│   │       │   └── RegisterController.php
│   │       └── NotesController.php
│   ├── Models/
│   │   ├── User.php
│   │   └── Note.php
│   └── Policies/
│       └── NotePolicy.php
├── bootstrap/
│   └── app.php
├── config/
│   ├── app.php
│   ├── database.php
│   └── auth.php
├── database/
│   └── migrations/
│       ├── 0001_01_01_000000_create_users_table.php
│       └── xxxx_xx_xx_create_notes_table.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       └── notes/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
├── routes/
│   └── web.php
├── public/
│   └── index.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── .env
├── .env.example
├── artisan
├── composer.json
├── docker-compose.yml
└── README.md

---

## 🚦 Getting Started

### Prerequisites

- Docker installed on your machine
- External MySQL database
- Git (optional)

### Installation

1. Clone the repository
   git clone https://github.com/yourusername/laravel-notes-app.git
   cd laravel-notes-app

2. Configure environment
   cp .env.example .env

   Update .env with your database credentials:
   DB_CONNECTION=mysql
   DB_HOST=host.docker.internal
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

3. Build and run with Docker
   docker-compose up -d --build

4. Generate application key
   docker exec -it notes-app php artisan key:generate

5. Run migrations
   docker exec -it notes-app php artisan migrate

6. Access the application
   Open your browser and navigate to: http://localhost:8000

### Common Commands

docker-compose up -d              Start the application
docker-compose down               Stop the application
docker logs notes-app             View application logs
docker exec -it notes-app bash    Access container shell
docker exec -it notes-app php artisan <command>  Run Artisan commands

---

## 📸 Screenshots

Login Page
Dashboard
Create Note
View Note

---

## 🔧 Development

### Adding New Features

1. Create a new branch
   git checkout -b feature/your-feature

2. Make your changes
3. Test locally with Docker
4. Commit and push
   git add .
   git commit -m "Add: your feature description"
   git push origin feature/your-feature

### Running Tests
docker exec -it notes-app php artisan test

---

## 📝 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /login | Show login page |
| POST | /login | Authenticate user |
| GET | /register | Show registration page |
| POST | /register | Register new user |
| POST | /logout | Logout user |
| GET | /notes | List all notes |
| GET | /notes/create | Show create note form |
| POST | /notes | Store new note |
| GET | /notes/{id} | View specific note |
| GET | /notes/{id}/edit | Show edit note form |
| PUT | /notes/{id} | Update note |
| DELETE | /notes/{id} | Delete note |

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. Fork the repository
2. Create your feature branch (git checkout -b feature/AmazingFeature)
3. Commit your changes (git commit -m 'Add some AmazingFeature')
4. Push to the branch (git push origin feature/AmazingFeature)
5. Open a Pull Request

---

## 📄 License

This project is open-sourced software licensed under the MIT license.

---

## 🙏 Acknowledgments

- Laravel - The PHP framework
- Docker - Containerization platform
- Bootstrap - Frontend framework
- Font Awesome - Icons

---

## 📧 Contact

Tochukwu Colin Uchem - LinkedIn: https://www.linkedin.com/in/uchem-colin-802888144/

Project Link: https://github.com/uchemcolin/dockerized-laravel-notes-app

---

Made with ❤️ and ☕