<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('subscriptions')->insert([
            'name' => 'Basic',
            'plan' => 'Basic',
            'owner_type' => 'Nederlands lol',
            'owner_id' => 1,
            'cycle_started_at' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
