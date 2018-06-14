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
        <div id="form-layout" class="responsive desktop" data-idx="1"></div>
      </div>
      <div class="right-panel">
        <div class="menu-container">
          <h4 class="left-panel-menu-title">Form Objects</h4>
          <a href="#" id="add-row" class="button w-button">Row</a>
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
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script>

    // Lets start building the form builder javacsript manager



    var DOMManager = {

        intIndex : 0,
        intParent : 1,
        intTagIndex : 0,
        currentElement : null,
        nodes : [],

        getIndex : function (){

            this.intIndex ++;

            return this.intIndex;

        },

        getParent : function (){

            return this.intParent;

        },


        getTagIndex : function (){

            this.intTagIndex ++;

            return this.intTagIndex;

        },

        init : function(){

            this.createNode ({
                'id' : this.getIndex(),
                'parent' : null,
                'name' : 'wrapper'
            });

            this.getParent();

        },

        currentParent : function (){
            return this.intParent;
        },

        selectedItem : function ( index ){
            this.intParent = index;
        },

        createNode : function ( data , tagParent = null ) {

                this.nodes.push ( data );

        }


    };

    $('document').ready(function(){

        function editorHTML( name , type , p , i , strClass = '' ){

            return  '<div class="form-designer-editor-line ' + strClass + '">'+
                    '<div class="form-designer-panel-top">'+
                    '<div class="form-designer-title-row">'+
                    '<div class="form-designer-title-column-1">'+
                    '<div class="form-designer-panel-name">' + name + '</div>'+
                    '</div>'+
                    '<div class="form-designer-title-column-2">'+
                    '<div class="form-designer-panel-type">Type = ' + type + '</div>'+
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
                    '<div id="' + i + '" class="form-designer-panel-bottom" data-parent="' + p + '">'+
                    '</div>'+
                    '</div>';

        };

        DOMManager.init();

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

        $('#add-row').click( function() {

            DOMManager.createNode({
                'id' : DOMManager.getIndex(),
                'parent' : DOMManager.currentParent(),
                'name' : 'container'
            });

            $('#form-layout').append( editorHTML( 'Row' , 'Row' , DOMManager.currentParent() , DOMManager.intIndex ));

            $('#' + DOMManager.intIndex).addClass('flex');

            $('.form-designer-editor-line').hover( function() {
                $( this ).addClass('hover-item');
            }, function() {
                $( this ).removeClass('hover-item');
            });

            $('.form-designer-panel-bottom', this).css( "background-color" , "#eeeeee" );
            $('.form-designer-panel-bottom').click( function(){
                $('.form-designer-panel-bottom').removeClass('selected');
                DOMManager.selectedItem($(this).attr('id'));
                $(this).addClass('selected');
            });


        });

        $('#add-column').click( function() {

            DOMManager.createNode({
                'id' : DOMManager.getIndex(),
                'parent' : DOMManager.currentParent(),
                'name' : 'column'
            });

            $('#' + DOMManager.currentParent()).append( editorHTML( 'Column' , 'Column' , DOMManager.currentParent() , DOMManager.intIndex  , 'flex-column' ));

            $('.form-designer-editor-line').hover( function() {
                $( this ).addClass('hover-item');
            }, function() {
                $( this ).removeClass('hover-item');
            });

            $('.form-designer-panel-bottom', this).css( "background-color" , "#eeeeee" );
            $('.form-designer-panel-bottom').click( function(){
                $('.form-designer-panel-bottom').removeClass('selected');
                DOMManager.selectedItem($(this).attr('id'));
                $(this).addClass('selected');
            });

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
