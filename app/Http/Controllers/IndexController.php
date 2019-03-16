<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Page;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if ($request->isMethod('post')) {

            $rules = [
                'name'  => 'required|max:255',
                'email' => 'required|email',
                'text'  => 'required',
            ];
            $messages = [
                'required' => 'Field :attribute must be completed',
                'email' => 'Field :attribute must be email',
            ];
            $this->validate($request, $rules, $messages);

            $data = $request->all();

            Mail::send('emails.email', ['data' => $data], function ($message) use ($data)
            {
                $message->from($data['email'], $data['name']);
                $message->to(env('MAIL_ADMIN'));
                $message->subject('Contact Us');
            });

            $request->session()->flash('status', 'Email is sent');
            return redirect()->route('home');
        }

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
