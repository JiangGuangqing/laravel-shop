<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('users', UsersController::class);

    $router->resource('products', ProductsController::class);

    $router->get('orders/{order}', 'OrdersController@show')->name('admin.orders.show');

    $router->get('orders', 'OrdersController@index')->name('admin.orders.index');

    $router->post('orders/{order}/ship', 'OrdersController@ship')->name('admin.orders.ship');

});
