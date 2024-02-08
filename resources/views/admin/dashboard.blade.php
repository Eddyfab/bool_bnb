@extends('layouts.app')

@section('content')
  <h1>Dashboard</h1>

  @foreach($apartments as $apartment)
    <p>{{ $apartment->title }}</p>
  @endforeach
@endsection