# Bedword Filter Laravel

## Configuration
insall with composer


### Requirements
- [Laravel >=5.7](https://laravel.com/)
- [PHP >= 7.1](https://www.php.net/)

### Installation

`composer require maritho/badword`

### Configure

so you __either__ you have to add the service provide:

```
'providers' => [
    ...,
    \Maritho\Badword\BadwordServiceProvider::class,
]
```

### Usage

- `php artisan vendor:publish --provider="Maritho\Badword\BadwordServiceProvider"`

- `php artisan migrate`

- `php artisan db:seed --class="Maritho\Badword\Database\Seeds\BadwordTableSeeder"`
