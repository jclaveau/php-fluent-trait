<?php
/**
 * New_
 *
 * @author Jean Claveau
 */
namespace JClaveau\Traits\Fluent;

trait New_
{
    /**
     * A pure static call to the constructor. 
     * This method is final as it's meant to provide only the contructor.
     * If you want a factory method that does more than a pure "new()"
     * i would suggest to name it differently (e.g. create()). 
     *
     * @return * The instance
     */
    final public static function new_()
    {
        return new static(...func_get_args());
    }

    /**/
}
