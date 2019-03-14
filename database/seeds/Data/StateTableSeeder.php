<?php

use App\Models\Auth\State;
use Illuminate\Database\Seeder;

/**
 * Class StateTableSeeder.
 */
class StateTableSeeder extends Seeder
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

        State::create([
            'country_id'        => '1',
            'name'              => 'Aguascalientes',
            'sort'              => 'Ags.',
            'code'              => 'AGS'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Baja California',
            'sort'              => 'B.C.',
            'code'              => 'BCN'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Baja California Sur',
            'sort'              => 'B.C.S.',
            'code'              => 'BCS.'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Campeche',
            'sort'              => 'Camp.',
            'code'              => 'CAM'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Coahuila',
            'sort'              => 'Coah.',
            'code'              => 'COA'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Colima',
            'sort'              => 'Col.',
            'code'              => 'COL'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Chiapas',
            'sort'              => 'Chis.',
            'code'              => 'CHI'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Chihuahua',
            'sort'              => 'Chih.',
            'code'              => 'COL'
        ]);
    
        State::create([
            'country_id'        => '1',
            'name'              => 'Ciudad de México',
            'sort'              => 'CDMX',
            'code'              => 'CDMX'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Durango',
            'sort'              => 'Dgo.',
            'code'              => 'DUR'
        ]);
    
        State::create([
            'country_id'        => '1',
            'name'              => 'Estado de México',
            'sort'              => 'Méx.',
            'code'              => 'EMX'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Guanajuato',
            'sort'              => 'Gto.',
            'code'              => 'GUA'
        ]);
    
        State::create([
            'country_id'        => '1',
            'name'              => 'Guerrero',
            'sort'              => 'Gro.',
            'code'              => 'GUE'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Hidalgo',
            'sort'              => 'Hgo.',
            'code'              => 'HID'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Jalisco',
            'sort'              => 'Jal.',
            'code'              => 'JAL'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Michoacán',
            'sort'              => 'Mich.',
            'code'              => 'MIC'
        ]);
        
        State::create([
            'country_id'        => '1',
            'name'              => 'Morelos',
            'sort'              =>'Mor.',
            'code'              => 'MOR'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Nayarit',
            'sort'              =>'Nay.',
            'code'              => 'NAY'
        ]);
     
        State::create([
            'country_id'        => '1',
            'name'              => 'Nuevo León',
            'sort'              =>'N.L.',
            'code'              => 'NL'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Oaxaca',
            'sort'              =>'Oax.',
            'code'              => 'OAX'
        ]);
        
        State::create([
            'country_id'        => '1',
            'name'              => 'Puebla',
            'sort'              =>'Pue.',
            'code'              => 'PUE'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Querétaro',
            'sort'              =>'Qro.',
            'code'              => 'QUE'
        ]);
    
        State::create([
            'country_id'        => '1',
            'name'              => 'Quintana Roo',
            'sort'              =>'Q.R.',
            'code'              => 'QR'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'San Luis Potosí',
            'sort'              =>'S.L.P.',
            'code'              => 'SLP'
        ]);
        
        State::create([
            'country_id'        => '1',
            'name'              => 'Sinaloa',
            'sort'              =>'Sin.',
            'code'              => 'SIN'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Sonora',
            'sort'              =>'Son.',
            'code'              => 'SON'
        ]);
    
        State::create([
            'country_id'        => '1',
            'name'              => 'Tabasco',
            'sort'              =>'Tab.',
            'code'              => 'TAB'
        ]);

        State::create([
            'country_id'        => '1',
            'name'              => 'Tamaulipas',
            'sort'              =>'Tamps.',
            'code'              => 'TAM'
        ]);
        
        State::create([
            'country_id'        => '1',
            'name'                => 'Tlaxcala',
            'sort'              =>'Tlax.',
            'code'              => 'TLA'
        ]);

        State::create([
            'country_id'        => '1',
            'name'                => 'Veracruz',
            'sort'              =>'Ver.',
            'code'              => 'VER'
        ]);
       
        State::create([
            'country_id'        => '1',
            'name'                => 'Yucatán',
            'sort'              =>'Yuc.',
            'code'              => 'YUC'
        ]);

        State::create([
            'country_id'        => '1',
            'name'                => 'Zacatecas',
            'sort'              =>'Zac.',
            'code'              => 'ZAC'
        ]);

        $this->enableForeignKeys();
    }
}
