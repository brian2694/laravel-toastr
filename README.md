Inspired in whossun/laravel-toastr..

I cloned the repository brian2694/laravel-toastr to update to Laravel 5.5

# laravel-toastr

| Laravel Version     | Is Working? |
| ---      | ---       |
| 10.x | Yes         |
| 9.x | Yes         |
| 8.x | Yes         |
| 7.x | Yes        |
| 6.x | Yes        |
| >= 5.5 | Yes        |
| <= 5.4 | Yes        |


### install

Using Composer

    composer require brian2694/laravel-toastr

### Laravel >= 5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the service provider to `config/app.php`

```php
Brian2694\Toastr\ToastrServiceProvider::class,
```

Optionally include the Facade in config/app.php if you'd like.

```php
'Toastr'  => Brian2694\Toastr\Facades\Toastr::class,
```


### Options

You can set custom options for Reminder. Run:

    php artisan vendor:publish

to publish the config file for toastr.

You can see [toastr's documentation](http://codeseven.github.io/toastr/demo.html) to custom your need.


> You can use toastr() function available.

### Dependencies

jQuery [toast](https://github.com/CodeSeven/toastr), you need to add css and js to your html.

### Basic


* Toastr::info('message', 'title', ['options']);

* Toastr::success('message', 'title', ['options']);

* Toastr::warning('message', 'title', ['options']);

* Toastr::error('message', 'title', ['options']);

* Toastr::clear();

* Toastr()->info('message', 'title', ['options']);

```php
<?php

Route::get('/', function () {
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

    return view('welcome');
});
```

Then

You should add `{!! Toastr::message() !!}` to your html.

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
		<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>
```

### Use ViteJs / script type defaults to module

You can also set Toastr to use vitejs by default by registering `Toastr::useVite()` inside the `AppServiceProvider`.

```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Brian2694\Toastr\Facades\Toastr;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Toastr::useVite();
    }
}
```

Upon registering, you can now use `Toastr::message()` and it set the script type to module.



## Contributors

We'd like to thank the following individuals for their contributions to this project:

- [Antonio Bruno](https://github.com/antonio8101) - Set DOC on the Facade class.
- [aoradev44](https://github.com/aoradev44) - Set toastr message script type to module for using with vite
