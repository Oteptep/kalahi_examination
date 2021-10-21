<?php

use Illuminate\Database\Seeder;
use App\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexs = [
          'Male',
          'Female',
          'Unknown'
        ];

        for ($i = 0; $i < count($sexs); $i++) {
            DB::table('lib_sex')->insert([
                'name' => $sexs[$i],
            ]);
            // $sex = new Sex();
            // $sex->name = $sexs[$i];
        }
    }
}
