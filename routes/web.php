<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function (){
    return view('app');
});

Route::get('/ninjas', function () {
    $ninjas = [
        [
        "name" => "Mario",
         "skill" => 25,
         "id" => 1
        ],

        [
        "name" => "Luigi",
         "skill" => 17,
         "id" => 2
        ],

        [
        "name" => "Bowser",
         "skill" => 99,
         "id" => 3
        ],

        [
        "name" => "Peach",
         "skill" => 5,
         "id" => 4
        ],
    ];

    return view('ninjas.index',
    [
        "greeting" => "hello",
        "ninjas" => $ninjas
    ]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ["id" => $id]);
});
