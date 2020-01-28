<?php

use App\User;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAdminUser
 */
class CreateAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = User::firstOrCreate([
            'name' => 'admin',
            'email' => config('users.admin.email'),
            'password' => \Hash::make(config('users.admin.password'))
        ]);
        $user->assignRole('admin');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('email', config('users.admin.email'))->delete();
    }
}
