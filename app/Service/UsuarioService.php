<?php

namespace App\Service;

use App\Models\Usuario;
use PharIo\Manifest\Email;

class usuarioService
{
    public function create(array $dados)
    {
        $user = Usuario::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'password' => $dados['password']
        ]);
        return $user;
    }

<<<<<<< HEAD
    public function delete($id)
    {
        $usuario = Usuario::find($id);

        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuario nao encontrado'
            ];
        }

        $usuario->delete();

        return [
            'status' => true,
            'message' => 'Usuario excluido com sucesso'
        ];
    }

    public function findById($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario == null) {
            return [
                'status' => false,
                'message' => "Usuario não encontrado"
            ];
        }

        return [
            'status' => true,
            'message' => 'Usuario encontrado',
            'data' => $usuario
        ];
    }
    public function getAll()
    {
        $usuarios = Usuario::all();
        return [
            'status' => true,
            'message' => 'Pesquisa efetuada com sucesso',
            'data' => $usuarios
        ];
    }

    public function searchByName($nome)
    {
        $usuario = Usuario::where('nome', 'like', '%' . $nome . '%')->get();
        if ($usuario->isEmpty()) {
            return [
                'status' => false,
                'message' => ' Sem resultados '
=======
    public function delete($id){
        $usuarios = Usuario::find($id);
        if ($usuarios == null){
            return [
                'status'=> false,
                'message'=> 'Usuario não encontrado'
            ];
        }
       $usuarios->delete();

       return [
        'status'=> true,
        'message'=>'Usuario excluido com sucesso'
       ];
    }

    public function findById($id){
    $usuarios = Usuario::find($id);
    if ($usuarios == null){
        return [
            'status'=> false,
            'message'=> 'Usuario não encontrado'
        ];
    }
    return [
        'status'=> true,
        'message'=> 'Usuario encontrado',
        'data' => $usuarios
    ];
    }
    public function getAll(){
        $usuarios = Usuario::all();

        return[
            'status' => true, 
            'message'=> "Pesquisa efetuada com sucesso",
            'data' => $usuarios
        ];
        
    }

    public function searchByName($nome){
        $usuarios = Usuario::where( 'nome', 'like', '%'. $nome . '%')->get();
        if($usuarios->isEmpty()){
            return [
                'status' => false,
                'message' => ' Sem Resultados'
>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392
            ];
        }
        return [
            'status' => true,
<<<<<<< HEAD
            'message' => ' Resultados encontrados  ',
            'data' => $usuario
        ];
=======
            'message' => ' Resultados Encontrados',
            'data' => $usuarios
        ];
       
>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392
    }
    public function searchByEmail($email){
        $usuarios = Usuario::where( 'email', 'like', '%'. $email . '%')->get();
        if($usuarios->isEmpty()){
            return [
                'status' => false,
                'message' => ' Sem Resultados'
            ];
        }
        return [
            'status' => true,
            'message' => ' Resultados Encontrados',
            'data' => $usuarios
        ];
    }
    
    public function update(array $dados){
        $usuario = Usuario::find($dados['id']);

<<<<<<< HEAD
    public function searchByEmail($email)
    {
        $usuario = Usuario::where('email', 'like', '%' . $email . '%')->get();
        if ($usuario->isEmpty()) {
            return [
                'status' => false,
                'message' => ' Sem resultados '
            ];
        }
=======
        if( $usuario == null){
            return [
                'status' => false,
                'message  ' => 'nao deu para atualizar'
            ];
        }
        if(isset($dados['password'])){
            $usuario->password = $dados['password'];
        }
       if(isset($dados['nome'])){
        $usuario->password = $dados['nome'];
       }
       if(isset($dados['email'])){
        $usuario->password = $dados['email'];
       }
       
       $usuario->save();
       
        return [
            'status' =>true,
            'message' => 'Atualizado com sucesso'
        ];
       }

  




    
   
>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392

        return [
            'status' => true,
            'message' => ' Resultados encontrados  ',
            'data' => $usuario
        ];
    }

    public function update(array $dados)
    {
        $usuario = Usuario::find($dados['id']);

        if ($usuario == null) {
            return [
                'status' => false,
                'message' => 'Usuario nao encontrado'
            ];
        }

        if (isset($dados['password'])) {
            $usuario->password = $dados['password'];
        }

        if (isset($dados['nome'])) {
            $usuario->password = $dados['nome'];
        }

        if (isset($dados['email'])) {
            $usuario->password = $dados['email'];
        }

        $usuario->save();

        return [
            'status' => true,
            'message' => 'Atualizado com sucesso'
        ];
    }
}
