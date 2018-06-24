@extends('sitegen::sitegen.layout')
@section('title' , 'Page Manager')
@section('content')
<div class="admin-page-wrapper">
    <div class="admin-page-title-heading">
      <h1 class="admin-page-title-heading-h1">Manage Pages</h1>
    </div>
    <div class="admin-page-header-spacer"></div>
    <div class="admin-page-action-button-area"><a href="#" class="admin-page-action-btn add w-button">Add Page</a><a href="#" class="admin-page-action-btn edit w-button">Edit Page</a><a href="#" class="admin-page-action-btn edit delete w-button">Delete Page</a></div>
    <div class="admin-page-datatable-container">
      <div class="admin-page-datatable-row">
        <div class="admin-page-table-col"></div>
        <div class="admin-page-table-col"></div>
        <div class="admin-page-table-col"></div>
      </div>
    </div>
  </div>
@endsection
