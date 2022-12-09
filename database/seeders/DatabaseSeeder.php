<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;
use SebastianBergmann\Comparator\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $random1 = rand(100, 500);
        $random2 =  rand(1, 3);
        // on creer 10 utilisateurs,  chaque utilisateur à 3 commandes, chaque commande contient 5 produits
       User::factory()
            ->count(10)
            ->has(
                Order::factory()
                    ->count(3)
                    ->hasAttached(
                        Product::factory()->count(5),
                        ['total_price' => $random1, 'total_quantity' => $random2]
                    )
            )
            ->create();
    }
}
