<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class SchoolsController extends \BaseController {

	/**
	 * Display a listing of schools
	 *
	 * @return Response
	 */
	public function index()
	{
		$schools = School::all();

		return View::make('schools.index', compact('schools'));
	}

	/**
	 * Show the form for creating a new school
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('schools.create');
	}

	/**
	 * Store a newly created school in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), School::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		School::create($data);

		return Redirect::route('schools.index');
	}

    /**
     * Display the specified module.
     *
     * @param $wbid
     * @internal param int $id
     * @return Response
     */
    public function show($wbid)
    {
        try {
            $school = School::whereWbid($wbid)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return Redirect::home();
        }
        return View::make('schools.show', compact('school'));
    }

	/**
	 * Show the form for editing the specified school.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$school = School::find($id);

		return View::make('schools.edit', compact('school'));
	}

	/**
	 * Update the specified school in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$school = School::findOrFail($id);

		$validator = Validator::make($data = Input::all(), School::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$school->update($data);

		return Redirect::route('schools.index');
	}

	/**
	 * Remove the specified school from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		School::destroy($id);

		return Redirect::route('schools.index');
	}

}
