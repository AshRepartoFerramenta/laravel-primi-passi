@extends('layouts.app')

@section('content')
  <main>
    <div class="container">
      <div class="row">
        <div class="col-6">
          @foreach ($faqs_sx as $faq)
            <h2>{{ $faq['question'] }}</h2>

            <p>{{  $faq['answer'] }}</p>
          @endforeach


        </div>

        <div class="col-6">
          @foreach ($faqs_dx as $faq)
            <h2>{{ $faq['question'] }}</h2>

            <p>{{  $faq['answer'] }}</p>
          @endforeach
        </div>

      </div>

    </div>
  </main>
@endsection
