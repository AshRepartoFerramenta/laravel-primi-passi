@extends('layouts.app')

@section('content')
  <main>
    <section class="my_jumbotron">
      <div class="my_jumbo-wrapper">
        <div class="my_jumbo-text">
          <h2>Diventa <strong>sviluppatore web</strong></h2>
          <h3>Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</h3>
          <ul class="">
            <li><strong>6 mesi</strong> di corso intensivo online in diretta</li>
            <li><strong>Nessuna competenza</strong> di programmazione richiesta</li>
            <li>Siamo certi del tuo successo, altrimenti ti rimborsiamo</li>
          </ul>
        </div>

        <div class="my_jumbo-image">
          <div class="my_image-wrapper">
            <img src="{{ asset('img/pc-black.gif') }}" alt="gif di una lezione Boolean online">
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
