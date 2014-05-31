<?php

class GroupsController extends \BaseController {

	/**
	 * Display a listing of materials
	 *
	 * @return Response
	 */
	public function index()
	{
		$groups = Group::all();

		return View::make('groups.index', compact('groups'));
	}

	/**
	 * Show the form for creating a new material
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('groups.create');
	}

	/**
	 * Store a newly created material in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Group::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Group::create($data);

		return Redirect::route('group.index');
	}

	/**
	 * Display the specified material.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$group = Group::findOrFail($id);

		return View::make('groups.show', compact('group'));
	}

	/**
	 * Show the form for editing the specified material.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$group = Group::find($id);

		return View::make('group.edit', compact('group'));
	}

	/**
	 * Update the specified material in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$group = Group::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Group::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$group->update($data);

		return Redirect::route('groups.index');
	}

	/**
	 * Remove the specified material from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Group::destroy($id);

		return Redirect::route('groups.index');
	}

}
