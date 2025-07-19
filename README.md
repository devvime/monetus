# 🚀 Pipu PHP

**Pipu PHP** is a lightweight starter boilerplate for building PHP web applications with user authentication and full CRUD functionality. It comes pre-configured with PHP, JavaScript (via NPM), and Mustache templates.

---

## 📦 Requirements

Before getting started, make sure you have the following installed:

* ✅ [PHP 7.4+](https://www.php.net/)
* ✅ [Composer](https://getcomposer.org/)
* ✅ [Node.js & NPM](https://nodejs.org/)

---

## ⚙️ Installation

Clone the repository and install PHP and JavaScript dependencies.

```bash
git clone https://github.com/devvime/pipu-php.git
cd pipu-php
```

### 1. Install PHP dependencies

```bash
composer install
```

### 2. Install JS dependencies

```bash
npm install
```

### 3. Set up environment variables

Copy the example `.env` file and edit the values as needed (especially database configuration):

```bash
cp .env.example .env
```

Open `.env` and update values like:

```env
DATABASE_SERVER = 'localhost'
DATABASE_TYPE = 'mysql'
DATABASE_NAME = ''
DATABASE_USER = ''
DATABASE_PASSWORD = ''
SECRET = ''
```

---

## 🧪 Development

### Start PHP development server

```bash
php -S localhost:8000 -t public
```

> This serves the app from the `public/` directory.

### Compile frontend JavaScript

```bash
npm run dev
```

---

## ✨ Features

* 🔐 User authentication (login/logout)
* 📝 Full CRUD for users
* 🗂️ Mustache template engine integration
* 📁 Clean MVC folder structure
* 📦 Environment configuration via `.env`
* 💡 Easy to extend and customize

---

## 📁 Folder Structure

```
pipu-php/
├── public/             # Web root (index.php, assets)
│   ├── css/
│   ├── js/
│   ├── .htaccess
│   └── index.php
├── src/                # Application logic
│   ├── Controller/
│   ├── Model/
│   └── View/           # Mustache templates
├── config/             # Configuration files
│   └── config.php
├── database/           # SQL scripts or migrations
├── .env.example        # Example environment config
├── composer.json
├── package.json
└── README.md
```

---

## 🧰 Scripts

| Command            | Description               |
| ------------------ | ------------------------- |
| `composer install` | Install PHP dependencies  |
| `npm install`      | Install JS dependencies   |
| `php -S ...`       | Start PHP server          |
| `npm run dev`      | Compile JavaScript assets |

---

## 📌 License

MIT License – feel free to use, modify, and share.
