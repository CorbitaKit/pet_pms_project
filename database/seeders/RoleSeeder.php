<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Models\Role;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
	protected $roles = ['Admin','Manager','QA','Lead Developer','Developer'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < count($this->roles)-1; $i++){
        	DB::table('roles')->insert([
        		'role' => $this->roles[$i]
        	]);
        }
    }
}
