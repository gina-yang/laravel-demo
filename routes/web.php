<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoices', 'InvoiceController@index');

