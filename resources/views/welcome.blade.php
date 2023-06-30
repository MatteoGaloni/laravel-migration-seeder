@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-12">
                    <div class="card bg-light p-3 m-3">
                        <div class="card-header text-center">
                            <strong>Azienda: {{ $train->azienda }}</strong>
                        </div>
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h5>Stazione di Partenza: {{ $train->stazione_di_partenza }}</h5>
                                <h5>Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</h5>
                            </div>
                            <div class="card-title d-flex justify-content-between">
                                <h5>Orario di partenza: {{ $train->orario_di_partenza }}</h5>
                                <h5>Orario di arrivo: {{ $train->orario_di_arrivo }}</h5>
                            </div>
                            <div class="card-title d-flex justify-content-between">
                                <h5>Codice treno: {{ $train->codice_treno }}</h5>
                                <h5>Numero di carrozze: {{ $train->numero_carrozze }}</h5>
                            </div>
                            @if ($train->in_orario === 1)
                                <div class="card-title d-flex justify-content-between">
                                    <h5>Treno in orario: SI</h5>
                                    <h5>Cancellato: No</h5>
                                </div>
                            @else
                                <div class="card-title d-flex justify-content-between">
                                    <h5>Treno in orario: NO</h5>
                                    <h5>Cancellato: SI</h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
