<?php
/**
 * DefineAs
 *
 * @author Jean Claveau
 */
namespace JClaveau\Traits\Fluent;

trait DefineAs
{
    /**
     * Define the current subject of the fluent chain as the value of
     * the variable given in parameter.
     * 
     * @param  * The variable where the current subject will be stored
     * @return * The instance
     */
    final public function defineAs(&$variable)
    {
        return $variable = $this;
    }
    
    /**/
}
