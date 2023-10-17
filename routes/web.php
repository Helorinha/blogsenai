<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phpinfo', function(){
    phpinfo();
});

Route::get('/senai', function(){
    return "Alunos Senai";
});

Route:: view('/teste','teste');

Route::get('/formulario', function() { 
    return '<form method="post" action="/contato">
     Nome: <input type="text" name="nome"> 
     Email: <input type="text" name="email"> 
     Mensagem: <textarea name="mensagem"></textarea> 
     <input type="submit" value="Enviar"> 
     </form>';
});

//Route::

Route::get('/contato/{id}', function ($id){
    printf('Olá, o seu ID é %s', $id);
})->where('id','[0-9]+');

Route::get('/contato/{id}/{nome}', function ($id,$nome){
    printf('Olá, aluna %s, o seu ID é %s', $nome, $id);
});

Route::view('/parametroestatico','parametroestatico',
['Nometeste' => 'Aluno Senai']);

Route::get('/parametrodinamico/{nome?}', function ($nome=null){
    return view('parametrodinamico',['Nometeste'=>$nome]);
});

Route::get('/ExercicioPHP/{id?}/{user}', function($id = null,$user = null){
    return view('ExercicioPHP',['id' => $id, $user => '$user']);
});

Route::get('DiasDaSemana/{dias?}', function($dias = null){
    return view('DiasDaSemana',['dias' => $dias]);
});

Route::fallback(function(){
    return "Erro ao localizar o endereço";
});

Route::fallback(function(){
    return view ('erro');
});

Route::get('/marcelo', function () { 
    return view('welcome');

});

Route::get('/alunosenai', function () { 
    return view('alunosenai');

});

