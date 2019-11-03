<?php
/**
 * Fluent
 *
 * @author  Jean Claveau
 */
namespace JClaveau\Traits\Fluent;

/**
 * This trait gathers common methods of fluent objects
 */
trait New_
{
    /**
     * Calls the constructor
     *
     * @return * The answer
     */
    public static function new_()
    {
        return new static(...func_get_args());
    }

    /**/
}
