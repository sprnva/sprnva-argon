<?php

namespace App\Controllers;

use App\Core\App;

class ProjectController
{
	protected $pageTitle;

	public function index()
	{
		$pageTitle = "Projects";

		$project_datas = App::get('database')->selectLoop('projects');
		return view('projects/index', compact('project_datas', 'pageTitle'));
	}

	public function detail($id)
	{
		$pageTitle = "Project Detail";

		$project_details = App::get('database')->select("*", 'projects', "id='$id'");
		return view('projects/detail', compact('project_details', 'pageTitle'));
	}
}
