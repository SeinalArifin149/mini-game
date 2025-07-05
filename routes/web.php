<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games/{game}', function ($game) {
    $availableGames = ['tic-tac-toe', 'memory-game', 'quiz'];

    if (!in_array($game, $availableGames)) {
        abort(404);
    }

    return response()->file(public_path("games/$game/index.html"));
});

