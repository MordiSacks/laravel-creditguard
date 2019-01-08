# laravel-creditguard
a laravel package for creditguard

### Install

Require this package with composer using the following command:

```bash
composer require mordisacks/laravel-creditguard
```

Then publish the config group
```bash
php artisan vendor:publish --tag=config
```

Then set add this to your .env file
```dotenv
CREDITGUARD_URL=""
CREDITGUARD_USER=""
CREDITGUARD_PASSWORD=""
CREDITGUARD_TERMINAL_ID=""
CREDITGUARD_MID=""
```

### Usage
```php
\CreditGuard::execute($request);
```