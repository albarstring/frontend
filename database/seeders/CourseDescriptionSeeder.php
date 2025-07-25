<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseDescriptions;

class CourseDescriptionSeeder extends Seeder
{
    public function run()
    {
        $cd = CourseDescriptions::create([
            'title' => 'Complete Web Development Bootcamp 2025',
            'tag' => 'Development',
            'overview' => 'Learn to code and become a full-stack web developer with HTML, CSS, JavaScript, Node.js, Express, MongoDB, and more!',
            'price' => 999000,
            'price_discount' => 799000,
            'instructor_name' => 'Angela Yu',
            'instructor_position' => 'Lead Instructor at App Brewery',
            'image_url' => 'images/webdev2025.jpg',
            'thumbnail' => 'thumbs/webdev2025-thumb.jpg',
            'video_count' => 85,
            'duration' => 45,
            'features' => [
                ['value' => 'Full Lifetime Access'],
                ['value' => 'Certificate of Completion'],
                ['value' => 'Downloadable Resources']
            ]
        ]);

        // PANGGIL createOrUpdateCourse() secara manual
        $cd->createOrUpdateCourse();
    }
}
