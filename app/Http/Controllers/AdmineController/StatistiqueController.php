<?php

namespace App\Http\Controllers\AdmineController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Charts\UserChart;

class StatistiqueController extends Controller
{
    public function showStat(){

        /**
         * the number of Translation between 2 dates
         */
        $numberOfTraduction = DB::table('proposition_devis')->where('file_traduction','<>',null)->count();
        dd($numberOfTraduction);


        /**
         * the number of translation by translater between 2 dates
         */

        /**
          * The number of  devis Request between 2 dates
          */

        /**
          * The number of devis Request by Client
          */
        //return view('admin.statistique');
    }

    public function index()
    {
        $numbersOfTraduction = DB::table('proposition_devis')->count();
        $numbersOfDemandeDevis =DB::table('demande_devis')->count();



        $translationbytranslater = app()->chartjs
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February'])
        ->datasets([
            [
                "label" => "translation by translater between 2 dates",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65*$numbersOfTraduction, 59*$numbersOfTraduction, 80*$numbersOfTraduction, 81*$numbersOfTraduction, 56*$numbersOfTraduction, 55*$numbersOfTraduction, 40*$numbersOfTraduction],
            ],

        ])
        ->options([]);


        $translationForClient = app()->chartjs
        ->name('lineChartTest2')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February'])
        ->datasets([
            [
                "label" => "translation For Client",
                'backgroundColor' => "rgba(45, 185, 14, 0.7)",
                'borderColor' => "rgba(45, 185, 14, 0.7)",
                "pointBorderColor" => "rgba(45, 185, 14, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [55*$numbersOfDemandeDevis, 49*$numbersOfDemandeDevis,70*$numbersOfDemandeDevis,71*$numbersOfDemandeDevis,46*$numbersOfDemandeDevis,45*$numbersOfDemandeDevis,30*$numbersOfDemandeDevis],
            ],

        ])
        ->options([]);

        $compareDevisTraduction = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->size(['width' => 1000, 'height' => 500])
        ->labels(['Devis', 'Traduction'])
        ->datasets([
            [
                'backgroundColor' => ['#FF6384', '#36A2EB'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [$numbersOfDemandeDevis,$numbersOfTraduction]
            ]
        ])
        ->options([]);


return view('admin.statistique')->with('translationbytranslater',$translationbytranslater)
                                ->with('compareDevisTraduction',$compareDevisTraduction)
                                ->with('translationForClient',$translationForClient);
    }

}
