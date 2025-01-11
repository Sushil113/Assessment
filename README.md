# Installation Guide
If you encounter any errors during installation, try the following steps:

## 1. Clone the Repository
```bash
git clone https://github.com/Sushil113/Assessment.git
```
Once cloned, navigate into the project directory:

```bash
cd <project-directory>
```
## 2. Install Dependencies
Run the following commands to install the necessary dependencies:

```bash
composer install
npm install
npm run build
```
## 2. Set Up Configuration
copy example.env and example.env to .env
Update the following database settings in the .env file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=assessment
DB_USERNAME=<username>
DB_PASSWORD=<password>
```

### 4. Set Up the Database
Migrate the database:
```bash
php artisan migrate:fresh
```
Seed the database:
```bash
php artisan db:seed
```
### 5. Start the Application
Serve the application locally using:

```bash
composer run dev
```