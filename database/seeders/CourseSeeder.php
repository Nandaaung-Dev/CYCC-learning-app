<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'Beginner Chinese',
                'description' => 'An introductory course to learn basic Chinese phrases and vocabulary.',
                'rating' => '4.5',
                'duration' => '30 hours',
                'reviews' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Intermediate Chinese',
                'description' => 'A course for learners who have basic knowledge of Chinese and want to improve.',
                'rating' => '4.7',
                'duration' => '45 hours',
                'reviews' => '45',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Chinese',
                'description' => 'Advanced course for mastering Chinese language skills including speaking, reading, and writing.',
                'rating' => '4.8',
                'duration' => '60 hours',
                'reviews' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Culture and Language',
                'description' => 'Explore Chinese culture while learning the language.',
                'rating' => '4.6',
                'duration' => '35 hours',
                'reviews' => '29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Business Chinese',
                'description' => 'Learn Chinese for business and professional settings.',
                'rating' => '4.9',
                'duration' => '50 hours',
                'reviews' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Conversational Chinese',
                'description' => 'A course focusing on improving conversational skills in Chinese.',
                'rating' => '4.4',
                'duration' => '40 hours',
                'reviews' => '98',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese for Travelers',
                'description' => 'Learn essential Chinese phrases and vocabulary for travel.',
                'rating' => '4.3',
                'duration' => '20 hours',
                'reviews' => '57',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Writing Skills',
                'description' => 'Enhance your Chinese writing skills through structured exercises.',
                'rating' => '4.6',
                'duration' => '55 hours',
                'reviews' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Pronunciation Mastery',
                'description' => 'Master Chinese pronunciation with detailed lessons and practice.',
                'rating' => '4.8',
                'duration' => '25 hours',
                'reviews' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Idioms and Proverbs',
                'description' => 'Learn common Chinese idioms and proverbs and their meanings.',
                'rating' => '4.5',
                'duration' => '30 hours',
                'reviews' => '79',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Reading Comprehension',
                'description' => 'Improve your Chinese reading skills with various texts and exercises.',
                'rating' => '4.7',
                'duration' => '40 hours',
                'reviews' => '52',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese for Kids',
                'description' => 'Fun and interactive Chinese lessons designed for children.',
                'rating' => '4.9',
                'duration' => '15 hours',
                'reviews' => '61',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese History and Language',
                'description' => 'Learn about Chinese history while improving language skills.',
                'rating' => '4.6',
                'duration' => '50 hours',
                'reviews' => '39',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Characters and Calligraphy',
                'description' => 'Learn Chinese characters and the art of calligraphy.',
                'rating' => '4.7',
                'duration' => '60 hours',
                'reviews' => '42',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese Grammar and Syntax',
                'description' => 'Deep dive into Chinese grammar and sentence structure.',
                'rating' => '4.5',
                'duration' => '35 hours',
                'reviews' => '36',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
