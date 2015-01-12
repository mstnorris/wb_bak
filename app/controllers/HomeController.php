<?php

class HomeController extends BaseController {

	public function showDashboard()
	{
		$modules = Module::all();
		return View::make('home', compact('modules'));
	}

    public function showAbout() {
        return View::make('about');
    }

}
