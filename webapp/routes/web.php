<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\YTD\CDIController;
use App\Http\Controllers\YTD\COCController;
use App\Http\Controllers\YTD\PSCController;
use App\Http\Controllers\YTD\BJSTController;
use App\Http\Controllers\YTD\OHSIController;
use App\Http\Controllers\YTD\SireController;
use App\Http\Controllers\YTD\UAUCController;
use App\Http\Controllers\Audit\MWTController;
use App\Http\Controllers\Audit\CargoController;
use App\Http\Controllers\Audit\EngineController;
use App\Http\Controllers\YTD\IncidentController;
use App\Http\Controllers\YTD\InternalController;
use App\Http\Controllers\Audit\MooringController;
use App\Http\Controllers\Audit\CircularController;
use App\Http\Controllers\Audit\FeedbackController;
use App\Http\Controllers\Audit\NavAuditController;
use App\Http\Controllers\Chart\CDIChartController;
use App\Http\Controllers\Chart\COCChartController;
use App\Http\Controllers\Chart\MWTChartController;
use App\Http\Controllers\Chart\NavChartController;
use App\Http\Controllers\Chart\PSCChartController;
use App\Http\Controllers\Chart\BJSTChartController;
use App\Http\Controllers\Chart\OHSIChartController;
use App\Http\Controllers\Chart\SireChartController;
use App\Http\Controllers\Chart\UAUCChartController;
use App\Http\Controllers\Audit\SupervisitController;
use App\Http\Controllers\Chart\CargoChartController;
use App\Http\Controllers\Chart\EngineChartController;
use App\Http\Controllers\YTD\InvestigationController;
use App\Http\Controllers\Chart\MooringChartController;
use App\Http\Controllers\Chart\CircularChartController;
use App\Http\Controllers\Chart\FeedbackChartController;
use App\Http\Controllers\Chart\IncidentChartController;
use App\Http\Controllers\Chart\InternalChartController;
use App\Http\Controllers\Chart\SupervisitChartController;
use App\Http\Controllers\Chart\InvestigationChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('login', 'loginPost')->name('login.post');
    Route::post('logout', 'logout')->name('logout');
});

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

// Form Excel
Route::middleware(['auth'])->group(function () {
    Route::get('/formexcel', function () {
        return view('formexcel');
    })->name('formexcel');
    Route::get('/Import1', [ImportController::class, 'Import1'])->name('Import1');
    Route::get('/Import2', [ImportController::class, 'Import2'])->name('Import2');
    Route::get('/Import3', [ImportController::class, 'Import3'])->name('Import3');
    Route::get('/Import4', [ImportController::class, 'Import4'])->name('Import4');
    Route::get('/Import5', [ImportController::class, 'Import5'])->name('Import5');
    Route::get('/Import6', [ImportController::class, 'Import6'])->name('Import6');
    Route::get('/Import7', [ImportController::class, 'Import7'])->name('Import7');
    Route::get('/Import8', [ImportController::class, 'Import8'])->name('Import8');
    Route::get('/Import9', [ImportController::class, 'Import9'])->name('Import9');
    Route::get('/Import10', [ImportController::class, 'Import10'])->name('Import10');
    Route::get('/Import11', [ImportController::class, 'Import11'])->name('Import11');
    Route::get('/Import12', [ImportController::class, 'Import12'])->name('Import12');
    Route::get('/Import13', [ImportController::class, 'Import13'])->name('Import13');
    Route::get('/Import14', [ImportController::class, 'Import14'])->name('Import14');
    Route::get('/Import15', [ImportController::class, 'Import15'])->name('Import15');
    Route::get('/Import16', [ImportController::class, 'Import16'])->name('Import16');
    Route::get('/Import17', [ImportController::class, 'Import17'])->name('Import17');
    Route::get('/Import18', [ImportController::class, 'Import18'])->name('Import18');
});

