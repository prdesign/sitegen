@extends('sitegen::sitegen.layout')
@section('title' , 'Dashboard')
@section('content')
<div class="admin-page-wrapper centered">
    <div class="dashboard-menu">
      <div class="dashboard-title">
        <h1 class="dashboard-title-h1">Dashboard</h1>
    </div>
        <div class="dashboard-links">
            <a href="{{route('sitegen.user.browse')}}" class="dashboard-link w-button">Users</a>
            <a href="{{route('sitegen.role.browse')}}" class="dashboard-link w-button">Roles</a>
            <a href="{{route('sitegen.page.browse')}}" class="dashboard-link w-button">Pages</a>
            <a href="{{route('sitegen.form.browse')}}" class="dashboard-link w-button">Forms</a>
            <a href="{{route('sitegen.formbuilder.index')}}" class="dashboard-link w-button">Settings</a>
            <a href="{{route('sitegen.wizard.index')}}" class="dashboard-link w-button">Settings</a>
            <a href="{{route('sitegen.settings.browse')}}" class="dashboard-link w-button">Settings</a>
        </div>
    </div>
  </div>
@endsection
