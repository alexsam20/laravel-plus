<?php

use App\Livewire\ShowCourse;
use App\Livewire\WatchEpisode;
use Illuminate\Support\Facades\Route;

Route::get('/courses/{course}', ShowCourse::class)->name('courses.show');
Route::get('/courses/{course}/episodes/{episode?}', WatchEpisode::class)->name('courses.episodes.show');
