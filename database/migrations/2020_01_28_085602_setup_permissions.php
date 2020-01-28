<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

class SetupPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Role::where('name', 'admin')->delete();
        Role::where('name', 'user')->delete();
    }
}
