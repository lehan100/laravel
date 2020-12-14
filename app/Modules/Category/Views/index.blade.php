@extends('layouts.backend.admin')
@section('title')
Dashboard
@stop
@section('content')
<nav aria-label="breadcrumb" class="mt-2 mb-4">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>
  <h3 class="text-uppercase">Basic Form Elements</h3>
    {{--  @include('Category::children.test')  --}}
@endsection