<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Companydetail::insert([
            'companyname' => 'progamesapps',
            'address' => 'terheijdenseweg 350',
            'city' => 'Breda',
            "postalcode" => '4826 AA',
            'telephonenumber' => '076 573 34 44',
            'mail' => ' radiuscollege@rocwb.nl',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);

        \App\Companydetail::insert([
            'companyname' => 'gamesapps',
            'address' => 'terheijdenseweg 350',
            'city' => 'Breda',
            "postalcode" => '4826 AA',
            'telephonenumber' => '076 573 34 44',
            'mail' => ' radiuscollege@rocwb.nl',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);

        \App\Companydetail::insert([
            'companyname' => 'appgames',
            'address' => 'terheijdenseweg 350',
            'city' => 'Breda',
            "postalcode" => '4826 AA',
            'telephonenumber' => '076 573 34 44',
            'mail' => ' radiuscollege@rocwb.nl',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);


        \App\Companydetail::insert([
            'companyname' => 'gamesstudio',
            'address' => 'terheijdenseweg 350',
            'city' => 'Breda',
            "postalcode" => '4826 AA',
            'telephonenumber' => '076 573 34 44',
            'mail' => ' radiuscollege@rocwb.nl',
            'must_still_approve' => 0,
            'approved' => 0,
        ]);
    }
}
