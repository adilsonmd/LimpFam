@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">    
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" data-toggle="modal" data-target="#saleModal">
                    +Nova venda
                </button>
                <!-- modal --> 
                @extends('dashboard.create')
                <!-- End modal -->
            </div>
        </div>
    
        <div class="col-sm-6"> 
            <?php $sumValue = 0; ?>
            @if(isset($sales))
            
            <ul class="list-group list-group-flush">
            @foreach($sales as $sale)
                <?php $sumValue += $sale->value; ?>
                <li class="list-group-item">
                    <?php echo($sale->product_name . "(Qtd: " . $sale->quantity . ") - R$" . $sale->value) ?>
                </li>
            @endforeach
            </ul>
            @else
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Sem vendas</li>
            </ul>
            @endif
        </div>
    
        <div class="col-sm-3">
            
            <h2>Mês: {{ date('F') }}</h2>
            <h1 class="text-success">R${{ $sumValue }}</h1>
        </div>
    </div>
@endsection