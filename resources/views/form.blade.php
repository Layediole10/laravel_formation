@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('addItem')}}">
        @csrf
        <input type="text" name="title">
        <textarea name="description" cols="30" rows="10"></textarea>
        <button type="submit">envyer</button>
    </form>
@endsection