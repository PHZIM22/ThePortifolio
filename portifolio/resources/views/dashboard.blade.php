@extends('layouts.layout')
@section('title', 'Dashbord')
@section('content')
<!-- navbar dashboard bootstrap 4.6-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          About
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalAbout">Add</a></li>
          <li><a class="dropdown-item" href="#">list</a></li>
         
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#data-toggle="modal" data-target="#modalservice">Add</a></li>"
          Service
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#data-toggle="modal" data-target="#modalportifolio">Add</a></li>"
          <li><a class="dropdown-item" href="#">list</a></li>
         
        </ul>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Portifolio
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#data-toggle="modal" data-target="#modaltestimonials">Add</a></li>"
          <li><a class="dropdown-item" href="#">list</a></li>
         
        </ul>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Testimonials
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#data-toggle="modal" data-target="#modalsignature">Add</a></li>"
          <li><a class="dropdown-item" href="#">list</a></li>
         
        </ul>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Signature
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Add</a></li>
          <li><a class="dropdown-item" href="#">list</a></li>
         
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!--fim navbar dashboard-->
@php
    $x ="list";
@endphp

@if ($x == "teste")
    <p>rodou</p>
@elseif ($x == "list")
    <x-dashboard.liste/>
@else
@endif

<x-dashboard.about-modal/>
<x-dashboard.service-modal/>
<x-dashboard.portifolio-modal/>
<x-dashboard.signature-modal/>
<x-dashboard.testimonials-modal/>



















@endsection