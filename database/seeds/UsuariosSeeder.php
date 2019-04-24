<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert(['nome'=>'Katusha', 'sobrenome'=>'Corradi', 'idade'=>'18']);
        DB::table('usuarios')->insert(['nome'=>'Bernie', 'sobrenome'=>'Czadla', 'idade'=>'25']);
        DB::table('usuarios')->insert(['nome'=>'Abbie', 'sobrenome'=>'Breckon', 'idade'=>'45']);
        DB::table('usuarios')->insert(['nome'=>'Burt', 'sobrenome'=>'Leser', 'idade'=>'38']);
        DB::table('usuarios')->insert(['nome'=>'Nananne', 'sobrenome'=>'Wager', 'idade'=>'07']);
        DB::table('usuarios')->insert(['nome'=>'Maurie', 'sobrenome'=>'Worters', 'idade'=>'90']);
        DB::table('usuarios')->insert(['nome'=>'Hector', 'sobrenome'=>'Gajownik', 'idade'=>'44']);
        DB::table('usuarios')->insert(['nome'=>'Trixie', 'sobrenome'=>'Wittier', 'idade'=>'56']);
        DB::table('usuarios')->insert(['nome'=>'Denys', 'sobrenome'=>'Digance', 'idade'=>'77']);
        DB::table('usuarios')->insert(['nome'=>'Leighton', 'sobrenome'=>'Dewar', 'idade'=>'88']);
        DB::table('usuarios')->insert(['nome'=>'Reggis', 'sobrenome'=>'Cobbled', 'idade'=>'105']);
        DB::table('usuarios')->insert(['nome'=>'Baryram', 'sobrenome'=>'Sposito', 'idade'=>'29']);
        DB::table('usuarios')->insert(['nome'=>'Kimball', 'sobrenome'=>'Bartlet', 'idade'=>'31']);
        DB::table('usuarios')->insert(['nome'=>'Irene', 'sobrenome'=>'Foucard', 'idade'=>'28']);
        DB::table('usuarios')->insert(['nome'=>'Madelyn', 'sobrenome'=>'Alwin', 'idade'=>'17']);
        DB::table('usuarios')->insert(['nome'=>'Mathew', 'sobrenome'=>'Mor', 'idade'=>'15']);
        DB::table('usuarios')->insert(['nome'=>'Gerhardt', 'sobrenome'=>'Houndesome', 'idade'=>'21']);
        DB::table('usuarios')->insert(['nome'=>'Emanuel', 'sobrenome'=>'Francombe', 'idade'=>'16']);
    }
}