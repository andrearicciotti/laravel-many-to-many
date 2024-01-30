<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['web-app', 'api', 'not specified'];
        
        for ($i=0; $i < count($types); $i++) { 
            $row = $types[$i];
            $type = new Type;
            $type->name = $row;
            $type->slug = Str::slug($type->name);

            $type->save();
        }
    }
}
