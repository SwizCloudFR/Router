# Router
 
<h2>1. Install composer</h2>
```
composer install
```

<hr>

<h2>2. Upload the views files to the /resources/views folder.</h2>

<hr>

<h2>Create a route</h2>

<h6>GET</h6>
```php
$router->map('GET', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');
```

<h6>POST</h6>
```php
$router->map('POST', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');
```

<h6>PATCH</h6>
```php
$router->map('PATCH', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');
```

<h6>DELETE</h6>
```php
$router->map('DELETE', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');
```