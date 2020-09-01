<?php

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

Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/faqs', function () {
    $faqs_sx = [
      [
        'question'=> 'Chi può fare il corso Boolean? ',
        'answer' => 'Chiunque abbia una forte curiosità verso il mondo della
        programmazione e voglia di imparare a fare il mestiere di sviluppatore.
        Età e curriculum non sono una discriminante: infatti, i nostri studenti
        hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza
        lavorativa, ma anche affermati professionisti che vogliono cambiare settore.
        Se non hai mai programmato o se hai già seguito qualche corso ma senti
        di non aver approfondito abbastanza per diventare programmatore,
        Boolean è il corso che fa per te. '
      ],
      [
        'question'=> 'Che competenze devo avere per iniziare il corso? ',
        'answer' => 'Il corso parte da zero, quindi non serve alcuna competenza
        di programmazione, è necessario però superare il processo di selezione.'
      ],
      [
        'question'=> 'In cosa consiste il processo di selezione?',
        'answer' => 'Boolean è un corso intensivo che richiede impegno costante,
        dedizione e un’attitudine al problem solving. Per assicurarci che ogni
        studente abbia concrete possibilità di diventare uno sviluppatore e iniziare
        una nuova carriera, selezioniamo gli studenti tramite un test di logica
        a risposta multipla e un colloquio motivazionale. Contattaci per iniziare
        il tuo percorso o per saperne di più!'
      ]
    ];

    $faqs_dx = [
      [
        'question'=> 'Chi può fare il corso Boolean? ',
        'answer' => 'Chiunque abbia una forte curiosità verso il mondo della
        programmazione e voglia di imparare a fare il mestiere di sviluppatore.
        Età e curriculum non sono una discriminante: infatti, i nostri studenti
        hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza
        lavorativa, ma anche affermati professionisti che vogliono cambiare settore.
        Se non hai mai programmato o se hai già seguito qualche corso ma senti
        di non aver approfondito abbastanza per diventare programmatore,
        Boolean è il corso che fa per te. '
      ],
      [
        'question'=> 'Che competenze devo avere per iniziare il corso? ',
        'answer' => 'Il corso parte da zero, quindi non serve alcuna competenza
        di programmazione, è necessario però superare il processo di selezione.'
      ],
      [
        'question'=> 'In cosa consiste il processo di selezione?',
        'answer' => 'Boolean è un corso intensivo che richiede impegno costante,
        dedizione e un’attitudine al problem solving. Per assicurarci che ogni
        studente abbia concrete possibilità di diventare uno sviluppatore e iniziare
        una nuova carriera, selezioniamo gli studenti tramite un test di logica
        a risposta multipla e un colloquio motivazionale. Contattaci per iniziare
        il tuo percorso o per saperne di più!'
      ]
    ];



    return view('faqs', [
      'faqs_sx' => $faqs_sx,
      'faqs_dx' => $faqs_dx
    ]);
})->name('faqs');
