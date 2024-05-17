@extends('layouts.app')
@section('content')
    <x-section-index-wrapper>
        <x-button.create route="{{ route('users.create') }}" />

        @include('users._table')
    </x-section-index-wrapper>
@endsection
