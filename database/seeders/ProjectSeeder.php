<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::factory()->count(5)->create()->each(function ($project) {
            // attach 2-4 images
            $count = rand(2, 4);
            for ($i = 0; $i < $count; $i++) {
                $project->images()->create(
                    array_merge(
                        \Database\Factories\ImageFactory::new()->definition(),
                        ['order' => $i]
                    )
                );
            }
        });
    }
}
