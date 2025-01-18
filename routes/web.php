<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PoliciesController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\Financial_reportController;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\LicenesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OwnsController;
use App\Http\Controllers\StiduoController;
use App\Http\Controllers\Contact_usController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatController;
use App\Models\Statistic;
use App\Models\News;
use App\Models\Contact_us;
use App\Models\Employee;
use App\Models\Opportunity;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [WebpageController::class, 'index'])->name('index');
Route::get('/aboutUs', [WebpageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/members', [WebpageController::class, 'members'])->name('members');
Route::get('/licene', [WebpageController::class, 'licenes'])->name('licenes');
Route::get('/licenes_show/{id}', [WebpageController::class, 'licenes_show'])->name('licenes_show');
Route::get('/employee', [WebpageController::class, 'employee'])->name('employee');
Route::get('/strcuture', [WebpageController::class, 'strcuture'])->name('strcuture');
Route::get('/policies', [WebpageController::class, 'policies'])->name('policies');
Route::get('/policie_show/{id}', [WebpageController::class, 'policie_show'])->name('policie_show');
Route::get('/report', [WebpageController::class, 'reports'])->name('reports');
Route::get('/report_show/{id}', [WebpageController::class, 'report_show'])->name('report_show');
Route::get('/owns_page', [WebpageController::class, 'owns'])->name('owns_page');
Route::get('/owns_show/{id}', [WebpageController::class, 'owns_show'])->name('owns_show');
Route::get('/stiduo', [WebpageController::class, 'stiduo'])->name('stiduo');
Route::get('/FAQ', [WebpageController::class, 'questions'])->name('FAQ');
Route::get('/opportunities', [WebpageController::class, 'opportunity'])->name('opportunities');
Route::get('/projects', [WebpageController::class, 'projects'])->name('projects');
Route::get('/contact', [WebpageController::class, 'contact'])->name('contact');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],

    function(){


Route::get('/dashboard', function () {
    $opportunity_count = Opportunity::count();
    $statistics = Statistic::all();
    $news_count = News::count();
    $employee_count = Employee::count();
    $contact_us_count = Contact_us::count();
 return view('dashboard.dashboard', compact('opportunity_count', 'statistics', 'news_count', 'employee_count','contact_us_count'));
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('news', NewsController::class);
    Route::resource('photo', ImageController::class);
    Route::resource('statistic', StatisticController::class);
    Route::resource('policie', PoliciesController::class);
    Route::resource('liceneses', LicenesController::class);
    Route::resource('financial_report', Financial_reportController::class);
    Route::get('/download_policie/{policie}', [PoliciesController::class, 'download'])->name('download_policie');
    Route::resource('employees', EmployeesController::class);
    Route::resource('owns', OwnsController::class);
    Route::get('/download_owns/{owns}', [OwnsController::class, 'download'])->name('download_owns');

    Route::resource('stiduoes', StiduoController::class);
    Route::resource('opportunity', OpportunityController::class);
    Route::resource('users', UserController::class);
    Route::resource('contact_us', Contact_usController::class);
    Route::resource('users', UserController::class);




});


require __DIR__.'/auth.php';
});
