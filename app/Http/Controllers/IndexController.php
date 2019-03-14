<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Page;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        $pages = Page::all();
        $services = Service::all();
        $employees = Employee::all();
        $portfolios = Portfolio::all();
        $filters = DB::table('portfolios')->distinct()->pluck('filter');

        $menu = [];
        foreach ($pages as $page) {
            $menu[] = ['title' => $page->name, 'anchor' => $page->alias];
        }
        $menu[] = ['title' => 'Services', 'anchor' => 'service'];
        $menu[] = ['title' => 'Portfolio', 'anchor' => 'Portfolio'];
        $menu[] = ['title' => 'Clients', 'anchor' => 'clients'];
        $menu[] = ['title' => 'Team', 'anchor' => 'team'];
        $menu[] = ['title' => 'Contact', 'anchor' => 'contact'];

        return view('site.index', [
            'menu'       => $menu,
            'pages'      => $pages,
            'services'   => $services,
            'employees'  => $employees,
            'portfolios' => $portfolios,
            'filters' => $filters,
        ]);
    }
}
