# Router
 
<h2>1. Install composer</h2>
<code>composer install</code>

<hr>

<h2>2. Upload the views files to the /resources/views folder.</h2>

<hr>

<h2>Create a route</h2>

<h6>GET</h6>
<code>$router->map('GET', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');</code>

<h6>POST</h6>
<code>$router->map('POST', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');</code>

<h6>PATCH</h6>
<code>$router->map('PATCH', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');</code>

<h6>DELETE</h6>
<code>$router->map('DELETE', 'LINK TO ACCESS IT', 'LINK WHERE THE FILE IS LOCATED', 'NAME OF THE ROUTE');</code>
