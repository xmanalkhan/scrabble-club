# Scrabble Club!

A Laravel web application to manage Scrabble games, members, and track leaderboard rankings.

## Getting Started :)

### 1. Clone the Repository

```bash
git clone https://github.com/xmanalkhan/scrabble-club.git
cd scrabble-club
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Up Environment

Copy the `.env.example` file and generate your application key:
```bash
cp .env.example .env
php artisan key:generate
```
Then update your `.env` file with your local database credentials:

```ini
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=scrabble_club  
DB_USERNAME=scrabble_club  
DB_PASSWORD=password
```

### 4. Migrate & Seed the Database

```bash
php artisan migrate:fresh --seed
```

This will create the necessary tables and seed the database with:

- 20 members
- 30 games
- Realistic scores automatically assigned

## Features

- Laravel MVC architecture
- Eloquent relationships with pivot table (many-to-many: members & games)
- Database migrations and seeders for demo data
- Full CRUD for Members and Games
- Blade views with simple, responsive layout
- Dynamic validation logic for game scores
- Flash messages for user feedback
- Clean and consistent Git commit history
