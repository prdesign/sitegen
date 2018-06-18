$('document').ready(function(){

    editor = {
        DB : {
            nodeIndex : 0,
            nodes : [],
            node : {
                'idx' : null,
                'parent' : null,
                'tag' : null,
                'attribs' : [],
                'classes' : [],
                'data' : null,
            },

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

            addNode : function ( tag , pIndex = null , attribs = null , classes =null ){  // No parent declared so it is null

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

                this.node.idx = this.nodeIndex;
                this.node.parent = pIndex;
                this.node.tag = tag;

                if ( attribs != null ){
                    this.node.attribs = attribs;
                }

                if ( classes != null ){
                    this.node.classes = classes;
                }

                // Push the node onto the array of nodes

                this.nodes.push( this.node );


            }
        },

        DOM : {

        }
    }

});
