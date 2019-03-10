<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Page;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        $pages = Page::all();
        $portfolios = Portfolio::get(['name', 'filter', 'image']);
        $services = Service::all();
        $employees = Employee::all();

        return view('site.index');
    }
}
