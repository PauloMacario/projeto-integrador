<?php

use Illuminate\Database\Seeder;
use App\Ong;

class OngsTableSeeder extends Seeder
{
  
    public function run()
    {
        Ong::create([
            'name' => 'ONG Nova Mulher',
            'segment' => 'Social, Mulher',
            'description' => 'Criar oportunidades, estimulando e fortalecendo as 
                                mulheres para que elas possam desenvolver suas 
                                potencialidades e ocupem o seu lugar no mundo, 
                                promovendo a igualdade de gênero, raça e 
                                cidadania em nossa sociedade.',
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
            'image' => 'storage/perfil/novamulher.webp'
        ]);

        Ong::create([
            'name' => 'Cão sem Dono',
            'segment' => 'Animail, Doação',
            'description' => 'O Cão Sem Dono é uma ONG (Organização Não Governamental), 
                                sem fins lucrativos, e que nasceu de um grande sonho do 
                                seu atual presidente: tirar o maior número possível de 
                                animais das ruas, dar tratamento adequado e integrá-los 
                                a famílias que lhes deem amor, carinho e uma vida digna. ',
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
            'image' => 'storage/perfil/caosemdono.jpeg'
        ]);

        Ong::create([
            'name' => 'Casa do Zezinho',
            'segment' => 'Educação, lazer',
            'description' => 'A Casa do Zezinho, desde sua fundação, 
                                tem sido um espaço de oportunidades de 
                                desenvolvimento para crianças e jovens 
                                que vivem em situação de alta vulnerabilidade 
                                social, fomentando o desenvolvimento 
                                humano para que dessa forma a sociedade 
                                se transforme em um lugar melhor.',
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
            'image' => 'storage/perfil/casadozezinho.png'
        ]);
    }
}

