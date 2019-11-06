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
trait Clone_
{
    /**
     * Clone the current instance
     *
     * @return * The cloned instance
     */
    final public function clone_()
    {
        return clone $this;
    }

    /**/
}
