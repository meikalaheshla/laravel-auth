<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "fausto";
        $user->email = "fausto@me.it";
        $user->email = bcrypt("password");
        
        
        $user->save();
    }
}
