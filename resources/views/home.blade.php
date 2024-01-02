@extends('layouts.app')

@section('breadcrumbs')
<li class="breadcrumb-item">
<!-- if breadcrumb is single--><a href="#">Home</a>
</li>
<li class="breadcrumb-item">
<!-- if breadcrumb is single--><a href="#">Components</a>
</li>
@endsection

@section('content')
    @include('dashboard')
@endsection
