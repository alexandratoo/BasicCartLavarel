<?php Route::get('/', [
  'uses' => 'ProductController@getIndex',
  'as'=> 'product.index'
]
});
Route::get('/add-to-cart/{id}', [
  'uses => 'ProductController@getAddToCart
  'as'=> 'product.addToCart'
]);
Route::get('/shoppingCart', [
  'uses => 'ProductController@getCart
  'as'=> 'product.addToCart'
])
Route::get("/checkout", [
  'uses'=> 'ProductController@getCheckout',
  'as' => 'checkout'
]);
Route::post('/checkout', [
  'uses'=> 'ProductController@postCheckout',
  'as' => 'checkout'
]);
