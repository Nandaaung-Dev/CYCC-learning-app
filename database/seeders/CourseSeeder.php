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
                'title' => 'HANYU 1',
                'description' => 'An introductory course to learn basic Chinese phrases and vocabulary.',
                'duration' => '1',
                'fee' => '30000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 2',
                'description' => 'A follow-up course to deepen understanding of basic Chinese and introduce more complex structures.',
                'duration' => '2',
                'fee' => '35000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 3',
                'description' => 'Advanced course focusing on conversational skills and advanced grammar.',
                'duration' => '2',
                'fee' => '40000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 4',
                'description' => 'An advanced course covering more complex sentence structures and vocabulary.',
                'duration' => '2',
                'fee' => '42000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 5',
                'description' => 'A high-level course focusing on specialized topics and advanced language use.',
                'duration' => '3',
                'fee' => '45000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 6',
                'description' => 'An advanced course designed to refine language skills and expand cultural understanding.',
                'duration' => '3',
                'fee' => '47000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU 7',
                'description' => 'An intensive course aimed at achieving fluency in Chinese.',
                'duration' => '4',
                'fee' => '50000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HANYU PINYIN FOR BEGINNERS',
                'description' => 'A beginner’s guide to learning Pinyin, the phonetic system of Chinese.',
                'duration' => '1',
                'fee' => '20000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese for HSK 1',
                'description' => 'A preparatory course for the HSK Level 1 exam focusing on essential vocabulary and grammar.',
                'duration' => '1',
                'fee' => '30000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese for HSK 2',
                'description' => 'A preparatory course for the HSK Level 2 exam covering intermediate vocabulary and grammar.',
                'duration' => '2',
                'fee' => '35000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Chinese for HSK 3',
                'description' => 'A preparatory course for the HSK Level 3 exam, focusing on advanced vocabulary and grammar.',
                'duration' => '3',
                'fee' => '40000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
