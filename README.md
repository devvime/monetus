# 🚀 Pipu PHP

**Pipu PHP** is a modern microframework for PHP with support for authentication, CRUD, dependency injection, and a modular structure inspired by DDD and MVC principles. It comes pre-configured with PHP, JavaScript (via NPM), Mustache templates, and a complete Docker-based environment.

---

## 📦 Requirements

Make sure you have the following installed:

* ✅ [Docker + Docker Compose](https://docs.docker.com/compose/)
* ✅ [Node.js & NPM](https://nodejs.org/)
* ✅ [Composer](https://getcomposer.org/) *(only required if running without Docker)*

---

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/devvime/pipu-php.git
cd pipu-php
```

### 2. Copy the environment file

```bash
cp .env.example .env
```

Edit `.env` with your database and app configuration:

```env
DATABASE_SERVER=redis
DATABASE_TYPE=mysql
DATABASE_NAME=app_db
DATABASE_USER=root
DATABASE_PASSWORD=secret
EMAIL_HOST=smtp_host
EMAIL_USER=user_mail
EMAIL_PASSWORD=mail_password
EMAIL_PORT=smtp_port
SECRET=your_secret_here
```

---

## 🐳 Running with Docker

### 1. Build and start the containers

```bash
docker-compose up --build
```

Your application will be available at:

```
http://localhost:8080
```

* PHP runs inside the `php` container.
* Redis runs on port `6379`.

---

## 📁 Project Structure

```
pipu-php/
├── public/                    # Web root (index.php, frontend assets)
│   ├── index.php
│   └── ...
├── server/                   # Docker infrastructure
│   ├── nginx/
│   │   └── default.conf       # NGINX configuration
│   └── php/
│       └── Dockerfile         # PHP Dockerfile
├── src/                      # Application source code
│   ├── Application/
│   │   ├── Controller/
│   │   ├── Repository/
│   │   └── Service/
│   ├── Http/
│   │   ├── Dto/
│   │   ├── Guard/
│   │   ├── Middleware/
│   │   └── Routes/
│   ├── Shared/
│   │   ├── Helper/
│   │   ├── Database.php
│   │   ├── DTO.php
│   │   ├── Repository.php
│   │   ├── Token.php
│   │   └── View.php
│   ├── System/
│   │   ├── config/
│   │   │── database/
│   │   │   ├── migrations/
│   │   │   └── seeds/
│   │   └── bootstrap.php
│   ├── Views/                # Mustache templates
│   │   ├── components/
│   │   ├── pages/
│   │   └── index.js
│   └── main.php
├── Views/
├── vendor/                   # Composer packages
├── .env
├── .env.example
├── docker-compose.yml
├── composer.json
├── package.json
├── phinx.php                 # Phinx configuration
└── README.md
```

---

## 🧪 Composer Scripts

The `composer.json` file includes custom scripts for handling database migrations and seeders using **Phinx**:

```json
"scripts": {
  "create:migration": "vendor/bin/phinx create",
  "create:seed": "vendor/bin/phinx seed:create",
  "migrate": "vendor/bin/phinx migrate",
  "migrate:seed": "vendor/bin/phinx seed:run"
}
```

### 📘 Script Descriptions:

| Command                          | Description                                                              |
| -------------------------------- | ------------------------------------------------------------------------ |
| `composer create:migration Name` | Creates a new **migration** file under `src/System/database/migrations/` |
| `composer create:seed Name`      | Creates a new **seed** file under `src/System/database/seeds/`           |
| `composer migrate`               | Runs all pending migrations                                              |
| `composer migrate:seed`          | Executes all configured seeders                                          |

---

## ✨ Features

* ✅ User authentication (Login/Logout)
* ✅ Modular architecture (Controller, Repository, Service)
* ✅ Guards and Middleware support
* ✅ Mustache templating
* ✅ Dockerized environment with PHP + Redis
* ✅ Phinx migrations and seeding support
* ✅ Easy to extend and customize

---

## 🧰 Common Commands

| Command                 | Description                        |
| ----------------------- | ---------------------------------- |
| `docker-compose up`     | Start containers                   |
| `npm install`           | Install frontend JS dependencies   |
| `composer install`      | Install PHP dependencies           |
| `npm run dev`           | Compile JavaScript frontend assets |
| `composer migrate`      | Run database migrations            |
| `composer migrate:seed` | Run seeders                        |

---

## 📌 License

MIT – free to use, modify, and distribute.
