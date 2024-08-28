<?php

namespace App\Http\Controllers;

use App\Service\usuarioService;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class UsuarioController extends Controller
{
  protected $usuarioService;

  public function __construct(UsuarioService $usuarioService)
  {

    $this->usuarioService = $usuarioService;
  }

<<<<<<< HEAD
  public function store(Request $request)
  {
    $user = $this->usuarioService->create($request->all());
    return $user;
  }
=======
 }
 
    public function store(Request $request){
        $user = $this->usuarioService->creat($request->all());
        return $user;
    }

 public function findById($id){

    $result = $this->usuarioService->findById($id);
    

    return response()->json($result);
  
 } 
 public function index(){
  $result = $this->usuarioService->getAll();

  return response()->json($result);
 }

 public function searchByName(Request $request){
  $result = $this->usuarioService->searchByName($request->nome);
 }
 
 public function searchByEmail(Request $request){
  $result = $this->usuarioService->searchByEmail($request->Email);
  
  return response()->json($result);

 }

 public function delete($id){
  $result = $this->usuarioService->delete($id);
  return response()->json($result);

 }

 public function update(Request $request){

  $result = $this->usuarioService->update($request->all());


  return response()->json($result);
 }

>>>>>>> 04e3b6cdd456c1cf87c1d6b734280f1baa2de392

  public function findById($id)
  {
    $result = $this->usuarioService->findById($id);

    return response()->json($result);
  }

  public function index()
  {
    $result = $this->usuarioService->getAll();

    return response()->json($result);
  }

  public function searchByName(Request $request)
  {
    $result = $this->usuarioService->searchByName($request->nome);
  }

  public function  searchByEmail(Request $request)
  {
    $result = $this->usuarioService->searchByEmail($request->Email);

    return response()->json($result);
  }

  public function delete($id)
  {
    $result = $this->usuarioService->delete($id);

    return response()->json($result);
  }

  public function update(Request $request)
  {
    $result = $this->usuarioService->update($request->all());

    return response()->json($result);
  }
}
