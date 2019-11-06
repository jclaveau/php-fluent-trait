<?php
/**
 * DefineCloneAs
 *
 * @author Jean Claveau
 */
namespace JClaveau\Traits\Fluent;

trait DefineCloneAs
{
    /**
     * Define a clone of the current subject of the fluent chain as the 
     * value of the variable given in parameter.
     * 
     * @param  * The variable where the new clone will be stored
     * @return * The instance
     */
    final public function defineCloneAs( &$variable_storing_the_clone)
    {
        $variable_storing_the_clone = clone $this;
        return $this;
    }
    
    /**/
}
