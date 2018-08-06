<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ['Замесить глину', 'Сделать кусь', 'Погладить по головке'];
        foreach ($services as $service) {
            DB::table('services')->insert([
                'service' => $service,
            ]);
        }
    }
}
