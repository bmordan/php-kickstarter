# Symfony Kickstarter

![screen shot](https://user-images.githubusercontent.com/4499581/78456804-c37e5180-769d-11ea-8ccb-3853f3fb5737.png)

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

Don't forget to then
```
php bin/console make:migration
```

## Controllers

```
php bin/console make:controller
```

## Helpers

```
composer require symfony/var-dumper
```

