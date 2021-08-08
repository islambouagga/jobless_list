<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Models\Candidate;
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
    $techCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->get());
    $lisanceCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->get());
    $masterCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->get());
    $doctoraCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->get());
    return view('welcome')
        ->with('techCandidates',$techCandidates)
        ->with('lisanceCandidates',$lisanceCandidates)
        ->with('masterCandidates',$masterCandidates)
        ->with('doctoraCandidates',$doctoraCandidates)
        ;
});

Route::get('/statistics', function (){

    // age avrege
    $ageavragematser=0;
    $agelistmaster = array();
    $Candidatesmaster = Candidate::where('statu','مقبول')->where('Study_level','ماستر')->get();
    foreach ($Candidatesmaster as $Candidate){
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistmaster,$age);
    }
    if (count($agelistmaster) != null){
        foreach ($agelistmaster as $age){
            $ageavragematser =$ageavragematser+ $age;
        }
        $ageavragematser = $ageavragematser / count($agelistmaster);
    }




    $ageavragetech=0;
    $agelisttech = array();
    $Candidatestech = Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->get();
    foreach ($Candidatestech as $Candidate){
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelisttech,$age);
    }
    if (count($agelisttech) != null ){
        foreach ($agelisttech as $age){
            $ageavragetech =$ageavragetech+ $age;
        }
        $ageavragetech = $ageavragetech / count($agelisttech);
    }



    $ageavragelisance=0;
    $agelistlisance = array();
    $Candidateslisance = Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->get();
    foreach ($Candidateslisance as $Candidate){
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistlisance,$age);
    }
