<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ["Tipo 1", "Tipo 2", "Tipo 3", "Tipo 4", "Tipo 5"];
        foreach ($types as $type_value) {
            $new_type = new Type();
            $new_type->name = $type_value;
            $new_type->slug = Str::slug($type_value);
            $new_type->save();
        }
    }
}
