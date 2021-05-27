@extends('layouts.app')
@section('content')
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
                        <div class="card-header">Pridėkite atsiliepimą:</div>
                        <div class="card-body">
                            <form action="{{ route('sales.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    @error('employee_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label>Aptarnavęs darbuotojas: </label>
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
                                    <label for="">Atranavimo greitis: </label>
                                    <input type="number" name="speed" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('service')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Aptarnavimo kokybė: </label>
                                    <input type="number" name="service" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('recommendation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Rekomendacijos tikimybė: </label>
                                    <input type="number" name="recommendation" class="form-control">
                                </div>
                                <div class="form-group">
                                    @error('comments')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Pastabos:</label>
                                    <textarea id="mce" type="text" name="comments" rows=5 cols=20 maxlength="100"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    @error('is_consented')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <label for="">Ar galėsime šį Jūsų vertinimą panaudoti savo svetainėje
                                        ar socialiniuose puslapiuose? </label>
                                        <input type="checkbox" name="is_consented" id="is_consented" value="1">Taip
                                        <input type="checkbox" name="is_consented" id="is_consented" value="0">Ne
                                </div>
                                <button type="submit" class="btn btn-primary">Pridėti</button>
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