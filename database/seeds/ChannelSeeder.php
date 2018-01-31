<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = [
            [
                'name' => 'Radio'
            ],

            [
                'name' => 'School'
            ],

            [
                'name' => 'Social Media'
            ],

            [
                'name' => 'Friends & Family'
            ],

            [
                'name' => 'Others'
            ]

        ];

        foreach ($channels as $channel){
            Channel::create($channel);
        }
    }
}
