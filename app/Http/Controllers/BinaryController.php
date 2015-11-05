<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BinaryController extends Controller {

	//
	public function index()
	{
		return view('index');
	}

	public function show_ui()
	{
		return view('ui');
	}

	public function show_blank()
	{
		return view('blank');
	}

	public function show_chart()
	{
		return view('chart');
	}

	public function show_form()
	{
		return view('form');
	}

	public function show_tab_panel()
	{
		return view('tab-panel');
	}

	public function show_table()
	{
		return view('table');
	}

}
