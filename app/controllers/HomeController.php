<?php

class HomeController extends BaseController {

	public function showDashboard()
	{
		return View::make('home');
	}

    public function showAbout() {
        return View::make('about');
    }

}
