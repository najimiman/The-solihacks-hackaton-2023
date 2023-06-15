<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Name',
            'email' => 'test@example.com',
        ]);

    for ($j = 0; $j < 10; $j++) {
        $faker = Faker::create();
        $user = DB::table('clients')->insertGetId([
            'Name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'Adress' => $faker->streetAddress.''.$faker->city.''.$faker->country.''.$faker->postcode ,
            'numero_telephone' => $faker->phoneNumber ,
            'Cin' => "K".Str::random(8),
            'Code_client' => Str::random(8)."client"
        ]);
        for ($i = 0; $i < 10; $i++) {
        $service = DB::table('services')->insertGetId([
            'prix' => Str::random(5),
            'Date_abonnement' => Carbon::now()->addDays($i),
            'nom' => Str::random(12),
        ]);
        }

        $mode = DB::table('mode_payments')->insertGetId([
            'mode' => Str::random(10)
        ]);

        for ($i = 0; $i < 10; $i++) {
        DB::table('factures')->insert([
            'Date_facture' => Carbon::now()->addDays(rand(1, 30))->format('Y-m-d'),
            'Client_id' => $user,
            'services_id' => $service,
            'mode_payment_id' => $mode,
        ]);
        }
    }
    }
}
