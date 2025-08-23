@extends('layouts.master')

@section('title','Customer Form')

@section('content')
    <h2>Customer Information</h2>

    {{-- Using Spatie Laravel HTML --}}
    {!! html()->form('POST', '/customer')->open() !!}
    @csrf

        <div class="mb-3">
            {!! html()->label('Full Name', 'name')->class('form-label') !!}
            {!! html()->text('name')->class('form-control')->placeholder('Enter your name') !!}
        </div>

        <div class="mb-3">
            {!! html()->label('Email address', 'email')->class('form-label') !!}
            {!! html()->email('email')->class('form-control')->placeholder('Enter your mail') !!}
        </div>

        <div class="mb-3">
            {!! html()->label('Bio', 'bio')->class('form-label') !!}
            {!! html()->textarea('bio')->class('form-control')->placeholder('Enter your bio') !!}
        </div>

        {!! html()->submit('Submit')->class('btn btn-primary') !!}

    {!! html()->form()->close() !!}

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

@endsection
