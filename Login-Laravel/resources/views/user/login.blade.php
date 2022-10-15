@extends('layouts.main')

@section('title', 'Login')

@section('content')

<form action="{{route('auth.user')}}" method="POST">
    <div class="form">

        <div class="title field">
            <h1>Entre com sua conta</h1>
        </div>

        {{-- Email --}}
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input is-rounded @error('email') is-invalid @enderror" type=" email" name="email"
                    placeholder="Email" required value="{{old('email')}}">

                <span class="icon is-small is-left">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
            </p>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="field">
            <p class="control has-icons-left">
                <input class="input is-rounded @error('password') is-invalid @enderror" type="password" name="password"
                    placeholder="Senha" required>

                <span class="icon is-small is-left">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
            </p>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        {{-- Button --}}
        <div class="field">
            <p class="control">
                <button class="button is-success">
                    Criar conta
                </button>
            </p>
        </div>
    </div>
</form>

@endsection