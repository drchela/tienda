@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Formulario de Registro de Usuario</h3>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{url('/products')}}" method="post">
                            {{csrf_field()}}
                             @include('products.form')
                            </form>
                            <br>
                            <div class="col-md-6">
                            <div class="col-xs-12 col-md-6 col-lg-4">
                            <a class="btn btn-secondary" href="{{url('products')}}">Regresar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
