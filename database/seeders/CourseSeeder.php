<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Episode;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()
            ->state([
                'title' => 'Filament Bootcamp',
                'tagline' => 'Start creating your own Admin Panels today',
                'description' => 'You want to assign a specific value to a variable only if it’s set and not null and otherwise use a static default value.'
            ])
            ->for(User::factory()->state([
                'name' => 'Instructor',
                'email' => 'i@i.i',
            ])->instructor(), 'instructor')
            ->has(Episode::factory(3)->state(new Sequence(
            [
                'title' => 'Introduction',
                'overview' => 'Using a null-coalescing operator (??) as follows will use the first value only if it is set and not null',
                'vimeo_id' => '945284999',
                'length_in_minutes' => 3,
                'sort' => 1,
            ],
            [
                'title' => 'Tour',
                'overview' => 'PHP’s null-coalescing operator is a newer feature introduced in PHP 7.0. It’s been referred to as syntactic sugar to replace the shorthand version of PHP’s ternary operator, ?:',
                'vimeo_id' => '940719036',
                'length_in_minutes' => 4,
                'sort' => 2,
            ],
            [
                'title' => 'Installation',
                'overview' => 'Both of the following lines of code are functionally equivalent, but the ternary form will trigger a notice if the expression being evaluated is undefined',
                'vimeo_id' => '945850281',
                'length_in_minutes' => 7,
                'sort' => 3,
            ]
        )), 'episodes')
        ->create();
    }
}
