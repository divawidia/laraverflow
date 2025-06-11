<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return \App\Http\Resources\QuestionResource::collection(\App\Models\Question::with('user')->latest()->paginate(15));
})->name('questions.index');

Route::get('/questions/{id}', function ($id) {
    return Inertia::render('Questions/Show', [
        'question' => [
            'id' => $id,
            'title'=> 'Question 1',
        ]
    ]);
})->name('questions.show');
