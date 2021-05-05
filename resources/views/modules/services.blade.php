@extends('page.portal')

@section('content_portal')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Servicios</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        Esta Semana
      </button>
    </div>
  </div>
  <div class="container">
    <div class="tabulation-2 mt-4">
        <ul class="nav nav-pills nav-fill d-md-flex d-block">
        <li class="nav-item mb-md-0 mb-2">
            <a class="nav-link active py-3" data-toggle="tab" href="#servicesTab">Servicios</a>
        </li>
        <li class="nav-item px-lg-2 mb-md-0 mb-2">
            <a class="nav-link py-3" data-toggle="tab" href="#quotesTab">Cotizaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#reportTab">Reportes</a>
        </li>
        </ul>
        <div class="tab-content rounded mt-2">
        <div class="tab-pane container p-0 active" id="servicesTab">
            @include('modules.servicesList');
        </div>
        <div class="tab-pane container p-0 fade" id="quotesTab">
            @include('modules.quotes');
        </div>
        <div class="tab-pane container p-0 fade" id="reportTab">
            @include('modules.reports');
        </div>
        </div>
    </div>
  </div>

@endsection
