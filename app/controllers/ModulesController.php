<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ModulesController extends \BaseController {

	/**
	 * Display a listing of modules
	 *
	 * @return Response
	 */
	public function index()
	{
		$modules = Module::all();

		return View::make('modules.index', compact('modules'));
	}

	/**
	 * Show the form for creating a new module
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('modules.create');
	}

	/**
	 * Store a newly created module in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Module::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Module::create($data);

		return Redirect::route('modules.index');
	}

	/**
	 * Display the specified module.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($wbid)
    {
        try {
            $module = Module::whereWbid($wbid)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return Redirect::home();
        }
        return View::make('modules.show', compact('module'));
    }

	/**
	 * Show the form for editing the specified module.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$module = Module::find($id);

		return View::make('modules.edit', compact('module'));
	}

	/**
	 * Update the specified module in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$module = Module::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Module::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$module->update($data);

		return Redirect::route('modules.index');
	}

	/**
	 * Remove the specified module from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Module::destroy($id);

		return Redirect::route('modules.index');
	}

}
