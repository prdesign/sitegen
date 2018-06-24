@extends('sitegen::sitegen.layout')
@section('title' , 'Dashboard')
@section('content')
<div class="admin-page-wrapper centered">
    <div class="dashboard-menu">
      <div class="dashboard-title">
        <h1 class="dashboard-title-h1">Dashboard</h1>
      </div>
      <div class="dashboard-links">
          <a href="#" class="dashboard-link w-button">Settings</a>
          <a href="{{route('sitegen.page.browse')}}" class="dashboard-link w-button">Pages</a>
          <a href="{{route('sitegen.form.browse')}}" class="dashboard-link w-button">Forms</a>
      </div>
    </div>
  </div>
@endsection
