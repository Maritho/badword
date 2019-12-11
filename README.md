# Badword Filter Laravel

## Configuration
install with composer


### Requirements
- [Laravel >=5.7](https://laravel.com/)
- [PHP >= 7.1](https://www.php.net/)

### Installation

`composer require maritho/badword`

### Configure

so you __either__ you have to add the service provider:

```
'providers' => [
    ...,
    \Maritho\Badword\BadwordServiceProvider::class,
]
```

### Publish and Migrate

- `php artisan vendor:publish --provider="Maritho\Badword\BadwordServiceProvider"`

- `php artisan migrate`

- `php artisan db:seed --class="Maritho\Badword\Database\Seeds\BadwordTableSeeder"`

### Usage
```
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maritho\Badword\Badword;

class OrderController extends Controller
{
    public function test(Request $request)
    {
        $data = 'Kamu adalah xxx dan xrated';

        // optional extract badword result true or false
        return Badword::check($data, true);
    }
}

```
