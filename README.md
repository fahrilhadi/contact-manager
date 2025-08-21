# Contact Manager App

A **lightweight contact manager** built using **Laravel 12** and **TailwindCSS**, allowing you to **add, edit, and organize contacts** with ease.

## Screenshots

**Index Page (Empty State — No Contacts Yet)**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/63d1a26c-c990-4205-b2c9-3712539d3603" /><br>

**Index Page (With Contacts)**

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/22a7eb94-4223-4d59-b5c6-1a1777fbf5e5" /><br>

**Create Contact**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/1ae558f6-1f92-48ce-83b5-5e1398f2ea00" /><br>  

**Edit Contact**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/296d05b8-6ff9-46c8-b234-e51c785faa77" /><br>  

**Delete Confirmation**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/b8557f7b-949b-4604-ac7e-f0061a97b288" /><br>  

## Tech Stack

- **Backend:** Laravel 12  
- **Frontend:** Blade Templates + TailwindCSS  
- **Database:** MySQL 
- **Version Control:** GitHub  

## Quick Start

```bash
# Clone repository
git clone https://github.com/fahrilhadi/contact-manager.git
cd contact-manager

# Install dependencies
composer install
npm install
npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Serve application
php artisan serve
