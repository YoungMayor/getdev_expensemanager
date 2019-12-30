<?php

use Illuminate\Database\Seeder;

class userExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\user_expenses::class, 50)->create();
    }
}