//    dd(count($agelistlisance), $agelistlisance);
    if (count($agelistlisance) != null){
        foreach ($agelistlisance as $age){
            $ageavragelisance =$ageavragelisance+ $age;
        }
        $ageavragelisance = $ageavragelisance / count($agelistlisance);
    }


    $ageavragedoctora=0;
    $agelistdoctora = array();
    $Candidatesdoctora = Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->get();
    foreach ($Candidatesdoctora as $Candidate){
        $age = Carbon::parse($Candidate->birthday)->diff(Carbon::now())->y;
        array_push($agelistdoctora,$age);
    }
    if (count($agelistdoctora) != null){
        foreach ($agelistdoctora as $age){
            $ageavragedoctora =$ageavragedoctora+ $age;
        }
        $ageavragedoctora = $ageavragedoctora / count($agelistdoctora);
    }





    // Study_level
    $techCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->get());
    $lisanceCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->get());
    $masterCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->get());
    $doctoraCandidates = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->get());

    // field
    // الصيدلة
    $الصيدلة1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('field','الصيدلة')->get());
    $الصيدلة2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('field','الصيدلة')->get());
    $الصيدلة3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('field','الصيدلة')->get());
    $الصيدلة4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('field','الصيدلة')->get());


    //Anem
    $ouargla1 = count(Candidate::where('statu','مقبول')->where('Anem','ورقلة 1')->get());
    $ouargla2 = count(Candidate::where('statu','مقبول')->where('Anem','ورقلة 2')->get());
    $hassi = count(Candidate::where('statu','مقبول')->where('Anem','ح.مسعود')->get());
    $rwissat = count(Candidate::where('statu','مقبول')->where('Anem','الرويسات')->get());
    $sidi = count(Candidate::where('statu','مقبول')->where('Anem','س-خويلد')->get());
    $ngossa = count(Candidate::where('statu','مقبول')->where('Anem','النقوسة')->get());
    $borma = count(Candidate::where('statu','مقبول')->where('Anem','البرمة')->get());
    //ouargla1
    $ouargla11 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','ورقلة 1')->get());
    $ouargla12 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','ورقلة 1')->get());
    $ouargla13 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','ورقلة 1')->get());
    $ouargla14 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','ورقلة 1')->get());
    //ouargla2
    $ouargla21 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','ورقلة 2')->get());
    $ouargla22 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','ورقلة 2')->get());
    $ouargla23 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','ورقلة 2')->get());
    $ouargla24 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','ورقلة 2')->get());
    //hassi
    $hassi1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','ح.مسعود')->get());
    $hassi2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','ح.مسعود')->get());
    $hassi3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','ح.مسعود')->get());
    $hassi4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','ح.مسعود')->get());
    //rwissat
    $rwissat1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','الرويسات')->get());
    $rwissat2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','الرويسات')->get());
    $rwissat3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','الرويسات')->get());
    $rwissat4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','الرويسات')->get());
    //sidi
    $sidi1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','س-خويلد')->get());
    $sidi2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','س-خويلد')->get());
    $sidi3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','س-خويلد')->get());
    $sidi4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','س-خويلد')->get());
    //ngossa
    $ngossa1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','النقوسة')->get());
    $ngossa2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','النقوسة')->get());
    $ngossa3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','النقوسة')->get());
    $ngossa4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','النقوسة')->get());
    //borma
    $borma1 = count(Candidate::where('statu','مقبول')->where('Study_level','تقني سامي')->where('Anem','البرمة')->get());
    $borma2 = count(Candidate::where('statu','مقبول')->where('Study_level','ليسانس')->where('Anem','البرمة')->get());
    $borma3 = count(Candidate::where('statu','مقبول')->where('Study_level','ماستر')->where('Anem','البرمة')->get());
    $borma4 = count(Candidate::where('statu','مقبول')->where('Study_level','دكتوراه')->where('Anem','البرمة')->get());






            return view('statistics')
                //age avrage
                ->with('ageavragematser',$ageavragematser)
                ->with('ageavragetech',$ageavragetech)
                ->with('ageavragelisance',$ageavragelisance)
                ->with('ageavragedoctora',$ageavragedoctora)
                //Study_level
                ->with('techCandidates',$techCandidates)
                ->with('lisanceCandidates',$lisanceCandidates)
                ->with('masterCandidates',$masterCandidates)
                ->with('doctoraCandidates',$doctoraCandidates)
                // field
                // الصيدلة
                ->with('الصيدلة1',$الصيدلة1)
                ->with('الصيدلة2',$الصيدلة2)
                ->with('الصيدلة3',$الصيدلة3)
                ->with('الصيدلة4',$الصيدلة4)
                //Anem
                ->with('ouargla1',$ouargla1)
                ->with('ouargla2',$ouargla2)
                ->with('hassi',$hassi)
                ->with('rwissat',$rwissat)
                ->with('sidi',$sidi)
                ->with('ngossa',$ngossa)
                ->with('borma',$borma)
                //ouargla1
                ->with('ouargla11',$ouargla11)
                ->with('ouargla12',$ouargla12)
                ->with('ouargla13',$ouargla13)
                ->with('ouargla14',$ouargla14)
                //ouargla2
                ->with('ouargla21',$ouargla21)
                ->with('ouargla22',$ouargla22)
                ->with('ouargla23',$ouargla23)
                ->with('ouargla24',$ouargla24)
                //hassi
                ->with('hassi1',$hassi1)
                ->with('hassi2',$hassi2)
                ->with('hassi3',$hassi3)
                ->with('hassi4',$hassi4)
                //rwissat
                ->with('rwissat1',$rwissat1)
                ->with('rwissat2',$rwissat2)
                ->with('rwissat3',$rwissat3)
                ->with('rwissat4',$rwissat4)
                //sidi
                ->with('sidi1',$sidi1)
                ->with('sidi2',$sidi2)
                ->with('sidi3',$sidi3)
                ->with('sidi4',$sidi4)
                //ngossa
                ->with('ngossa1',$ngossa1)
                ->with('ngossa2',$ngossa2)
                ->with('ngossa3',$ngossa3)
                ->with('ngossa4',$ngossa4)
                //borma
                ->with('borma1',$borma1)
                ->with('borma2',$borma2)
                ->with('borma3',$borma3)
                ->with('borma4',$borma4)
                ;
})->name('statistics');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('candidate', CandidateController::class);

Route::get('/{path}',[HomeController::class, 'index'] )->where('path','.*');
