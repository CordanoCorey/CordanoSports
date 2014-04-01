<?php


namespace application\factory;

/**
 * A wrapper around an actual class.
 * Will pass through all functions and variables
 * as if it is the real underlying object.
 *
 * @package factory
 * @author coreygelbaugh
 * @version 1.0
 *
 * 
 */
class Facade {
 
    private $object = null;
    private $wrappedClass;
    private $constructorArgs;
    private $properties;
 
    public function __construct($cls, $args = null){
        Log::debug(__METHOD__ . "($cls)");
 
        $this->wrappedClass = $cls;
        $this->constructorArgs = $args;
    }
 
    // 
    private function makeDynamicObjectInstance(){
        if ( ! $this->object ){
            if ( ! $this->constructorArgs ){
                Log::debug('Facade constructing new '.$this->wrappedClass);
                $this->object = new $this->wrappedClass();
            }
            else{
                Log::debug('Facade constructing new '.$this->wrappedClass . '(' . implode(', ', $this->constructorArgs) . ')');
                $reflect = new ReflectionClass($this->wrappedClass);
                $this->object = $reflect->newInstanceArgs($this->constructorArgs);
            }
            if ( $this->properties && is_array($this->properties) ){
                foreach($this->properties as $varname => $value){
                    $this->object->$varname = $value;
                }
            }
        }
    }
 
    // I have to make this funciton public to allow the factory to set it if needed.
    public function facade_setProperties($properties){
        $this->properties = $properties;
    }
 
    public function __call($name, $args){
        if ( ! $this->object ) $this->makeDynamicObjectInstance();
        Log::debug('invoking ' . $this->wrappedClass . '::' . $name . "() via Facade")  ;
 
        if ( ! method_exists($this->object, $name) ){
            $trace = debug_backtrace();
            trigger_error('Call to undefined method ' . $this->wrappedClass . '::' . $name . '() in ' . $trace[1]['file'] . ' on line ' . $trace[1]['line'],
                E_USER_ERROR);
        }
 
        return call_user_func_array (array($this->object, $name), $args);
 
    }
 
    public function __get($name){
        Log::debug(__METHOD__."($name)");
        if ( ! $this->object ) $this->makeDynamicObjectInstance();
 
        return $this->object->$name; // FIXME: will crash if doesn't exist
    }
    public function __set($name, $val){
        Log::debug(__METHOD__."($name)");
        if ( ! $this->object ) $this->makeDynamicObjectInstance();
        $this->object->$name = $val;
    }
 
}
