<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/films', function () {

    $data = [
        'genres' => [
            'Science Fiction' => ['Star Trek', 'Star Wars', 'Alien'],
            'Drama' => ['Les Amant de Pont Neuf', 'War & Peace', 'Bridehead Revisited'],
            'Crime' => ['Heat', 'Pulp Fiction', 'Messerine']
        ]
    ];

    return view('films', $data);
});

Route::get('/names', function () {
    
    $data =
    [
        'nomi' => ['Alex', 'Joseph', 'Katherin', 'Paul']
    ];

    return view('names', $data);
});

Route::get('/cars', function () {
    
    $data =
    [
        'cars' => [
            'car1' => [
                'name' => 'V. Golf VII',
                'year' => '2020'
            ],
            'car2' => [
                'name' => 'A. Giulietta',
                'year' => '2010'
            ],
            'car3' => [
                'name' => 'R. Espace',
                'year' => '2005'
            ],
            'car4' => [
                'name' => 'F. Fiesta',
                'year' => '2005'
            ],
        ]
    ];

    return view('cars', $data);
});
