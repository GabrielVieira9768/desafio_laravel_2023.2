@extends('adminlte::page')

@section('title', 'Área Administrativa')

@section('content_header')
    <h1>Área Administrativa</h1>
@stop

@section('content')
    <div class="row card-header card-outline cor-backend" style="justify-content:center">

        <div class="col-lg-3 col-6">
            <a href="{{ route('home') }}">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Relatório</h3>
                        <p>Gerar Relatório de Consultas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-6">
            <a href="{{ route('email.index') }}">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>Enviar Email</h3>
                        <p>Mandar Email aos Proprietários</p>
                    </div>
                    <div class="icon">
                    <i class="far fa-envelope"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop