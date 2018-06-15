@extends('layouts.app')

@section('content')
  <div class="container-fluid"  data-ng-app="myApp" data-ng-controller="pronosticCtrl">
    @{{ greeting }}
    <div class="row">
      @include('pronostics._group')
    </div>

  </div>
@endsection


@section('js')
  <script src="{{ mix('js/controllers/pronostic-ctrl.js') }}" charset="utf-8"></script>
@endsection
