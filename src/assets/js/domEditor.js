$('document').ready(function(){

    editor = {
        DB : {
            nodeIndex : 0,
            nodes : [],

            validTag : function (tag){

                var tags = [
                    'article', 'section', 'nav', 'aside', 'header', 'footer', 'address', 'div', 'span',
                    'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'pre', 'blockquote', 'ol', 'ul', 'li', 'dl',
                    'dt', 'dd', 'figure', 'figcaption', 'main', 'hr', 'a', 'em', 'strong', 'cite', 'q',
                    'dfn', 'abbr', 'data', 'time', 'code', 'var', 'samp', 'kbd', 'mark', 'ruby', 'rb',
                    'rt', 'rp', 'rtc', 'bdi', 'bdo', 'br', 'wbr', 'small', 'i', 'b', 'u', 's', 'sub', 'sup',
                    'ins', 'del', 'img', 'embed', 'object', 'param', 'video', 'audio', 'source', 'track',
                    'map', 'area', 'iframe', 'table', 'tr', 'td', 'th', 'caption', 'tbody', 'thead', 'tfoot',
                    'colgroup', 'col', 'form', 'input', 'textarea', 'select', 'option', 'optgroup', 'datalist',
                    'label', 'fieldset', 'legend', 'button', 'output', 'progress', 'meter', 'keygen', 'script',
                    'noscript', 'template', 'canvas',
                ];

                var found = false;

                for (x = 0 ; x < tags.length ; x++){
                    if ( tags[x].toLowerCase() == tag.toLowerCase() ) {
                        found = true;
                    }
                }

                return found;

            },

            validInputType : function ( inputType ){

                var inputTypes = [
                    'button', 'checkbox', 'color', 'date', 'datetime-local', 'email', 'file',
                    'hidden', 'image', 'month', 'number', 'password', 'radio', 'range', 'reset',
                    'search', 'submit', 'tel', 'text', 'time', 'url', 'week',

                ];

                var found = false;

                for (x = 0 ; x < inputTypes.length ; x++){
                    if ( inputTypes[x].toLowerCase() == inputType.toLowerCase() ) {
                        found = true;
                    }
                }

                return found;

            },


            addNode : function ( tag , pIndex = null , attribs = null , classes = null , strData = null ){  // No parent declared so it is null

                // Has a HTML tag been requested

                if ( !tag ){
                    return 'Error: addNode called but no HTML tag defined';
                }

                // Lets check if the HTML tag is valid

                if (!this.validTag( tag )){
                    return 'Invalid HTML tag requested';
                }

                // first we need to create

                this.nodeIndex++;

                node = new Object();

                node.id = this.nodeIndex;
                node.parent = pIndex;
                node.tag = tag;
                node.data = strData;

                if ( attribs != null ){
                    node.attribs = attribs;
                }

                if ( classes != null ){
                    node.classes = classes;
                }

                // Push the node onto the array of nodes

                this.nodes.push ( node );

                //Todo: return the current array index of this added node

            }
        },

        DOM : {

            parentNode : 0,
            intIndex : 0,

            loadTemplate : function ( name ){



            },

            saveTemplate : function ( name ){



            },

            template : function ( parent ){



            }

        },

        TEMPLATE : {

            formEditorRow : {

                data : [

                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-editor-line'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-top'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-row'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-column1'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-name'
                        ],
                        'data' : 'Name'
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-column2'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-type'
                        ],
                        'data' : 'Type #'
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-column3'
                        ]
                    },
                    {
                        'id' : 0,
                        'parent' : null,
                        'tag' : 'div',
                        'attribs' : [],
                        'classes' : [
                            'form-designer-panel-bottom'
                        ]
                    },



                ],


            }

        },

        put ( htmlString ){

            //console.log ( htmlString );

            arrItems = htmlString.split(" ");
            tag = arrItems[0].slice(1);

            intClassDataIndex = null;

            console.log ('tag:' + tag );

            if (htmlString.includes('class=') == true){

                arrItems = htmlString.split('"');

                for ( x = 0 ; x < arrItems.length ; x++ ){

                    if (arrItems[x].includes('class=')) {

                        classNames = arrItems[x + 1].split(' ');
                        console.log ( 'classes:' + classNames );

                    }

                    if (arrItems[x].includes('data-')) {

                        customAttribs = arrItems[x + 1].split(' ');
                        attribName = arrItems[x].slice(1);
                        attribName = attribName.split('=');
                        attribName = attribName[0];
                        console.log( 'attrib name:' + attribName );
                        console.log ( 'attrib data:' + customAttribs );

                    }

                    if (arrItems[x].includes('type=')) {

                        typeProperty = arrItems[x + 1];
                        console.log ( 'type:' + typeProperty );

                    }

                    if (arrItems[x].includes('name=')) {

                        nameProperty = arrItems[x + 1];
                        console.log ( 'name:' + nameProperty );

                    }

                    if (arrItems[x].includes('value=')) {

                        valueProperty = arrItems[x + 1];
                        console.log ( 'value:' + valueProperty );

                    }

                    if (arrItems[x].includes('placeholder=')) {

                        placeholderProperty = arrItems[x + 1];
                        console.log ( 'placeholder:' + placeholderProperty );

                    }

                }

                //console.log(arrItems);
            }

        },

        get ( id ) {

            console.log ( 'looking for data with id ' + id );

        }
    }

});
