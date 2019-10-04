@extends('layout')

@section('title', 'Balanço do Mês')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col-sm-2"></div>

        <div class="col-sm-8"> 
            <h1>Mês: {{ 3 }} <span class="text-success">R${{ 30 }}</span></h1>
            <p>Balanço do mês de {{ 3 }}</p>
            <hr/>
            @if(isset($balance))

            @foreach($balance as $monthbalance)
            <ul class="list-group">
                <li class="list-group-item">
                    Mes: {{ $monthbalance->month }}
                    Ano: {{ $monthbalance->year }}
                    Valor: R${{ $monthbalance->valueSum }}
                </li>
            </ul>
            <hr/>
            @endforeach

            @endif
        </div>
    </div> <!-- div.row -->
</div> <!-- div.container -->
@endsection