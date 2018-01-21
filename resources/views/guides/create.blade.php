@extends('layouts.base')

@section('content')
    <!-- Banner -->
    <div class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" style="background-image: url('{{ asset('images/game-diablo-iii-1400x656.jpg') }}')">
        </div>

        <div class="youplay-user-navigation">
            <div class="container">
                <ul>
                    <li class="active"><a href="#">Create Guide</a>
                    </li>
                </ul>
            </div>
        </div>

        @include('user.widget')


    </div>
    <!-- /Banner -->

    <div class="container youplay-content">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-sm-4">Guide Type:</label>
                    <div class="col-sm-8">
                        <div class="youplay-select">
                            <select>
                                <option>General</option>
                                <option>Pilot</option>
                                <option>Formation</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center" style="display: none">
                <img src="{{ asset('images/raids/demon.png') }}" style="max-width: 100px" alt="">
                <img src="{{ asset('images/raids/dragon.png') }}" style="max-width: 100px" alt="">
                <img src="{{ asset('images/raids/kraken.png') }}" style="max-width: 100px" alt="">
            </div>
            <div class="col-md-6 text-center" style="max-height: 150px; overflow-y: auto">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
                <img src="{{ asset('images/c_060_1.png') }}" style="max-width: 100px; margin:5px" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                    <textarea id="editor1" name="editor" placeholder="Type your text here...">
                    </textarea>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="youplay-checkbox">
                    <input type="checkbox" name="appearance" id="appearance">
                    <label for="appearance">Create as private guide</label>
                    <br>
                    <span class="label">The guide will not appear in guide list. Only can access it with a share link</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <div class="btn-group">
                    <a href="#!" class="btn btn-primary">Preview</a>
                    <a href="#!" class="btn btn-success">Save</a>
                    <a href="#!" class="btn">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="{{ asset('bower_components/wysiwyg/wysiwyg-editor.css')  }}" rel="stylesheet">
    <style>
        /* CSS for the font-name + font-size plugin */
        .wysiwyg-plugin-list {
            max-height: 16em;
            overflow: auto;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        .wysiwyg-plugin-list a,
        .wysiwyg-plugin-list a:link,
        .wysiwyg-plugin-list a:visited {
            display: block;
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            cursor: pointer;
        }
        .wysiwyg-plugin-list a:hover {
            color: HighlightText;
            background-color: Highlight;
        }
        /* CSS for the smiley plugin */
        .wysiwyg-plugin-smilies {
            padding: 10px;
            text-align: center;
            white-space: normal;
        }
        .wysiwyg-plugin-smilies img {
            display: -moz-inline-stack; /* inline-block: http://blog.mozilla.org/webdev/2009/02/20/cross-browser-inline-block/ */
            display: inline-block;
            *display: inline;
        }
        /* Fake bootstrap + uikit */
        .fake-bootstrap.wysiwyg-container.wysiwyg-active {
            /* colors shamelessly stolen from bootstrap.form-control:focus */
            border-color: #66afe9;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(102, 175, 233, 0.6)
        }
        .fake-uikit.wysiwyg-container.wysiwyg-active {
            border-color: #99baca !important;
            background: #f5fbfe !important;
        }
    </style>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('bower_components/wysiwyg/wysiwyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bower_components/wysiwyg/wysiwyg-editor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Featured editor
            $('#editor1').each( function(index, element)
            {
                $(element).wysiwyg({
                    'class': index == 0 ? 'fake-bootstrap' : (index == 1 ? 'fake-uikit' : 'some-more-classes'),
                    // 'selection'|'top'|'top-selection'|'bottom'|'bottom-selection'
                    toolbar: index == 0 ? 'top-selection' : (index == 1 ? 'bottom-focus' : 'selection'),
                    buttons: {
                        // Smiley plugin
                        smilies: {
                            title: 'Smilies',
                            image: '\uf118', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            popup: function( $popup, $button ) {
                                var list_smilies = [
                                    '<img src="{{ asset('images/positions/celda1.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda2.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda3.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda4.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda5.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda6.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda7.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda8.png') }}" width="50px" />',
                                    '<img src="{{ asset('images/positions/celda9.png') }}" width="50px" />',
                                ];
                                var $smilies = $('<div/>').addClass('wysiwyg-plugin-smilies')
                                    .attr('unselectable','on');
                                $.each( list_smilies, function(index,smiley) {
                                    if( index != 0 )
                                        $smilies.append(' ');
                                    var $image = $(smiley).attr('unselectable','on');
                                    // Append smiley
                                    var imagehtml = ' '+$('<div/>').append($image.clone().removeAttr('width')).html()+' ';
                                    $image
                                        .css({ cursor: 'pointer' })
                                        .click(function(event) {
                                            $(element).wysiwyg('shell').insertHTML(imagehtml); // .closePopup(); - do not close the popup
                                        })
                                        .appendTo( $smilies );
                                });
                                var $container = $(element).wysiwyg('container');
                                $smilies.css({ maxWidth: parseInt($container.width()*0.95)+'px' });
                                $popup.append( $smilies );
                                // Smilies do not close on click, so force the popup-position to cover the toolbar
                                var $toolbar = $button.parents( '.wysiwyg-toolbar' );
                                if( ! $toolbar.length ) // selection toolbar?
                                    return ;
                                return { // this prevents applying default position
                                    left: parseInt( ($toolbar.outerWidth() - $popup.outerWidth()) / 2 ),
                                    top: $toolbar.hasClass('wysiwyg-toolbar-bottom') ? ($container.outerHeight() - parseInt($button.outerHeight()/4)) : (parseInt($button.outerHeight()/4) - $popup.height())
                                };
                            },
                            //showstatic: true,    // wanted on the toolbar
                            showselection: index == 2 ? true : false    // wanted on selection
                        },
                        insertlink: {
                            title: 'Insert link',
                            image: '\uf08e' // <img src="path/to/image.png" width="16" height="16" alt="" />
                        },
                        // Fontsize plugin
                        fontsize: index != 0 ? false : {
                            title: 'Size',
                            image: '\uf034', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            popup: function( $popup, $button ) {
                                // Hack: http://stackoverflow.com/questions/5868295/document-execcommand-fontsize-in-pixels/5870603#5870603
                                var list_fontsizes = [];
                                for( var i=8; i <= 11; ++i )
                                    list_fontsizes.push(i+'px');
                                for( var i=12; i <= 28; i+=2 )
                                    list_fontsizes.push(i+'px');
                                list_fontsizes.push('36px');
                                list_fontsizes.push('48px');
                                list_fontsizes.push('72px');
                                var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                    .attr('unselectable','on');
                                $.each( list_fontsizes, function( index, size ) {
                                    var $link = $('<a/>').attr('href','#')
                                        .html( size )
                                        .click(function(event) {
                                            $(element).wysiwyg('shell').fontSize(7).closePopup();
                                            $(element).wysiwyg('container')
                                                .find('font[size=7]')
                                                .removeAttr("size")
                                                .css("font-size", size);
                                            // prevent link-href-#
                                            event.stopPropagation();
                                            event.preventDefault();
                                            return false;
                                        });
                                    $list.append( $link );
                                });
                                $popup.append( $list );
                            }
                            //showstatic: true,    // wanted on the toolbar
                            //showselection: true    // wanted on selection
                        },
                        // Header plugin
                        header: index != 0 ? false : {
                            title: 'Header',
                            image: '\uf1dc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            popup: function( $popup, $button ) {
                                var list_headers = {
                                    // Name : Font
                                    'Header 1' : '<h1>',
                                    'Header 2' : '<h2>',
                                    'Header 3' : '<h3>',
                                    'Header 4' : '<h4>',
                                    'Header 5' : '<h5>',
                                    'Header 6' : '<h6>',
                                    'Code'     : '<pre>'
                                };
                                var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                    .attr('unselectable','on');
                                $.each( list_headers, function( name, format ) {
                                    var $link = $('<a/>').attr('href','#')
                                        .css( 'font-family', format )
                                        .html( name )
                                        .click(function(event) {
                                            $(element).wysiwyg('shell').format(format).closePopup();
                                            // prevent link-href-#
                                            event.stopPropagation();
                                            event.preventDefault();
                                            return false;
                                        });
                                    $list.append( $link );
                                });
                                $popup.append( $list );
                            }
                            //showstatic: true,    // wanted on the toolbar
                            //showselection: false    // wanted on selection
                        },
                        bold: {
                            title: 'Bold (Ctrl+B)',
                            image: '\uf032', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            hotkey: 'b'
                        },
                        italic: {
                            title: 'Italic (Ctrl+I)',
                            image: '\uf033', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            hotkey: 'i'
                        },
                        underline: {
                            title: 'Underline (Ctrl+U)',
                            image: '\uf0cd', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            hotkey: 'u'
                        },
                        strikethrough: {
                            title: 'Strikethrough (Ctrl+S)',
                            image: '\uf0cc', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            hotkey: 's'
                        },
                        forecolor: {
                            title: 'Text color',
                            image: '\uf1fc' // <img src="path/to/image.png" width="16" height="16" alt="" />
                        },
                        highlight: {
                            title: 'Background color',
                            image: '\uf043' // <img src="path/to/image.png" width="16" height="16" alt="" />
                        },
                        alignleft: index != 0 ? false : {
                            title: 'Left',
                            image: '\uf036', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        aligncenter: index != 0 ? false : {
                            title: 'Center',
                            image: '\uf037', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        alignright: index != 0 ? false : {
                            title: 'Right',
                            image: '\uf038', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        alignjustify: index != 0 ? false : {
                            title: 'Justify',
                            image: '\uf039', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        indent: index != 0 ? false : {
                            title: 'Indent',
                            image: '\uf03c', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        outdent: index != 0 ? false : {
                            title: 'Outdent',
                            image: '\uf03b', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        orderedList: index != 0 ? false : {
                            title: 'Ordered list',
                            image: '\uf0cb', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        unorderedList: index != 0 ? false : {
                            title: 'Unordered list',
                            image: '\uf0ca', // <img src="path/to/image.png" width="16" height="16" alt="" />
                            //showstatic: true,    // wanted on the toolbar
                            showselection: false    // wanted on selection
                        },
                        removeformat: {
                            title: 'Remove format',
                            image: '\uf12d' // <img src="path/to/image.png" width="16" height="16" alt="" />
                        }
                    },
                    // Submit-Button
                    // Other properties
                    selectImage: 'Click or drop image',
                    placeholderUrl: 'www.example.com',
                    placeholderEmbed: '<embed/>',
                    maxImageSize: [600,200],
                    //filterImageType: callback( file ) {},
                    onKeyDown: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        // E.g.: submit form on enter-key:
                        //if( (key == 10 || key == 13) && !shiftKey && !altKey && !ctrlKey && !metaKey ) {
                        //    submit_form();
                        //    return false; // swallow enter
                        //}
                    },
                    onKeyPress: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                    },
                    onKeyUp: function( key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                    },
                    onAutocomplete: function( typed, key, character, shiftKey, altKey, ctrlKey, metaKey ) {
                        if( typed.indexOf('@') == 0 ) // startswith '@'
                        {
                            var usernames = [
                                'Evelyn',
                                'Harry',
                                'Amelia',
                                'Oliver',
                                'Isabelle',
                                'Eddie',
                                'Editha',
                                'Jacob',
                                'Emily',
                                'George',
                                'Edison'
                            ];
                            var $list = $('<div/>').addClass('wysiwyg-plugin-list')
                                .attr('unselectable','on');
                            $.each( usernames, function( index, username ) {
                                if( username.toLowerCase().indexOf(typed.substring(1).toLowerCase()) !== 0 ) // don't count first character '@'
                                    return;
                                var $link = $('<a/>').attr('href','#')
                                    .text( username )
                                    .click(function(event) {
                                        var url = 'http://example.com/user/' + username,
                                            html = '<a href="' + url + '">@' + username + '</a> ';
                                        var editor = $(element).wysiwyg('shell');
                                        // Expand selection and set inject HTML
                                        editor.expandSelection( typed.length, 0 ).insertHTML( html );
                                        editor.closePopup().getElement().focus();
                                        // prevent link-href-#
                                        event.stopPropagation();
                                        event.preventDefault();
                                        return false;
                                    });
                                $list.append( $link );
                            });
                            if( $list.children().length )
                            {
                                if( key == 13 )
                                {
                                    $list.children(':first').click();
                                    return false; // swallow enter
                                }
                                // Show popup
                                else if( character || key == 8 )
                                    return $list;
                            }
                        }
                    },

                    forceImageUpload: false,    // upload images even if File-API is present

                })
            });
        });
    </script>
@endsection