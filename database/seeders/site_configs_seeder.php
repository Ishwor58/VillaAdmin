<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class site_configs_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siteConfigs = [
            [
                'site_key' => 'phone',
                'site_value' => '9827114205',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'site_key' => 'location',
                'site_value' => 'Lamachour,Pokhara',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'site_key' => 'email',
                'site_value' => 'villa@gmail.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'site_key' => 'map',
                'site_value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1757.1077071365346!2d83.97193105!3d28.2614843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937fcb0643d1%3A0x1b63bf7043241499!2sLamachaur%2C%20Pokhara%2033700!5e0!3m2!1sen!2snp!4v1713345469946!5m2!1sen!2snp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more configuration entries as needed
        ];

        // Insert the site configurations into the siteconfigs table
        DB::table('site_configs')->insert($siteConfigs);
    }
}


