<?php 

 // turn off output compression
    @apache_setenv('no-gzip', 1);
    ini_set('zlib.output_compression', 0);

    // no need to flush after every output call
    ob_implicit_flush(true);

    // some padding for IE
    echo(str_repeat(" ", 1024) . "\n");

    echo("Something here<br />");
    sleep(5);

    echo("Something else<br />");



 ?>