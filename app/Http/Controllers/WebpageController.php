<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webpage;
use App\Models\Image;
use App\Models\Statistic;
use App\Models\News;
use App\Models\Licenes;
use App\Models\Employee;
use App\Models\Policies;
use App\Models\Financial_report;
use App\Models\Owns;
use App\Models\Stiduo;
use App\Models\Opportunity;

class WebpageController extends Controller
{
    public function index()

    {
        $images = Image::all();
        $statistics = Statistic::all();
        $news = News::all();
        $stiduos = Stiduo::all();

        return view('webpage.index', compact('images', 'statistics', 'news', 'stiduos'));
    }

    public function aboutUs()

    {

        $statistics = Statistic::all();


        return view('webpage.aboutUs', compact('statistics'));
    }

    public function members()

    {
        return view('webpage.members');
    }


    public function licenes()

    {
        $licenes = Licenes::all();
        return view('webpage.licenes', compact('licenes'));
    }


    public function licenes_show(string $id)

    {
        $licenes = Licenes::whereId($id)->first();
        return view('webpage.licenes_show', compact('licenes'));
    }


    public function employee()

    {
        $employees = Employee::all();
        return view('webpage.employee', compact('employees'));
    }

    public function strcuture()

    {
        return view('webpage.strcuture');
    }


    public function projects()

    {
        return view('webpage.projects');
    }

    public function policies()

    {
        $policies = Policies::all();
        return view('webpage.policies', compact('policies'));
    }

    public function policie_show(string $id)
    {

        $policies = Policies::whereId($id)->first();

        return view('webpage.policie_show',compact('policies'));
    }

    public function reports()
    {

        $reports = Financial_report::all();

        return view('webpage.reports',compact('reports'));
    }

    public function report_show(string $id)
    {

        $reports = Financial_report::whereId($id)->first();

        return view('webpage.report_show',compact('reports'));
    }

    public function owns()
    {

        $owns = Owns::all();

        return view('webpage.owns', compact('owns'));
    }

    public function owns_show(string $id)
    {

        $owns = Owns::whereId($id)->first();

        return view('webpage.owns_show', compact('owns'));
    }

    public function stiduo()

    {
        $stiduos = Stiduo::all();
        return view('webpage.stiduo', compact('stiduos'));
    }

    public function questions()

    {
        return view('webpage.FAQ');
    }

    public function contact()

    {
        return view('webpage.contact');
    }


    public function opportunity()

    {
        $opportunities = Opportunity::all();
        return view('webpage.opportunity', compact('opportunities'));
    }

}
