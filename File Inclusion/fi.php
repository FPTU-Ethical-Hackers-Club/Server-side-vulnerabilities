// include, require, include_one, require_one for FI :))

<?php 
    if (isset( $_GET[ 'file' ] )) {
        $file = $_GET[ 'file' ];
        echo '<pre>';
        include $file; // include, require, include_one, require_one for FI :))
        echo '</pre>';
    }
?>


<html>
    <head>
        <title>File Inclusion</title>
    </head>

    <body>
        <a href="?file=file1">File1</a>
    </body>
</html>