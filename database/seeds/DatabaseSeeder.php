<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        sysuser::insert([
		'uname' => 'admin',
		'namalengkap' => 'Administrator',
		'email' => 'admin',
		'upass' => sha1('admin')
	]);
    }
}
