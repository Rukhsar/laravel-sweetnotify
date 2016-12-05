# Laravel SweetNotify

Add Sweet Alert notifications to Laravel application with ease.

## Installation

Install using composer

```
composer require rukhsar/sweet-notify
```

After installing this package you have to add the service provider for this package to your `config/app.php` .

```php

Rukhsar\SweetNotify\SweetNotifyServiceProvider::class
```

Copy the required assets by using

```
php artisan vendor:publish --tag=sweetnotify
```

This will copy the `sweetalert.css` and `sweetalert.js` to your public/css and public/js.

Then in your master view or layout add

```html
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
```

and the JS script tag before your `</body>`

```html
<script src="js/sweetalert.js"></script>
```

Include the SweetNotify template in your main view or layout file right after the script tag above.

```php
    @include('SweetNotify::sweetnotify')
```

## Usage

You can use SweetNotify notifications in you controllers, events and jobs. But I prefer to use them in controller just before redirecting to a view.

Following methods are available to use.

```php

sweet('Title','Your Message');

sweet()->error('Title','Your Message');

sweet()->success('Title','Your Message');

sweet()->overlay('Title','Your Message');

```

### Issues

If you have any question or issue, please open an Issue and I will try to fix it as soon as possible.

### Thanks to

[Sweet Alert - http://t4t5.github.io/sweetalert/](http://t4t5.github.io/sweetalert/)

