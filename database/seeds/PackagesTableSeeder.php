<?php

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Packagist\Packagist;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $packagist = new Packagist(new Client());
        $faker = Faker\Factory::create();

        foreach ($packagist->getPackagesByVendor('rainieren') as $package) {
            DB::table('packages')->insert([
                'name' => ucfirst(substr($package[0], strrpos($package[0], '/') + 1)),
                'creator' => ucfirst(explode('/', $package[0])[0]),
                'description' => $packagist->findPackageByName($package[0])["package"]["description"],
                'subscription_id' => 1,
                'price' => 0.99,
                'composer_package' => $package[0],
                'downloads' => $packagist->findPackageByName($package[0])["package"]["downloads"]["total"],
                'token' => Str::random(32),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        foreach(range(1, 30) as $index) {
            DB::table('packages')->insert([
                'name' => $faker->firstName,
                'creator' => $faker->firstName,
                'description' => $faker->paragraph,
                'subscription_id' => 1,
                'price' => 0.99,
                'composer_package' => $faker->firstName . "/" . $faker->domainWord,
                'downloads' => rand(0,1000),
                'token' => Str::random(32),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }


    }
}
