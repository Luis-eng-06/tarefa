<?php

use App\Models\Livro;

use Illuminate\Database\Seeder;



class LivroSeeder extends Seeder
{
    public function run()
    {
        Livro::create([
            'titulo' => 'O anticristo',
            'autor' => 'Friedrich Nietzche',
            'ano_publicacao' => 1895,
            'resumo' => 'Um livro de filosofia e polêmica religiosa.',
        ]);

        

        Livro::create([
            'titulo' => 'O príncipe',
            'autor' => 'Nicolau Maquiavel',
            'ano_publicacao' => 1532,
            'resumo' => 'Um livro sobre história, filosofia e pensamento político.',
        ]);
    }
}




?>