<?php  
    use application\delegate\CDDelegate as CDDelegate;
    
    session_start();
    
    //auto-load class files
    spl_autoload_register(function( $class ) {
        $classFile = str_replace( '\\', DIRECTORY_SEPARATOR, $class );
        $classPI = pathinfo( $classFile );
        $classPath = strtolower( $classPI[ 'dirname' ] );

        include_once( $classPath . DIRECTORY_SEPARATOR . $classPI[ 'filename' ] . '.php' );
      });
    
    //load app delegate
    $delegate = new CDDelegate();
    
    //format client request
    $delegate->inputRequest();
    
    //load correct controller
    $controller = $delegate->routeRequest();
    
    //pass control off to controller but allow global access to delegate
    $_SESSION["delegate"]=$delegate;
    
    //update domain state if necessary
    $controller->invoke();
    
    //update application state if necessary
    $controller->process();
    
    //send response to client
    $controller->output();