# **Inventory Management System (Laravel)**

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo">
</p>

## **About This Project**
This is a simple **Inventory Management Web Application** built with **Laravel**.  
It includes core CRUD functionality and user authentication (Login & Logout).  

### Main Features
- User authentication (Login / Logout)
- CRUD operations for Posts (representing inventory items)
---

## **Features Overview**

| Feature | Description |
|----------|--------------|
| Authentication | Secure login and logout for users |
| CRUD Posts | Create, Read, Update, and Delete posts/items |

---

## **Installation Steps**

1. **Clone the repository**
   ```bash
   git clone https://github.com/username/repo.git
   cd repo
   
2. **Install dependencies**
   ````bash
   composer install
   npm install && npm run dev
   
3. **Create your environment file**
   ````bash
   cp .env.example .env
   php artisan key:generate
   
4. **Configure your database**
   Open .env and set your database credentials.
   
5. **Run migrations**
   ````bash
   php artisan migrate
6. Start the development server
   ````bash
   php artisan serve
7. **Open your browser and visit:**
   ````bash
   http://localhost:8000

**Usage Guide**
1. Register a new user or log in with an existing account
2. Add a new item via the “Add Barang” nav
3. Edit or delete items directly from the list
4. View your inventory neatly on the Barang

**Tech Stack**
- Laravel 10
- MySQL
- Blade Templates
- TailwindCSS   
