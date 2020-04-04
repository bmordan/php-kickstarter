# Symfony Kickstarter

![screen shot](https://user-images.githubusercontent.com/4499581/78456804-c37e5180-769d-11ea-8ccb-3853f3fb5737.png)

## Get started

clone this repo. Then run `composer install` and then 

## Model

```
php bin/console make:entity Project
php bin/console make:entity Pledge
```
Then start a wizard for creating the relationships
```
php bin/console make:entity
```
Add a field, then select 'relation' as the field type and follow the prompts

```
php bin/console make:migration
```
Don't forget to then create and run the migrations
```
php bin/console doctrine:migrations:migrate
```

## Controllers

```
php bin/console make:controller
```

## Helpers

```
composer require symfony/var-dumper
```

