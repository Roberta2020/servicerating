@extends('layouts.app')
@section('content')
@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
        <p style="color: red">{{ $error }}</p>
    @endforeach
</div>
@endif
{{-- Database error --}}
@if (session('status_success'))
<p style="color: green"><b>{{ session('status_success') }}</b></p>
@else
<p style="color: red"><b>{{ session('status_error') }}</b></p>
@endif
<div class="card-body">
    <h2>Aptarnavimo vertinimo anketų duomenys</h2>
    <table class="table">
        <tr>
            <th>Aptarnavęs darbuotojas</th>
            <th>Aptarnavimo greitis</th>
            <th>Aptarnavimo kokybė</th>
            <th>Rekomendacijos tikimybė</th>
            <th>Pastabos</th>
            <th>Sutikimas naudoti verinimą</th>
        </tr>
        @foreach ($sales as $sale)
        <tr> 
            <td>{{ $sale->employee['name'] }}</td>
            <td>{{ $sale->speed }}</td>
            <td>{{ $sale->service }}</td>
            <td>{{ $sale->recommendation }}</td>
            <td>{!! $sale->comments !!}</td>
            <td>
                @if($sale->is_consented == 0)
                Ne
                @elseif ($sale->is_consented == 1)
                Taip
                @endif
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('sales.create') }}" class="btn btn-success">Pridėti naują atsiliepimą</a>
    </div>
</div>
@endsection