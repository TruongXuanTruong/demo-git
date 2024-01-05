<?php

?>

<html>
    <head>
        <title>Tích Hợp trình soạn thảo văn bản vào website</title>
        <!--<script src="./plugin/ckeditor5/ckeditor.js"></script>-->
        <script src="./plugin/node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    </head>
    <body>
    <style>
        #content{
            width: 960px;
            margin: 0 auto;
        }
    </style>
    <div id="content">
        <h1>Tích hợp Ckeditor vào website</h1>
        <textarea class="ckeditor" name="detail" id="ckeditor_replace" rows="10" cols="80"></textarea>
    </div>


    <!--<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>-->
    <script>
        ClassicEditor
            .create( document.querySelector( '#ckeditor_replace' ) )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( 'There was a problem initializing the editor.', error );
            } );
    </script>

    </body>
</html>
