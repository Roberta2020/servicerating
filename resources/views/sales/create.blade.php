@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('../css/create.css') }}">
<script type="text/javascript" src="{{ URL::to('../js/create.js') }}"></script>
    {{-- Validation error --}}
    {{-- @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p style="color: red">{{ $error }}</p>
            @endforeach
        </div>
    @endif --}}
    {{-- Database error --}}
    {{-- @if (session('status_success'))
        <p style="color: green"><b>{{ session('status_success') }}</b></p>
    @else
        <p style="color: red"><b>{{ session('status_error') }}</b></p>
    @endif
    @if (auth()->check())
        @if (session('status_success'))
            <div class="alert alert-success" role="alert">{{ session('status_success') }}</div>
        @endif
        @if (session('status_error'))
            <div class="alert alert-danger" role="alert">{{ session('status_error') }}</div>
        @endif --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Pridėkite atsiliepimą</div>
                        <div class="card-body">
                            <form action="{{ route('sales.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    @error('employee_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Jus aptarnavęs darbuotojas: </label>
                                    <select name="employee_id" id="" class="form-control">
                                        <option value="" selected disabled>Pasirinkite aptarnavusį darbuotoją</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    @error('speed')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Kaip vertinate aptarnavimo greitį?<br>( 1 - labai blogai, 10 - labai gerai)</label>
                                    <br>
                                    <div class="rating">
                                        <input type="radio" name = "speed" id="speed10" value = "10"}><label for="speed10">10</label>
                                        <input type="radio" name = "speed" id="speed9" value = "9"}><label for="speed9">9</label>
                                        <input type="radio" name = "speed" id="speed8" value = "8"}><label for="speed8">8</label>
                                        <input type="radio" name = "speed" id="speed7" value = "7"}><label for="speed7">7</label>
                                        <input type="radio" name = "speed" id="speed6" value = "6"}><label for="speed6">6</label>
                                        <input type="radio" name = "speed" id="speed5" value = "5"}><label for="speed5">5</label>
                                        <input type="radio" name = "speed" id="speed4" value = "4"}><label for="speed4">4</label>
                                        <input type="radio" name = "speed" id="speed3" value = "3"}><label for="speed3">3</label>
                                        <input type="radio" name = "speed" id="speed2" value = "2"}><label for="speed2">2</label>
                                        <input type="radio" name = "speed" id="speed1" value = "1"}><label for="speed1">1</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @error('service')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Kaip vertinate aptarnavimo kokybę?<br>( 1 - labai blogai, 10 - labai gerai)</label>
                                    <br>
                                    <div class="rating">
                                        <input type="radio" name = "service" id="service10" value = "10"}><label for="service10">10</label>
                                        <input type="radio" name = "service" id="service9" value = "9"}><label for="service9">9</label>
                                        <input type="radio" name = "service" id="service8" value = "8"}><label for="service8">8</label>
                                        <input type="radio" name = "service" id="service7" value = "7"}><label for="service7">7</label>
                                        <input type="radio" name = "service" id="service6" value = "6"}><label for="service6">6</label>
                                        <input type="radio" name = "service" id="service5" value = "5"}><label for="service5">5</label>
                                        <input type="radio" name = "service" id="service4" value = "4"}><label for="service4">4</label>
                                        <input type="radio" name = "service" id="service3" value = "3"}><label for="service3">3</label>
                                        <input type="radio" name = "service" id="service2" value = "2"}><label for="service2">2</label>
                                        <input type="radio" name = "service" id="service1" value = "1"}><label for="service1">1</label>
                                    </div>    
                                </div>
                                <div class="form-group">
                                    @error('recommendation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Kokia tikimybė, kad rekomenduosite mus savo draugams?<br>( 1 - labai maža, 10 - labai didelė)</label>
                                    <br>
                                    <div class="rating">
                                        <input type="radio" name = "recommendation" id="recommendation10" value = "10"}><label for="recommendation10">10</label>
                                        <input type="radio" name = "recommendation" id="recommendation9" value = "9"}><label for="recommendation9">9</label>
                                        <input type="radio" name = "recommendation" id="recommendation8" value = "8"}><label for="recommendation8">8</label>
                                        <input type="radio" name = "recommendation" id="recommendation7" value = "7"}><label for="recommendation7">7</label>
                                        <input type="radio" name = "recommendation" id="recommendation6" value = "6"}><label for="recommendation6">6</label>
                                        <input type="radio" name = "recommendation" id="recommendation5" value = "5"}><label for="recommendation5">5</label>
                                        <input type="radio" name = "recommendation" id="recommendation4" value = "4"}><label for="recommendation4">4</label>
                                        <input type="radio" name = "recommendation" id="recommendation3" value = "3"}><label for="recommendation3">3</label>
                                        <input type="radio" name = "recommendation" id="recommendation2" value = "2"}><label for="recommendation2">2</label>
                                        <input type="radio" name = "recommendation" id="recommendation1" value = "1"}><label for="recommendation1">1</label>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    @error('comments')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Gal galite pakomentuoti, kodėl pateikėte tokius vertinimus?</label>
                                    <textarea id="mce" type="text" name="comments" rows=5 cols=20 maxlength="100"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    @error('is_consented')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėje ar socialiniuose puslapiuose? </label>
                                        <br>
                                        <div class="check">
                                        <input type="checkbox" class="radioCheck" name="is_consented" id="is_consented" value="1" onclick="check(this);"><div>Taip</div>
                                        </div>
                                        <div class="check">
                                        <input type="checkbox" class="radioCheck" name="is_consented" id="is_consented" value="0" onclick="check(this);"><div>Ne</div>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Siųsti</button>
                                <div class="form-group row" style="float: right; margin-right:2px;">
                                    <a href="/sales" class="btn btn-primary">Atgal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- @endif --}}
@endsection