<?php
/**
 * Fluent
 *
 * @author  Jean Claveau
 */
namespace JClaveau\Traits;

/**
 * This trait gathers common methods of fluent objects
 */
trait Fluent
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

    /**
     * Clone the current instance
     *
     * @return * The cloned instance
     */
    public function clone_()
    {
        return clone $this;
    }

    /**/
}
