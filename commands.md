---
title: COMMANDS
layout: template
filename: commands.md
---

## to start the app make sure you have docker running

```
./vendor/bin/sail up
```

or

```
sail up
```

### edit values on .env file to connect with database.
### make sure your database is also running on docker, otherwise click play. (running (6/6)

## connect the db with details added on the .env file.

## to create a new migration:

```
sail artisan make:migration migration_name
```

### location for migration: database/migrations

## to create a controller:

```
sail artisan make:controller controller-name
```

## to create a model:

```
sail artisan make:model model-name
```
### location for controllers: app/Models

### Roll back migrations (All of them):
```
sail artisan migrate:rollback
```
### Roll back migrations (Only one):
```
sail artisan migrate:rollback --step=1
```

### Run migration command:
#### This command run all migrations not ran so far
```
sail artisan migrate
```

### location for controllers: app/Http/Controllers
