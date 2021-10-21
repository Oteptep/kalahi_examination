<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
          [
            'region_code' => '050000000',
            'region_name' => 'REGION V [Bicol Region]'
          ],
          [
            'region_code' => '060000000',
            'region_name' => 'REGION VI [Western Visayas]'
          ],
          [
            'region_code' => '070000000',
            'region_name' => 'REGION VII [Central Visayas]'
          ],
          [
            'region_code' => '080000000',
            'region_name' => 'REGION VIII [Eastern Visayas]'
          ],
        ];

        for ($i = 0; $i < count($regions); $i++) {
            DB::table('lib_regions')->insert([
                'region_code' => $regions[$i]['region_code'],
                'region_name' => $regions[$i]['region_name'],
            ]);
            // $region = new Region();
            // $region->region_code = $regions[$i]['region_code'];
            // $region->region_name = $regions[$i]['region_name'];
        }
    }
}
