### Installation des dépendances (Frontend)

```bash
# Installer Vue 3, Pinia, Vue Router et Axios
npm install vue@next pinia vue-router axios

# Installer Tailwind CSS, PostCSS et Autoprefixer (en mode développement)
npm install -D tailwindcss postcss autoprefixer

# Initialiser Tailwind CSS avec PostCSS
npx tailwindcss init -p

### Installation des dépendances (Backend - Laravel)

```bash
# Installer les dépendances PHP avec Composer
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Lancer les migrations de base de données
php artisan migrate

# Installer les dépendances npm (si nécessaires côté Laravel)
npm install
npm run dev

# Lancer le serveur de développement Laravel
php artisan serve
