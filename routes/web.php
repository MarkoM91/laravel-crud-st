<?php

Route::get('/', function () {
    return view('layout.smartphone-layout');
});

Route::resource('str', "SmartphoneController");
