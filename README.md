### Local deploy steps:

---
1.`composer install`


2.`php artisan migrate`


3`php artisan key:generate`

### Code tips

Check your code by **Code Sniffer** before commit
```
./vendor/bin/phpcs --standard=PSR12 ./app
```
and **PHP Stan**
```
./vendor/bin/phpstan analyse
```
**testing env**

`php artisan config:cache --env=testing`

