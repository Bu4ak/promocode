#### A small model that generates a discount code

##### Usage example:
* Generate:
```php
$promo = \Bu4ak\Promocode\Models\Promocode::generate(10, 5);

route('promo', ['hash' => $promo->hash]); 
// invitation link:
// http://localhost/promo/356ce01e0258f76ad83a7734b28142f144264689e8983b38f0f5948bae6dda51

```
* Url handling:
```php
Route::get('/promo/{hash}', function ($hash) {
    $promo = \Bu4ak\Promocode\Models\Promocode::whereHash($hash)->firstOrFail();
        //or return view 
    return ['your code' => $promo->code, 'discount' => $promo->discount];
})->name('promo');
```

###### Also, you can immediately give the user a code instead of a link. For example, in email. And use a discount when creating an order or a paid service