// Import Task
Route::middleware(['auth'])->group(function () {
    Route::post('/navauditimport', [NavAuditController::class, 'navauditstore'])->name('navauditstore');
    Route::post('/cargoimport', [CargoController::class, 'cargostore'])->name('cargostore');
    Route::post('/mooringimport', [MooringController::class, 'mooringstore'])->name('mooringstore');
    Route::post('/engineimport', [EngineController::class, 'enginestore'])->name('enginestore');
    Route::post('/supervisitmport', [SupervisitController::class, 'supervisitstore'])->name('supervisitstore');
    Route::post('/circularimport', [CircularController::class, 'circularstore'])->name('circularstore');
    Route::post('/mwtimport', [MWTController::class, 'mwtstore'])->name('mwtstore');
    Route::post('/feedbackimport', [FeedbackController::class, 'feedbackstore'])->name('feedbackstore');
    Route::post('/incidentimport', [IncidentController::class, 'incidentstore'])->name('incidentstore');
    Route::post('/investigationimport', [InvestigationController::class, 'investigationstore'])->name('investigationstore');
    Route::post('/bjstimport', [BJSTController::class, 'bjststore'])->name('bjststore');
    Route::post('/cdiimport', [CDIController::class, 'cdistore'])->name('cdistore');
    Route::post('/pscimport', [PSCController::class, 'pscstore'])->name('pscstore');
    Route::post('/sireimport', [SireController::class, 'sirestore'])->name('sirestore');
    Route::post('/internalimport', [InternalController::class, 'internalstore'])->name('internalstore');
    Route::post('/uaucimport', [UAUCController::class, 'uaucstore'])->name('uaucstore');
    Route::post('/ohsiimport', [OHSIController::class, 'ohsistore'])->name('ohsistore');
    Route::post('/cocimport', [COCController::class, 'cocstore'])->name('cocstore');
});

// Audit
Route::middleware(['auth'])->group(function () {
    Route::get('/navigationaudit', [NavChartController::class, 'index'])->name('navigationaudit');
    Route::get('/cargooperation', [CargoChartController::class, 'index'])->name('cargooperation');
    Route::get('/mooringoperation', [MooringChartController::class, 'index'])->name('mooringoperation');
    Route::get('/engineeringaudit', [EngineChartController::class, 'index'])->name('engineeringaudit');
    Route::get('/superintendentvisit', [SupervisitChartController::class, 'index'])->name('superintendentvisit');
    Route::get('/circular', [CircularChartController::class, 'index'])->name('circular');
    Route::get('/mwt', [MWTChartController::class, 'index'])->name('mwt');
    Route::get('/negativefeedback', [FeedbackChartController::class, 'index'])->name('negativefeedback');
});

// YTD
Route::middleware(['auth'])->group(function () {
    Route::get('/incidentrecord', [IncidentChartController::class, 'index'])->name('incidentrecord');
    Route::get('/investigationrecord', [InvestigationChartController::class, 'index'])->name('investigationrecord');
    Route::get('/bjst', [BJSTChartController::class, 'index'])->name('bjst');
    Route::get('/psc', [PSCChartController::class, 'index'])->name('psc');
    Route::get('/cdi', [CDIChartController::class, 'index'])->name('cdi');
    Route::get('/sirre', [SireChartController::class, 'index'])->name('sirre');
    Route::get('/internalaudit', [InternalChartController::class, 'index'])->name('internalaudit');
    Route::get('/uauc', [UAUCChartController::class, 'index'])->name('uauc');
    Route::get('/ohsisftmt', [OHSIChartController::class, 'index'])->name('ohsisftmt');
    Route::get('/coc', [COCChartController::class, 'index'])->name('coc');
});

// Manage User
Route::middleware(['IsAdmin', 'auth'])->group(function () {
    Route::get('userdate', [UserController::class, 'index'])->name('userdate');
    Route::put('userdate/{id}/update', [UserController::class, 'update'])->whereNumber('id')->name('userdate.update');
    Route::delete('userdate/{id}/delete', [UserController::class, 'destroy'])->whereNumber('id')->name('userdate.delete');
    Route::post('/register', [UserController::class, 'register'])->name('register');
});

// Edit Profile
Route::get('/profile', [UserController::class, 'changePasswordView'])->name('profile')->middleware('auth');
Route::post('profile/{id}/resetpass', [UserController::class, 'changePassword'])->whereNumber('id')->name('password.update')->middleware('auth');
Route::put('profile/{id}/update', [UserController::class, 'update_profile'])->whereNumber('id')->name('profile.update')->middleware('auth');