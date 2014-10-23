<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $fillable = array('email', 'real_name','password');
	public static function agregarUsuario($input)
	{
		$respuesta = array();
		$reglas = array(
		'email' => array('required', 'max:100'),
		'real_name' => array('required', 'max:100'),
		'password' => array('required', 'max:100'),
		);
		$validator = Validator::make($input, $reglas);
		if ($validator->fails()){
			$respuesta['mensaje'] = $validator;
			$respuesta['error'] = true;
		}else{
			$user = static::create($input);
			$respuesta['mensaje'] = 'User creado!';
			$respuesta['error'] = false;
			$respuesta['data'] = $user;
		}
		return $respuesta;
	}
}
