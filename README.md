## Model

```
php bin/console make:entity Project
php bin/console make:entity Pledge
php bin/console make:entity User
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