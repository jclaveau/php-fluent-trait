<?php
/**
 * Dump
 *
 * @author Jean Claveau
 */
namespace JClaveau\Traits\Fluent;

trait Dump
{
    /**
     * Dumps the current subject of the chain.
     *
     * @param  bool  $exit
     * @param  array $options The options 
     * @return *              The chain instance
     */
    public function dump($exit=false, array $options=[])
    {
        $mode = isset($options['mode']) ? $options['mode'] : 'dump';
        
        if ($mode == 'dump') {
            var_dump($this);
        }
        elseif ($mode == 'print') {
            print_r($this);
        }
        elseif ($mode == 'export') {
            var_export($this);
        }
        else {
            throw new \InvalidArgumentException(
                "\$options['mode'] must be one of ['dump', 'print', 'export'] instead of ".var_export($mode, true)
            );
        }
        
        $exit && exit;
        
        return $this;
    }

    /**/
}
