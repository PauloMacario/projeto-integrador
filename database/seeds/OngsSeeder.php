<?php

use Illuminate\Database\Seeder;

class OngsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ongs')->insert([
            'name' => 'ONG Nova Mulher',
            'segment' => 'Social, Mulher',
            'address' => 'R. Adolfo Kurt Boehm, 43',
            'district' => 'Jardim Centenario',
            'city' => 'São Paulo',
            'phone1' => 1198765432,
            'phone2' => 11987654321,
            'email' => 'casanovamulher.ong@gmail.com',
            'website1' => 'https://www.ongnovamulher.org/',
            'website2' => 'https://www.facebook.com/ongnovamulher',
            'website3' => 'https://www.instagram.com/ongnovamulher/',
            'website4' => 'NULL',
            'image' => 'teste'
        ]);

        DB::table('ongs')->insert([
            'name' => 'Cão sem Dono',
            'segment' => 'Animail, Doação',
            'address' => 'Av. Giovanni Gronchi, 5411 ',
            'district' => 'Morumbi',
            'city' => 'São Paulo',
            'phone1' => 1198765432,
            'phone2' => 11987654321,
            'email' => 'faleconosco@caosemdono.com.br',
            'website1' => 'http://www.caosemdono.com.br/',
            'website2' => 'https://www.facebook.com/caosemdono/',
            'website3' => 'https://twitter.com/caosemdono',
            'website4' => 'NULL',
            'image' => 'teste'
        ]);

        DB::table('ongs')->insert([
            'name' => 'Casa do Zezinho',
            'segment' => 'Educação, lazer',
            'address' => 'R. Anália Dolácio Albino, 77',
            'district' => 'Parque Maria Helena',
            'city' => 'São Paulo',
            'phone1' => 1198765432,
            'phone2' => 11987654321,
            'email' => 'contato@casadozezinho.org.br',
            'website1' => 'https://novo.casadozezinho.org.br/',
            'website2' => 'https://www.facebook.com/casadozezinho',
            'website3' => 'https://www.instagram.com/casadozezinho/',
            'website4' => 'NULL',
            'image' => 'teste'
        ]);
    }
}


//  Cão sem Dono
// Animais
// Av. Giovanni Gronchi, 5411 
// Morumbi
// São Paulo

// ONG Futuro do Amanhã
// Educação
// R. João Badúe, 19
// Cidade Tiradentes
//São Paulo