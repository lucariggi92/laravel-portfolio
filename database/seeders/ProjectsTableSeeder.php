<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
    for($i=0; $i < 10; $i++)
        {
            $project = new Project();

            $project->title = $faker->sentence(); 
            $project->description = $faker->paragraphs(3, true);
            

            $project->link_github = 'https://github.com/tuo-utente/' . $faker->slug();
            $project->type_id = rand(1,5);
            $project->save();

             $project->technologies()->attach(array_rand(array_flip(range(1, 7)), rand(1, 3)));
         
        }
    }

    
}
