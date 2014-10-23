<?php 
class UsuariosController extends BaseController
{
    public function mostrarUsuarios()
    {
        $usuarios = User::all();
        return View::make('usuarios.listar',array('usuarios'=>$usuarios));
    }
    public function nuevoUsuario()
    {
        return View::make('usuarios.crear');
    }
    public function crearUsuario()
    {
        $respuesta = User::agregarUsuario(Input::all());
        if ($respuesta['error'] == true){
            return Redirect::to('usuarios/nuevo')->withErrors($respuesta['mensaje'] )->withInput();
        }else{
            return Redirect::to('usuarios/nuevo')->with('mensaje', $respuesta['mensaje']);
        }
    }//*/
}
 ?>