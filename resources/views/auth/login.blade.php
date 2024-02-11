<?php
/** @var \Illuminate\Support\ViewErrorBag $errors */
?>

@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="login__section">
        <div class="">
            <div class="">
                <h1 class="">Login</h1>

                {{-- @if ($errors->any())
                    <p class="mb-3 text-danger"> Hay campos con errores de validación. Por favor, verificar y corregir los
                        valores indicados.</p>
                @endif --}}

                <form class="login__section-form" action="{{ route('auth.login.process') }}" method="post">
                    @csrf
                    <div class="login__section-form-email">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email"
                            class="input-email @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            @error('email')
                        aria-describedby="error-email"
                        aria-invalid="true"
                        @enderror>
                        @error('email')
                            <p class="text-danger" id="error-email">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="login__section-form-pass">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" id="password" name="password"
                            class="input-pass @error('password') is-invalid @enderror"
                            @error('password')
                        aria-describedby="password"
                        aria-invalid="true"
                        @enderror>
                        @error('password')
                            <p class="text-danger" id="error-password">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="login__section-form-button">
                        <button type="submit" class="">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
