# SubShare

A full-stack note-taking web application built with **Laravel 12**, **PostgreSQL**, **Blade**, **JavaScript**, and **Vite**.

SubShare is designed to provide a simple interface for creating, managing, organizing, searching, and archiving personal notes.

## About the Project

SubShare is a web-based note management application developed as a learning project while exploring the Laravel framework and modern full-stack web development.

The application focuses on common note-taking features such as:

- Creating and editing notes
- Deleting notes
- Archiving and unarchiving notes
- Organizing notes using tags
- Filtering notes by tags
- Searching notes by title, content, or tags
- Responsive user interface
- Theme and font customization
- Keyboard-friendly navigation

The project is being developed with Laravel's MVC architecture and follows Laravel conventions for routing, controllers, models, migrations, validation, and database interaction.

## Tech Stack

| Technology     | Purpose                       |
| -------------- | ----------------------------- |
| **Laravel 12** | Backend web framework         |
| **PHP 8.2**    | Server-side programming       |
| **PostgreSQL** | Database                      |
| **Blade**      | Server-side templating        |
| **HTML5**      | Page structure                |
| **CSS**        | Styling and responsive layout |
| **JavaScript** | Client-side interactions      |
| **Vite**       | Frontend asset development    |
| **Git**        | Version control               |

## Project Structure

The project follows the standard Laravel structure:

```text
subshare/
├── app/
│   ├── Http/
│   ├── Models/
│   └── ...
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── vite.config.js
```

## Database Design

The planned database uses PostgreSQL with the following main entities:

```text
users
  │
  │ 1
  │
  │ M
notes
  │
  │ M
  │
  │ M
tags

note_tag
```

### Main Tables

**users**

Stores user account information.

**notes**

Stores notes created by users.

Example fields:

```text
id
user_id
title
content
is_archived
created_at
updated_at
```

**tags**

Stores reusable tags for organizing notes.

**note_tag**

Pivot table that connects notes and tags through a many-to-many relationship.

## Core Features

### Note Management

Users can create, view, edit, and delete notes.

### Archive

Notes can be archived when they are no longer part of the user's active notes.

Archived notes can later be restored.

### Tags

Notes can be associated with multiple tags, allowing users to organize their notes into different categories.

### Search

The application supports searching notes based on relevant note information such as:

- Title
- Content
- Tags

### Filtering

Users can filter notes using their assigned tags and view archived notes separately.

### Customization

The frontend is designed to support different visual preferences, including theme and font selection.

## Laravel Architecture

SubShare follows Laravel's MVC-style application structure.

```text
Browser
   │
   ▼
Routes
   │
   ▼
Controller
   │
   ▼
Model / Eloquent
   │
   ▼
PostgreSQL
   │
   ▼
Controller
   │
   ▼
Blade View
   │
   ▼
Browser
```

For example:

```text
User requests /notes
        ↓
routes/web.php
        ↓
NotesController
        ↓
Note Model
        ↓
PostgreSQL
        ↓
Blade View
        ↓
HTML displayed in browser
```

## Local Development Setup

### Requirements

Make sure the following are installed:

- PHP 8.2 or compatible version
- Composer
- PostgreSQL
- Node.js and npm
- Git

### 1. Clone the Repository

```bash
git clone <repository-url>
cd subshare
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
```

### 4. Create Environment File

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows Command Prompt, you can use:

```cmd
copy .env.example .env
```

Update the database configuration in `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=subshare
DB_USERNAME=postgres
DB_PASSWORD=your_postgres_password
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Run Database Migrations

```bash
php artisan migrate
```

### 7. Start Laravel

```bash
php artisan serve
```

The application will normally be available at:

```text
http://127.0.0.1:8000
```

### 8. Start Vite

In another terminal:

```bash
npm run dev
```

Vite handles the development frontend assets and provides hot module replacement for supported CSS and JavaScript changes.

## Development Commands

### Start Laravel

```bash
php artisan serve
```

### Start Vite

```bash
npm run dev
```

### Run migrations

```bash
php artisan migrate
```

### Roll back the latest migration batch

```bash
php artisan migrate:rollback
```

### Create a model and migration

```bash
php artisan make:model Note -m
```

### Create a controller

```bash
php artisan make:controller NoteController
```

### View available routes

```bash
php artisan route:list
```

## Project Status

SubShare is currently under development.

The project is being built incrementally while learning Laravel concepts and applying them to a complete full-stack application.

Current development areas include:

- Laravel project setup
- PostgreSQL database configuration
- Database migrations
- Blade views
- Routing
- Note management
- Tags and filtering
- Search functionality
- Authentication
- Frontend improvements

## Learning Goals

This project is also intended to provide practical experience with:

- Laravel MVC architecture
- Routing and controllers
- Blade templating
- Eloquent ORM
- Database migrations
- PostgreSQL relationships
- Form validation
- Authentication and authorization
- JavaScript integration
- Vite and frontend asset management
- CRUD application development
- Git and version control

## License

This project is intended primarily for learning and educational purposes.
