@extends('layouts.app')

@section('template_title')
    {{ $instrumento->name ?? 'Show Instrumento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Instrumento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('instrumentos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $instrumento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Familia:</strong>
                            {{ $instrumento->Familia }}
                        </div>
                        <div class="form-group">
                            <strong>Material:</strong>
                            {{ $instrumento->Material }}
                        </div>
                        <div class="form-group">
                            <strong>País:</strong>
                            {{ $instrumento->País }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
