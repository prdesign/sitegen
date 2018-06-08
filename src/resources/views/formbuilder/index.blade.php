@extends('sitegen::formbuilder.layout')
@section('title' , 'Form Builder Home')
@section('content')
<div class="site-wrapper">
    <div class="flex-top">
      <div class="title">Form Builder</div>
      <div class="flex-menu">
        <a href="{{ route('sitegen.dashboard.index') }}" class="top-bar-menu-btn w-button">Home</a>
        <a href="#" class="top-bar-menu-btn w-button">New Form</a>
        <a href="#" class="top-bar-menu-btn w-button">Export</a>
        <a href="#" class="top-bar-menu-btn w-button">Preview</a>
      </div>
    </div>
    <div class="flex-bottom">
      <div class="left-panel"></div>
      <div class="right-panel">
        <div class="div-block">
          <h4 class="left-panel-menu-title">Form Objects</h4>
          <a href="#" class="button w-button">Panel</a>
          <a href="#" class="button w-button">form container</a>
          <a href="#" class="button w-button">Fieldset</a>
          <a href="#" class="button w-button">Group</a>
          <a href="#" class="button w-button">Text</a>
          <a href="#" class="button w-button">Text Area</a>
          <a href="#" class="button w-button">Submit</a>
          <a href="#" class="button w-button">Button</a>
          <a href="#" class="button w-button">Select box</a>
          <a href="#" class="button w-button">List box</a>
          <a href="#" class="button w-button">Radio Button</a>
          <a href="#" class="button w-button">Checkbox</a>
        </div>
      </div>
    </div>
  </div>
@endsection