@extends('layouts.app')
@section('content')
<form action="{{ route('tests.process') }}" method="POST">
    @csrf
    <input type="hidden" name="report" value="1">
    @foreach ($availableTests as $key => $label)
        <div>
            <input type="checkbox" name="tests[]" value="{{ $key }}" id="{{ $key }}">
            <label for="{{ $key }}">{{ $label }}</label>
        </div>
    @endforeach
    <button type="submit">Submit</button>
</form>
@endsection
