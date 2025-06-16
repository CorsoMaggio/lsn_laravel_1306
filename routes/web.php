<?php


use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/chisono', [PageController::class, 'chisono']);
Route::get('/contatti', [PageController::class, 'contact']);


Route::get('/chisono', function () {
    $aboutme = ['Mother', 'Runner', 'Web Developer', 'Animal lover'];
    return view('Chisono', ['aboutme' => $aboutme]);
});

Route::get('/contatti', function () {
    $contatti = [
        [
            'id' => 1,
            'title' => 'LinkedIn',
            'description' => 'Il mio profilo LinkedIn',
        ],
        [
            'id' => 2,
            'title' => 'Behance',
            'description' => 'Vedi il mio Behance',
        ],
        [
            'id' => 3,
            'title' => 'Gmail',
            'description' => 'Mandami email',
        ]
    ];
    return view('Contatti', ['contatti' => $contatti]);
});

Route::get('/dettaglio/{id}', function ($id) {
    $contatti = [
        [
            'id' => 1,
            'title' => 'LinkedIn',
            'description' => 'Il mio profilo LinkedIn',
        ],
        [
            'id' => 2,
            'title' => 'Behance',
            'description' => 'Vedi il mio Behance',
        ],
        [
            'id' => 3,
            'title' => 'Gmail',
            'description' => 'Mandami email',
        ]
    ];

    foreach ($contatti as $contact) {
        if ($id == $contact['id']) {
            return view('detail', ['contact' => $contact]); //creare file detail con html uguale

        }
    }
    abort(404);
});


Route::get('profilo/Leysan', function () {
    return 'profilo di Leysan';
});

//Rotte parametriche


Route::get('profilo/{nome}', function ($nome) {
    return 'Profilo di ' . $nome;
});


Route::get('/somma/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});


Route::get('/sottract/{num3}/{num4}', function ($num3, $num4) {
    return $num3 - $num4;
});

Route::get('/welcome/{username}', function ($username) {
    return 'Welcome ' . $username;
});
