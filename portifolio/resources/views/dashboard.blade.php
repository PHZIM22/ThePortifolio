@extends('layouts.layout')
@section('title', 'Dashbord')
@section('content')

<x-dashboard.navbar/>
@php
    $x ="list";
@endphp

@if ($x == "teste")
    <p>rodou</p>
@elseif ($x == "list")
    <x-dashboard.liste/>
@else
@endif

@if (isset($msg))
<div class="alert alert-success" role="alert">
    {{$msg}}
</div>
@else


@endif

<x-dashboard.about-modal/>
<x-dashboard.service-modal/>
<x-dashboard.portifolio-modal/>
<x-dashboard.signature-modal/>
<x-dashboard.testimonials-modal/>



















@endsection