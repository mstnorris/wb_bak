<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class CoursesController extends \BaseController {

	/**
	 * Display a listing of courses
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::all();

		return View::make('courses.index', compact('courses'));
	}

	/**
	 * Show the form for creating a new course
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('courses.create');
	}

	/**
	 * Store a newly created course in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Course::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Course::create($data);

		return Redirect::route('courses.index');
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
            $course = Course::whereWbid($wbid)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return Redirect::home();
        }
        return View::make('courses.show', compact('course'));
    }

	/**
	 * Show the form for editing the specified course.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$course = Course::find($id);

		return View::make('courses.edit', compact('course'));
	}

	/**
	 * Update the specified course in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$course = Course::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Course::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$course->update($data);

		return Redirect::route('courses.index');
	}

	/**
	 * Remove the specified course from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Course::destroy($id);

		return Redirect::route('courses.index');
	}

}
