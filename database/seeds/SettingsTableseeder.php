<?php

use Illuminate\Database\Seeder;

class SettingsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'id'       => 1,
                'set_slug' => 'App Name',
                'set_name' => 'app_name',
                'value'    => str_random(10),
                'type'     => 1,
            ],
            [
                'id'       => 2,
                'set_slug' => 'Description',
                'set_name' => 'description',
                'value'    => 'وصف للموقع',
                'type'     => 2,
            ],
            [
                'id'       => 5,
                'set_slug' => 'Copyright',
                'set_name' => 'copyright',
                'value'    => 'جميع الحقوق محفوظة - الرياض 2016',
                'type'     => 1,
            ],
            [
                'id'       => 10,
                'set_slug' => 'Statue of App',
                'set_name' => 'statue',
                'value'    => 'online',
                'type'     => 0,
            ],
            [
                'id'       => 11,
                'set_slug' => 'Only ips can login if App was offline',
                'set_name' => 'ips',
                'value'    => '127.0.0.1,41.232.40.230',
                'type'     => 2,
            ],
            [
                'id'       => 3,
                'set_slug' => 'Logo ',
                'set_name' => 'logo',
                'value'    => '#',
                'type'     => 0,
            ],
            [
                'id'       => 12,
                'set_slug' => 'Email ',
                'set_name' => 'email',
                'value'    => '#',
                'type'     => 1,
            ],
        ]);
    }
}
