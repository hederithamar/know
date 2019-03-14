<?php

use App\Models\Auth\Country;
use Illuminate\Database\Seeder;

/**
 * Class CountryTableSeeder.
 */
class CountryTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        Country::create([
            'name'        => 'Estados Unidos Méxicanos',
            'sort'         => 'México',
            'code'         => 'MX',
        ]);

        Country::create([
            'name'        => 'Estados Unidos de America',
            'sort'         => 'EUA',
            'code'         => 'USA',
        ]);

        $this->enableForeignKeys();
    }
}
