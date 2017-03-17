<?php namespace Cinema\Http\Controllers;

class PruebaController extends Controller {


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		Return "Hola desde Controller";

	}

	public function nombre($nombre)
	{

		return "Hola mi nombre es: ".$nombre;
	}

}
