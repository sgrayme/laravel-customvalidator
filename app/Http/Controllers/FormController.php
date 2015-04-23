<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\FormRequest;

class FormController extends Controller {

	/**
	 * Display the form.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('form.index');
	}

	/**
	 * Handle input from form.
	 *
	 * @return Response
	 */
	public function post(FormRequest $request)
	{
		$input = $request->only('regular', 'special');
		$input['success'] = true;
		return view('form.index', compact('input'));
	}

}
