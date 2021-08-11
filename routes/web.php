<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Models\Candidate;
use App\Models\District;
use App\Models\Feild;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $techCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->get());
    $lisanceCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->get());
    $masterCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->get());
    $doctoraCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->get());
    return view('welcome')
        ->with('techCandidates', $techCandidates)
        ->with('lisanceCandidates', $lisanceCandidates)
        ->with('masterCandidates', $masterCandidates)
        ->with('doctoraCandidates', $doctoraCandidates);
})->name('welcome');

Route::get('/statistics', function () {

    // age avrege
    // master
    $ageavragematser = 0;
    $agelistmaster = array();
    $Candidatesmaster = Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->get();
    foreach ($Candidatesmaster as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistmaster, $age);
    }
    if (count($agelistmaster) != null) {
        foreach ($agelistmaster as $age) {
            $ageavragematser = $ageavragematser + $age;
        }
        $ageavragematser = $ageavragematser / count($agelistmaster);
    }
    // tech
    $ageavragetech = 0;
    $agelisttech = array();
    $Candidatestech = Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->get();
    foreach ($Candidatestech as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelisttech, $age);
    }
    if (count($agelisttech) != null) {
        foreach ($agelisttech as $age) {
            $ageavragetech = $ageavragetech + $age;
        }
        $ageavragetech = $ageavragetech / count($agelisttech);
    }
    // lisance
    $ageavragelisance = 0;
    $agelistlisance = array();
    $Candidateslisance = Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->get();
    foreach ($Candidateslisance as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistlisance, $age);
    }
    if (count($agelistlisance) != null) {
        foreach ($agelistlisance as $age) {
            $ageavragelisance = $ageavragelisance + $age;
        }
        $ageavragelisance = $ageavragelisance / count($agelistlisance);
    }
    // doctora
    $ageavragedoctora = 0;
    $agelistdoctora = array();
    $Candidatesdoctora = Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->get();
    foreach ($Candidatesdoctora as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistdoctora, $age);
    }
    if (count($agelistdoctora) != null) {
        foreach ($agelistdoctora as $age) {
            $ageavragedoctora = $ageavragedoctora + $age;
        }
        $ageavragedoctora = $ageavragedoctora / count($agelistdoctora);
    }
    // ouargla 1
    $ageavrageouargla1 = 0;
    $agelistouargla1 = array();
    $Candidatesouargla1 = Candidate::where('statu', 'مقبول')->where('Anem', 'ورقلة 1')->get();
    foreach ($Candidatesouargla1 as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistouargla1, $age);
    }
    if (count($agelistouargla1) != null) {
        foreach ($agelistouargla1 as $age) {
            $ageavrageouargla1 = $ageavrageouargla1 + $age;
        }
        $ageavrageouargla1 = $ageavrageouargla1 / count($agelistouargla1);
    }
    // ouargla 2
    $ageavrageouargla2 = 0;
    $agelistouargla2 = array();
    $Candidatesouargla2 = Candidate::where('statu', 'مقبول')->where('Anem', 'ورقلة 2')->get();
    foreach ($Candidatesouargla2 as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistouargla2, $age);
    }
    if (count($agelistouargla2) != null) {
        foreach ($agelistouargla2 as $age) {
            $ageavrageouargla2 = $ageavrageouargla2 + $age;
        }
        $ageavrageouargla2 = $ageavrageouargla2 / count($agelistouargla2);
    }
    // hassi
    $ageavragehassi = 0;
    $agelisthassi = array();
    $Candidateshassi = Candidate::where('statu', 'مقبول')->where('Anem', 'ح.مسعود')->get();
    foreach ($Candidateshassi as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelisthassi, $age);
    }
    if (count($agelisthassi) != null) {
        foreach ($agelisthassi as $age) {
            $ageavragehassi = $ageavragehassi + $age;
        }
        $ageavragehassi = $ageavragehassi / count($agelisthassi);
    }
    // rwissat
    $ageavragerwissat = 0;
    $agelistrwissat = array();
    $Candidatesrwissat = Candidate::where('statu', 'مقبول')->where('Anem', 'الرويسات')->get();
    foreach ($Candidatesrwissat as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistrwissat, $age);
    }
    if (count($agelistrwissat) != null) {
        foreach ($agelistrwissat as $age) {
            $ageavragerwissat = $ageavragerwissat + $age;
        }
        $ageavragerwissat = $ageavragerwissat / count($agelistrwissat);
    }
    // sidi
    $ageavragesidi = 0;
    $agelistsidi = array();
    $Candidatessidi = Candidate::where('statu', 'مقبول')->where('Anem', 'س-خويلد')->get();
    foreach ($Candidatessidi as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistsidi, $age);
    }
    if (count($agelistsidi) != null) {
        foreach ($agelistsidi as $age) {
            $ageavragesidi = $ageavragesidi + $age;
        }
        $ageavragesidi = $ageavragesidi / count($agelistsidi);
    }
    // ngossa
    $ageavragengossa = 0;
    $agelistngossa = array();
    $Candidatesngossa = Candidate::where('statu', 'مقبول')->where('Anem', 'النقوسة')->get();
    foreach ($Candidatesngossa as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistngossa, $age);
    }
    if (count($agelistngossa) != null) {
        foreach ($agelistngossa as $age) {
            $ageavragengossa = $ageavragengossa + $age;
        }
        $ageavragengossa = $ageavragengossa / count($agelistngossa);
    }
    // borma
    $ageavrageborma = 0;
    $agelistborma = array();
    $Candidatesborma = Candidate::where('statu', 'مقبول')->where('Anem', 'البرمة')->get();
    foreach ($Candidatesborma as $Candidate) {
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistborma, $age);
    }
    if (count($agelistborma) != null) {
        foreach ($agelistborma as $age) {
            $ageavrageborma = $ageavrageborma + $age;
        }
        $ageavrageborma = $ageavrageborma / count($agelistborma);
    }


    // Study_level
    $techCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->get());
    $lisanceCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->get());
    $masterCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->get());
    $doctoraCandidates = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->get());

    //commune
    $ouarglaOuargla = count(Candidate::where('statu', 'مقبول')->where('commune', '1089')->get());
    $ouarglaAinBeida = count(Candidate::where('statu', 'مقبول')->where('commune', '1090')->get());
    $ouarglaNgoussa = count(Candidate::where('statu', 'مقبول')->where('commune', '1091')->get());
    $ouarglaHassiMessaoud = count(Candidate::where('statu', 'مقبول')->where('commune', '1092')->get());
    $ouarglaRouissat = count(Candidate::where('statu', 'مقبول')->where('commune', '1093')->get());
    $ouarglaSidiKhouiled = count(Candidate::where('statu', 'مقبول')->where('commune', '1099')->get());
    $ouarglaHassiBenAbdellah = count(Candidate::where('statu', 'مقبول')->where('commune', '1100')->get());
    $ouarglaElBorma = count(Candidate::where('statu', 'مقبول')->where('commune', '1109')->get());



    //Anem
    $ouargla1 = count(Candidate::where('statu', 'مقبول')->where('Anem', 'ورقلة 1')->get());
    $ouargla2 = count(Candidate::where('statu', 'مقبول')->where('Anem', 'ورقلة 2')->get());
    $hassi = count(Candidate::where('statu', 'مقبول')->where('Anem', 'ح.مسعود')->get());
    $rwissat = count(Candidate::where('statu', 'مقبول')->where('Anem', 'الرويسات')->get());
    $sidi = count(Candidate::where('statu', 'مقبول')->where('Anem', 'س-خويلد')->get());
    $ngossa = count(Candidate::where('statu', 'مقبول')->where('Anem', 'النقوسة')->get());
    $borma = count(Candidate::where('statu', 'مقبول')->where('Anem', 'البرمة')->get());
    //ouargla1
    $ouargla11 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'ورقلة 1')->get());
    $ouargla12 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'ورقلة 1')->get());
    $ouargla13 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'ورقلة 1')->get());
    $ouargla14 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'ورقلة 1')->get());
    // sex
    $ouarglaman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'ورقلة 1')->get());
    $ouarglawoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'ورقلة 1')->get());
    //ouargla2
    $ouargla21 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'ورقلة 2')->get());
    $ouargla22 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'ورقلة 2')->get());
    $ouargla23 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'ورقلة 2')->get());
    $ouargla24 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'ورقلة 2')->get());
    // sex
    $ouargla2man = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'ورقلة 2')->get());
    $ouargla2woman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'ورقلة 2')->get());
    //hassi
    $hassi1 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'ح.مسعود')->get());
    $hassi2 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'ح.مسعود')->get());
    $hassi3 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'ح.مسعود')->get());
    $hassi4 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'ح.مسعود')->get());
    // sex
    $hassiman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'ح.مسعود')->get());
    $hassiwoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'ح.مسعود')->get());
    //rwissat
    $rwissat1 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'الرويسات')->get());
    $rwissat2 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'الرويسات')->get());
    $rwissat3 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'الرويسات')->get());
    $rwissat4 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'الرويسات')->get());
    // sex
    $rwissatman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'الرويسات')->get());
    $rwissatwoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'الرويسات')->get());
    //sidi
    $sidi1 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'س-خويلد')->get());
    $sidi2 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'س-خويلد')->get());
    $sidi3 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'س-خويلد')->get());
    $sidi4 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'س-خويلد')->get());
    // sex
    $sidiman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'س-خويلد')->get());
    $sidiwoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'س-خويلد')->get());
    //ngossa
    $ngossa1 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'النقوسة')->get());
    $ngossa2 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'النقوسة')->get());
    $ngossa3 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'النقوسة')->get());
    $ngossa4 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'النقوسة')->get());
    // sex
    $ngossaman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'النقوسة')->get());
    $ngossawoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'النقوسة')->get());
    //borma
    $borma1 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'تقني سامي')->where('Anem', 'البرمة')->get());
    $borma2 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ليسانس')->where('Anem', 'البرمة')->get());
    $borma3 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'ماستر')->where('Anem', 'البرمة')->get());
    $borma4 = count(Candidate::where('statu', 'مقبول')->where('Study_level', 'دكتوراه')->where('Anem', 'البرمة')->get());
    // sex
    $bormaman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'ذكر')->where('Anem', 'البرمة')->get());
    $bormawoman = count(Candidate::where('statu', 'مقبول')->where('sexe', 'انثى')->where('Anem', 'البرمة')->get());


    return view('statistics')
        //age avrage
        ->with('ageavragematser', $ageavragematser)
        ->with('ageavragetech', $ageavragetech)
        ->with('ageavragelisance', $ageavragelisance)
        ->with('ageavragedoctora', $ageavragedoctora)
        ->with('ageavrageouargla1', $ageavrageouargla1)
        ->with('ageavrageouargla2', $ageavrageouargla2)
        ->with('ageavragehassi', $ageavragehassi)
        ->with('ageavragerwissat', $ageavragerwissat)
        ->with('ageavragesidi', $ageavragesidi)
        ->with('ageavragengossa', $ageavragengossa)
        ->with('ageavrageborma', $ageavrageborma)
        //Study_level
        ->with('techCandidates', $techCandidates)
        ->with('lisanceCandidates', $lisanceCandidates)
        ->with('masterCandidates', $masterCandidates)
        ->with('doctoraCandidates', $doctoraCandidates)
        // field
            ->with('fields',Feild::all())
        // district
            ->with('districts',District::all())
        //Anem
        ->with('ouargla1', $ouargla1)
        ->with('ouargla2', $ouargla2)
        ->with('hassi', $hassi)
        ->with('rwissat', $rwissat)
        ->with('sidi', $sidi)
        ->with('ngossa', $ngossa)
        ->with('borma', $borma)
        //ouargla1
        ->with('ouargla11', $ouargla11)
        ->with('ouargla12', $ouargla12)
        ->with('ouargla13', $ouargla13)
        ->with('ouargla14', $ouargla14)
        //ouargla2
        ->with('ouargla21', $ouargla21)
        ->with('ouargla22', $ouargla22)
        ->with('ouargla23', $ouargla23)
        ->with('ouargla24', $ouargla24)
        //hassi
        ->with('hassi1', $hassi1)
        ->with('hassi2', $hassi2)
        ->with('hassi3', $hassi3)
        ->with('hassi4', $hassi4)
        //rwissat
        ->with('rwissat1', $rwissat1)
        ->with('rwissat2', $rwissat2)
        ->with('rwissat3', $rwissat3)
        ->with('rwissat4', $rwissat4)
        //sidi
        ->with('sidi1', $sidi1)
        ->with('sidi2', $sidi2)
        ->with('sidi3', $sidi3)
        ->with('sidi4', $sidi4)
        //ngossa
        ->with('ngossa1', $ngossa1)
        ->with('ngossa2', $ngossa2)
        ->with('ngossa3', $ngossa3)
        ->with('ngossa4', $ngossa4)
        //borma
        ->with('borma1', $borma1)
        ->with('borma2', $borma2)
        ->with('borma3', $borma3)
        ->with('borma4', $borma4)
        //sex
        ->with('ouarglaman', $ouarglaman)
        ->with('ouarglawoman', $ouarglawoman)
        ->with('ouargla2man', $ouargla2man)
        ->with('ouargla2woman', $ouargla2woman)
        ->with('hassiman', $hassiman)
        ->with('hassiwoman', $hassiwoman)
        ->with('rwissatman', $rwissatman)
        ->with('rwissatwoman', $rwissatwoman)
        ->with('sidiman', $sidiman)
        ->with('sidiwoman', $sidiwoman)
        ->with('ngossaman', $ngossaman)
        ->with('ngossawoman', $ngossawoman)
        ->with('bormaman', $bormaman)
        ->with('bormawoman', $bormawoman)
        // communes
        ->with('ouarglaOuargla',$ouarglaOuargla)
        ->with('ouarglaAinBeida',$ouarglaAinBeida)
        ->with('ouarglaNgoussa',$ouarglaNgoussa)
        ->with('ouarglaHassiMessaoud',$ouarglaHassiMessaoud)
        ->with('ouarglaRouissat',$ouarglaRouissat)
        ->with('ouarglaSidiKhouiled',$ouarglaSidiKhouiled)
        ->with('ouarglaHassiBenAbdellah',$ouarglaHassiBenAbdellah)
        ->with('ouarglaElBorma',$ouarglaElBorma);
})->name('statistics')->middleware('auth');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('candidate', CandidateController::class);

Route::get('/{path}', [HomeController::class, 'index'])->where('path', '.*');
