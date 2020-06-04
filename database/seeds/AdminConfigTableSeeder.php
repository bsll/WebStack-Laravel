<?php

use Illuminate\Database\Seeder;

class AdminConfigTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_config')->delete();
        
        \DB::table('admin_config')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin_name',
                'value' => 'gaominghui',
                'description' => '站长姓名',
                'created_at' => '2019-08-23 06:04:34',
                'updated_at' => '2019-08-23 06:05:08',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin_email',
                'value' => 'gaomnghui@gmail.com',
                'description' => '站长邮箱',
                'created_at' => '2019-08-23 06:05:00',
                'updated_at' => '2019-08-23 06:05:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'icp_record',
                'value' => '京ICP备19049395号-5',
                'description' => 'ICP备案号',
                'created_at' => '2019-08-23 06:06:57',
                'updated_at' => '2019-08-23 06:06:57',
            ),
        ));
        
        
    }
}