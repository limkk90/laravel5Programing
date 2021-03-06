<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $prjs = ['개인', '업무', '학습', '쇼핑'];
        foreach ($prjs as $prj){
            DB::table('projects')->insert([
                'name'=>$prj,
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            ]);
        }

    }
}
