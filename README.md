# 🔐 Authentication System

A simple and secure user authentication system built with HTML, Bootstrap, PHP, MySQL, jQuery, and AJAX.

## 🚀 Features

- ✅ User Sign-Up (`register.html` → `api/register.php`)
- ✅ User Login (`login.html` → `api/login.php`)
- ✅ User Logout (`api/logout.php`)
- ✅ Redirects to `dashboard.php` upon successful login
- ✅ Client-side form validation (`script.js`)
- ✅ Server-side validation and SQL security using PDO
- ✅ Smooth client-server interaction via AJAX

---

## 🛠️ Tech Stack

| Layer       | Technology               |
|-------------|--------------------------|
| Frontend    | HTML, CSS, jQuery, Bootstrap |
| Backend     | PHP (with PDO)            |
| Database    | MySQL                     |
| Interaction | AJAX                      |

---

## 📁 Folder Structure

project-root/
│
├── api/ # Backend API endpoints
│ ├── login.php
│ ├── logout.php
│ └── register.php
│
├── asset/
│ ├── css/
│ │ └── style.css
│ ├── img/
│ │ └── (images)
│ └── js/
│ └── script.js
│
├── config/
│ └── db.php # Database connection (PDO)
│
├── dashboard.php # User dashboard after login
├── index.php # Main page (can redirect to login)
├── login.html # Login form
├── register.html # Register form
├── LICENSE
└── README.md
