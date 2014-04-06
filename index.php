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
    
    //load app delegate to represent the current state of the app
    $delegate = new CDDelegate();
    
    //load correct controller
    $controllerName = $delegate->routeRequest();
    
    //pass control off to controller
    $controller = new $controllerName($delegate);
    
    //update domain state if necessary
    $controller->invoke();
    
    //update application state if necessary
    $controller->process();
    
    //send response to client
    $controller->output();