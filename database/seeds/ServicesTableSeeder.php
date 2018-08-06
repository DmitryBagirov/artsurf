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
        $services = ['Дизайн и проектирование', 'Разработка',
            'Оптимизация и продвижение', 'Сопровождение', 'Продвижение в SMM',
            'Управление репутацией'];
        foreach ($services as $service) {
            DB::table('services')->insert([
                'service' => $service,
            ]);
        }
    }
}
