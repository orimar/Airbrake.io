<?php
// createAdvancedPhar.php

include("D:\work\Airbrake.io\lib\php\Logging.php");

try {
    # Set the archive name.
    $phar = new Phar("advanced.phar");

    # Begin buffering phar creation.
    $phar->startBuffering();

    # Add files within current directory.
    $phar->buildFromDirectory(dirname(__FILE__));

    # Set stub to contents of stub.php file.
    $phar->setStub(file_get_contents("stub.php"));

    # Finish buffering phar creation.
    $phar->stopBuffering();
} catch (PharException $exception) {
    // Output expected PharException.
    Logging::Log($exception);
} catch (Exception $exception) {
    // Output unexpected Exceptions.
    Logging::Log($exception, false);
}