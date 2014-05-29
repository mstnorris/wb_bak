<?php

class UniversitiesController extends \BaseController {

	/**
	 * Display a listing of universities
	 *
	 * @return Response
	 */
	public function index()
	{
		$universities = University::all();

		return View::make('universities.index', compact('universities'));
	}

	/**
	 * Show the form for creating a new university
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('universities.create');
	}

	/**
	 * Store a newly created university in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), University::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		University::create($data);

		return Redirect::route('universities.index');
	}

	/**
	 * Display the specified university.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$university = University::findOrFail($id);

		return View::make('universities.show', compact('university'));
	}

	/**
	 * Show the form for editing the specified university.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$university = University::find($id);

		return View::make('universities.edit', compact('university'));
	}

	/**
	 * Update the specified university in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$university = University::findOrFail($id);

		$validator = Validator::make($data = Input::all(), University::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$university->update($data);

		return Redirect::route('universities.index');
	}

	/**
	 * Remove the specified university from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		University::destroy($id);

		return Redirect::route('universities.index');
	}

}
