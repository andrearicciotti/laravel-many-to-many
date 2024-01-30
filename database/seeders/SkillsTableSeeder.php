<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = ['database', 'frontend', 'backend'];

        foreach ($skills as $skill) {
            $newSkill = new Skill();
            
            $newSkill->name = $skill;
            $newSkill->save();
        }
    }
}
