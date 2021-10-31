<?php 
    if ( isset($_GET[ 'file' ]) ) {
        $file = $_GET[ 'file' ];
        echo '<pre>';
        readfile('file/' . $file); 
        echo '</pre>';
    }
?>

<html>
    <head>
        <title>Path Traversal</title>
    </head>
    <body>
        <div>
            <ul>
                <li><a href="?file=f1.txt">File 1</a></li>
            </ul>
        </div>
    </body>
</html>