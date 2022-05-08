## Laravel 9 + Swagger

### Links
- [Laravel 9](https://laravel.com/docs/9.x)
- [OpenAPI/Swagger](https://swagger.io/specification/)
- [DarkaOnLine/L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger/wiki/Installation-&-Configuration)
- [Swagger PHP](DarkaOnLine/L5-Swagger)
- [How to...](https://ivankolodiy.medium.com/how-to-write-swagger-documentation-for-laravel-api-tips-examples-5510fb392a94) (Nice blog post)

### Adding `DarkaOnLine/L5-Swagger` to Project
- `composer require "darkaonline/l5-swagger"`
- `php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"`
- Add `@OA\Info` annotation to base `Controller`
- Add route annotation to controller method (see [CatsController](./app/Http/Controllers/CatsController.php))
- Run `php artisan l5-swagger:generate`


### To run:

- Copy `.env.example` to `.env` and update where appropriate
- `composer install`

Then if using sail:

- `php artisan key:generate`
- `./vendor/bin/sail up`
- Swagger UI: http://localhost/api/documentation
