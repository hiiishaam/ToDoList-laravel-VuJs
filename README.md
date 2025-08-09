# ToDoList Laravel & Vue.js

## Présentation

Ce projet est une application de gestion de tâches (ToDoList) réalisée avec un backend Laravel et un frontend Vue 3.  
Il utilise Pinia pour la gestion d’état, Vue Router pour la navigation, Axios pour les requêtes HTTP, et Tailwind CSS pour le style.

---

## 🚀 Installation

### 1. Installation du Backend (Laravel)

```bash
# Cloner le dépôt
git clone https://github.com/hiiishaam/ToDoList-laravel-VueJs.git
cd ToDoList-laravel-VueJs

# Installer les dépendances PHP
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Configurer la base de données dans .env

# Générer la clé d'application Laravel
php artisan key:generate

# Lancer les migrations
php artisan migrate

# Installer les dépendances npm du backend (si besoin)
npm install
npm run dev

# Lancer le serveur Laravel
php artisan serve

# ToDoList Laravel & Vue.js


---

2. Installation du Frontend (Vue 3 + Tailwind)


cd frontend

# Installer Vue 3, Pinia, Vue Router et Axios
npm install vue@next pinia vue-router axios

# Installer Tailwind CSS, PostCSS et Autoprefixer
npm install -D tailwindcss postcss autoprefixer

# Initialiser Tailwind CSS avec PostCSS
npx tailwindcss init -p

# Lancer le serveur de développement
npm run dev
