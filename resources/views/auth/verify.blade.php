@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Enviamos un enlace a su Email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor verifique su Email para acceder al enlace.') }}
                    {{ __('Si no recibió el Email') }}, <a href="{{ route('verification.resend') }}">{{ __('Haga click aqui para solicitar nuevamente.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
