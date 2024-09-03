<?php

use App\Http\Controllers\BloodReportController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/select-tests', [App\Http\Controllers\TestController::class, 'selectTests'])->name('tests.select');
    Route::post('/process-tests', [App\Http\Controllers\TestController::class, 'processTests'])->name('tests.process');
    

    Route::resource('reports', App\Http\Controllers\ReportController::class);
    Route::resource('test-report', App\Http\Controllers\TestController::class);
    Route::resource('liver-reports', App\Http\Controllers\LiverReportController::class);
    Route::resource('kidney-reports', App\Http\Controllers\KidneyReportController::class);
    Route::resource('blood-reports', App\Http\Controllers\BloodReportController::class);
    Route::resource('lipid-profiles', App\Http\Controllers\LipidProfileController::class);
    Route::resource('urine-reports', App\Http\Controllers\UrineReportController::class);
    Route::resource('biochemistry-reports', App\Http\Controllers\BiochemistryReportController::class);
    Route::resource('xray-reports', App\Http\Controllers\XrayReportController::class);
    Route::resource('serology-reports', App\Http\Controllers\SerologyReportController::class);
     Route::resource('stool-reports', App\Http\Controllers\StoolReportController::class);
     Route::resource('mantoux-tests', App\Http\Controllers\MantouxTestController::class);
     Route::resource('cannabies-pregnancy-tests', App\Http\Controllers\CannabiesPregnancyTestController::class);
     Route::resource('referrals', App\Http\Controllers\ReferralController::class);

    //Blood Reports Route
    //    Route::get('blood-reports', [App\Http\Controllers\BloodReportController::class,'index'])->name('bloodreport.index');
    //    Route::get('blood-reports/create', [App\Http\Controllers\BloodReportController::class,'create'])->name('bloodreport.applicant.detail');
    //    Route::post('blood-reports/create', [App\Http\Controllers\BloodReportController::class,'postCreate'])->name('bloodreport.applicant.detail.post');
    //    Route::get('blood-reports/differential-count', [App\Http\Controllers\BloodReportController::class,'createDifferential'])->name('bloodreport.differential.count');
    //    Route::post('blood-reports/differential-count', [App\Http\Controllers\BloodReportController::class,'postCreateDifferential'])->name('bloodreport.differential.count.post');
    //    Route::get('blood-reports/serology', [App\Http\Controllers\BloodReportController::class,'createSerology'])->name('bloodreport.serology');
    //    Route::post('blood-reports/serology', [App\Http\Controllers\BloodReportController::class,'postCreateSerology'])->name('bloodreport.serology.post');
    //    Route::get('blood-reports/{bloodReport}/edit', [App\Http\Controllers\BloodReportController::class,'edit'])->name('bloodreport.applicant.edit');
    //    Route::put('blood-reports/{bloodReport}/edit', [App\Http\Controllers\BloodReportController::class, 'update'])->name('bloodreport.applicant.update');
    //    Route::get('differential/{bloodReport}/edit', [App\Http\Controllers\BloodReportController::class,'editDifferential'])->name('bloodreport.differential.edit');
    //    Route::put('differential/{bloodReport}/update', [App\Http\Controllers\BloodReportController::class,'updateDifferential'])->name('bloodreport.differential.update');
    //    Route::get('blood-reports/{bloodReport}', [App\Http\Controllers\BloodReportController::class,'show'])->name('bloodreport.show');
    Route::get('blood-reports/serology/{bloodReport}', [App\Http\Controllers\BloodReportController::class, 'showSerology'])->name('bloodreport.serology.show');
    //    Route::get('blood-serology/{bloodReport}/edit', [App\Http\Controllers\BloodReportController::class,'editSerology'])->name('bloodreport.serology.edit');
    //    Route::put('blood-serology/{bloodReport}/update', [App\Http\Controllers\BloodReportController::class,'updateSerology'])->name('bloodreport.serology.update');


    //    Route::get('lipid-profile', [App\Http\Controllers\ReportController::class, 'lipidList'])->name('reports.lipidList');
    // Route::get('urine-reports', [App\Http\Controllers\ReportController::class, 'urineReports'])->name('reports.urineList');
    Route::get('biochemistry-test', [App\Http\Controllers\ReportController::class, 'biochemistryTest'])->name('reports.biochemistryList');
    Route::get('reports/{report}/pathology', [App\Http\Controllers\ReportController::class, 'pathology'])->name('reports.pathology');
    Route::get('reports/{report}/hematology', [App\Http\Controllers\ReportController::class, 'hematology'])->name('reports.hematology');
    Route::get('reports/{report}/liver', [App\Http\Controllers\ReportController::class, 'liver'])->name('reports.liver');
    Route::get('reports/{report}/kidney', [App\Http\Controllers\ReportController::class, 'kidney'])->name('reports.kidney');
    //    Route::get('reports/{report}/lipid', [App\Http\Controllers\ReportController::class, 'lipid'])->name('reports.lipid');
    Route::get('reports/{report}/urine', [App\Http\Controllers\ReportController::class, 'urine'])->name('reports.urine');
    Route::get('reports/{report}/biochemistry', [App\Http\Controllers\ReportController::class, 'biochemistry'])->name('reports.biochemistry');
    Route::get('preliminary-report/{report}', [App\Http\Controllers\ReportController::class, 'preliminaryReport'])->name('reports.preliminary');

    //General Examination Route
    Route::get('/step2/{report}/generals', [App\Http\Controllers\GeneralController::class, 'index'])->name('reports.generals.index');
    Route::get('/step2/{report}/create', [App\Http\Controllers\GeneralController::class, 'create'])->name('reports.generals.create');
    Route::post('/step2/{report}/store', [App\Http\Controllers\GeneralController::class, 'store'])->name('reports.generals.store');
    Route::get('/step2/{report}/edit', [App\Http\Controllers\GeneralController::class, 'edit'])->name('reports.generals.edit');
    Route::put('/step2/{report}/update', [App\Http\Controllers\GeneralController::class, 'update'])->name('reports.generals.update');

    // Systemic Examination Route
    Route::get('/step3/{report}/systemics', [App\Http\Controllers\SystemicController::class, 'index'])->name('systemics.index');
    Route::get('/step3/{report}/create', [App\Http\Controllers\SystemicController::class, 'create'])->name('systemics.create');
    Route::post('/step3/{report}/store', [App\Http\Controllers\SystemicController::class, 'store'])->name('systemics.store');
    Route::get('/step3/{report}/edit', [App\Http\Controllers\SystemicController::class, 'edit'])->name('systemics.edit');
    Route::put('/step3/{report}/update', [App\Http\Controllers\SystemicController::class, 'update'])->name('systemics.update');

    //Hematology Route
    Route::get('/step4/{report}/hematologies', [App\Http\Controllers\HematologyController::class, 'index'])->name('hematologies.index');
    Route::get('/step4/{report}/create', [App\Http\Controllers\HematologyController::class, 'create'])->name('hematologies.create');
    Route::post('/step4/{report}/store', [App\Http\Controllers\HematologyController::class, 'store'])->name('hematologies.store');
    Route::get('/step4/{report}/edit', [App\Http\Controllers\HematologyController::class, 'edit'])->name('hematologies.edit');
    Route::patch('/step4/{report}/update', [App\Http\Controllers\HematologyController::class, 'update'])->name('hematologies.update');

    //Biochemistry Route
    Route::get('/step5/{report}/biochemistries', [App\Http\Controllers\BiochemistryController::class, 'index'])->name('biochemistries.index');
    Route::get('/step5/{report}/create', [App\Http\Controllers\BiochemistryController::class, 'create'])->name('biochemistries.create');
    Route::post('/step5/{report}/store', [App\Http\Controllers\BiochemistryController::class, 'store'])->name('biochemistries.store');
    Route::get('/step5/{report}/edit', [App\Http\Controllers\BiochemistryController::class, 'edit'])->name('biochemistries.edit');
    Route::patch('/step5/{report}/update', [App\Http\Controllers\BiochemistryController::class, 'update'])->name('biochemistries.update');

    //Serology Route
    Route::get('/step6/{report}/serologies', [App\Http\Controllers\SerologyController::class, 'index'])->name('serologies.index');
    Route::get('/step6/{report}/create', [App\Http\Controllers\SerologyController::class, 'create'])->name('serologies.create');
    Route::post('/step6/{report}/store', [App\Http\Controllers\SerologyController::class, 'store'])->name('serologies.store');
    Route::get('/step6/{report}/edit', [App\Http\Controllers\SerologyController::class, 'edit'])->name('serologies.edit');
    Route::patch('/step6/{report}/store', [App\Http\Controllers\SerologyController::class, 'update'])->name('serologies.update');

    //Urine Test Route
    Route::get('/step7/{report}/urines', [App\Http\Controllers\UrineController::class, 'index'])->name('urines.index');
    Route::get('/step7/{report}/create', [App\Http\Controllers\UrineController::class, 'create'])->name('urines.create');
    Route::post('/step7/{report}/store', [App\Http\Controllers\UrineController::class, 'store'])->name('urines.store');
    Route::get('/step7/{report}/edit', [App\Http\Controllers\UrineController::class, 'edit'])->name('urines.edit');
    Route::patch('/step7/{report}/update', [App\Http\Controllers\UrineController::class, 'update'])->name('urines.update');

    //Other Test Route
    Route::get('/step8/{report}/others', [App\Http\Controllers\OtherController::class, 'index'])->name('others.index');
    Route::get('/step8/{report}/create', [App\Http\Controllers\OtherController::class, 'create'])->name('others.create');
    Route::post('/step8/{report}/store', [App\Http\Controllers\OtherController::class, 'store'])->name('others.store');
    Route::get('/step8/{report}/edit', [App\Http\Controllers\OtherController::class, 'edit'])->name('others.edit');
    Route::patch('/step8/{report}/update', [App\Http\Controllers\OtherController::class, 'store'])->name('others.update');
});
// Route::get('/', function () {
//     return view('welcome');
// });
