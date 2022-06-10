<?php

namespace Database\Seeders;

use App\Models\Graph;
use App\Models\Detail;
use App\Models\Customer;
use App\Models\Inspiration;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
            'uuid' => Str::uuid(),
            'last_update' => now(),
        ]);

        Detail::create(['customer_id' => $customer->id]);
        Graph::create(['customer_id' => $customer->id]);
        Inspiration::create(['customer_id' => $customer->id]);
    }
}
