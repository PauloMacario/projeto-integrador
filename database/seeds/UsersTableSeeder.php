<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Bob Marley', 
            'email' => 'bob@gmail.com',         
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Morto - King of Reggae',
            'biography' => 'Robert Nesta Marley, mais conhecido como Bob Marley, 
                            foi um cantor, guitarrista e compositor jamaicano, 
                            o mais conhecido músico de reggae de todos os tempos, 
                            famoso por popularizar o género. 
                            Marley já vendeu mais de 75 milhões de discos.',
            
            'areas' => 'SAÚDE, EDUCAÇÃO, SOCIAL, FOME, DESIGUALDADE',
            'district' => 'Brasilândia',
            'city' => 'São Paulo',
            'remember_token' => 'teste'
           
           
        ]);

        User::create([
            'name' => 'Stephen William Hawking', 
            'email' => 'Stephen@gmail.com',         
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Morto',
            'biography' => 'Stephen William Hawking foi um físico teórico e 
                            cosmólogo britânico reconhecido internacionalmente 
                            por sua contribuição à ciência, sendo um dos mais 
                            renomados cientistas do século.',
            
            'areas' => 'SAÚDE, EDUCAÇÃO, SOCIAL, TECNOLOGIA',
            'district' => 'St Albans',
            'city' => 'São Paulo',
            'remember_token' => 'teste'
           
           
        ]);

        User::create([
            'name' => 'Seu Creysson', 
            'email' => 'creysson@gmail.com',         
            'password' => '$2y$10$74OPjIwSdjl.uS7crJw.9eh48vQklcgHHxVVDNFVDmrsh09kT.E/W',
            'occupation' => 'Personagem',
            'biography' => 'Seu Creysson é um personagem fictício 
                            do grupo humorístico brasileiro Casseta & Planeta, 
                            que participava de quadros em seu programa na Rede Globo. 
                            É interpretado pelo comediante baiano Claudio Manoel.',
            
            'areas' => 'LAZER, EDUCAÇÃO, SOCIAL',
            'district' => 'Jd Casseta & Planeta',
            'city' => 'São Paulo',
            'remember_token' => 'teste'
           
           
        ]);


    }
    
}