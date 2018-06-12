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
      <div class="left-panel">
        <div id="form-layout" class="responsive desktop"></div>
      </div>
      <div class="right-panel">
        <div class="menu-container">
          <h4 class="left-panel-menu-title">Form Objects</h4>
          <a href="#" id="add-container" class="button w-button">Container</a>
          <a href="#" id="add-column" class="button w-button">Column</a>
          <a href="#" id="add-panel" class="button w-button">Panel</a>
          <a href="#" id="add-form-container" class="button w-button">form container</a>
          <a href="#" id="add-fieldset" class="button w-button">Fieldset</a>
          <a href="#" id="add-legend" class="button w-button">Legend</a>
          <a href="#" id="add-text" class="button w-button">Text</a>
          <a href="#" id="add-textarea" class="button w-button">Text Area</a>
          <a href="#" id="add-submit-button" class="button w-button">Submit</a>
          <a href="#" id="add-button" class="button w-button">Button</a>
          <a href="#" id="add-selectbox" class="button w-button">Select box</a>
          <a href="#" id="add-listbox" class="button w-button">List box</a>
          <a href="#" id="add-radio-button" class="button w-button">Radio Button</a>
          <a href="#" id="add-checkbox" class="button w-button">Checkbox</a>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
  <script>

    intCounter = 0;

    $('document').ready(function(){



        var formitemstart = '<div class="form-designer-editor-line">'+
                            '<div class="form-designer-panel-top">'+
                            '<div class="form-designer-title-row">'+
                            '<div class="form-designer-title-column-1">'+
                            '<div class="form-designer-panel-name">Name</div>'+
                            '</div>'+
                            '<div class="form-designer-title-column-2">'+
                            '<div class="form-designer-panel-type">Type = #</div>'+
                            '</div>'+
                            '<div class="form-designer-title-column3">'+
                            '<div class="action-icons">'+
                            '<div class="text-block-5"><strong></strong></div>'+
                            '<div class="text-block-4"><strong class="bold-text-4"></strong></div>'+
                            '<div class="text-block"><strong class="bold-text"></strong></div>'+
                            '<div class="text-block-3"><strong class="bold-text-2"></strong></div>'+
                            '<div class="text-block-2"><strong class="bold-text-3"> </strong></div>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '<div class="form-designer-panel-bottom">';


        var formitemend =   '</div></div>';

        //test

        $('#add-container').click( function() {

            var htmldata =  '';
            intCounter++;

            $('#form-layout').append( formitemstart + htmldata + formitemend );
            $('.form-designer-panel-name').html("Name : Container");
            $('.form-designer-panel-type').html("Type = Container");

            $('.form-designer-panel-bottom').attr('data-idx' , intCounter );


            $('.form-designer-editor-line').hover( function() {
                $('.form-designer-panel-bottom', this).css( "background-color" , "#ddaabb" );
            }, function() {
                $('.form-designer-panel-bottom', this).removeAttr("style");
            });

        });

        $('#add-column').click( function() {

            var htmldata =  '';

            $('#form-layout').append( formitemstart + htmldata + formitemend );
            $('.form-designer-panel-name').html("Name : Column");
            $('.form-designer-panel-type').html("Type = Column");

        });


        $('#add-panel').click( function() {

            var htmldata =  '<div class="panel panel-default">' +
                            '<div class="panel-heading">Panel Heading</div>' +
                            '<div class="panel-body">Panel Content</div>' +
                            '</div>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );
            $('.form-designer-panel-name').html("Name : Panel");
            $('.form-designer-panel-type').html("Type = Panel");

        });

        $('#add-form-container').click( function() {

            var htmldata =  '<form action="#">' +
                            '</form>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );

        });

        $('#add-fieldset').click( function() {

            var htmldata =  '<fieldset>' +
                            '</fieldset>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );

        });

        $('#add-legend').click( function() {

            var htmldata =  '<legend>' +
                            '</legend>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );

        });


        $('#add-text').click( function() {

            var htmldata =  '<input type="text">';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-textarea').click( function() {

            var htmldata =  '<textarea>' +
                            '</textarea>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-submit-button').click( function() {

            var htmldata =  '<input type="submit">';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-button').click( function() {

            var htmldata =  '<input type="button">';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-selectbox').click( function() {

            var htmldata =  '<select>' +
                            '<option value="1">1</option>' +
                            '<option value="2">2</option>' +
                            '<option value="3">3</option>' +
                            '</select>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-listbox').click( function() {

            var htmldata =  '<select size="5">' +
                            '<option value="1">1</option>' +
                            '<option value="2">2</option>' +
                            '<option value="3">3</option>' +
                            '</select>';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-radio-button').click( function() {

            var htmldata =  '<input type="radio">';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });

        $('#add-checkbox').click( function() {

            var htmldata =  '<input type="checkbox">';

            $('#form-layout').append( formitemstart + htmldata + formitemend );


        });


    });
  </script>
@endsection
