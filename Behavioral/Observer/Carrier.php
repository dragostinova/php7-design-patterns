<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * PHP has several built-in interfaces (SplSubject, SplObserver)
 * that can be used to make your implementationsof the Observer pattern
 * compatible with the rest of the PHP code.
 *
 * There's a built-in interface for Observers:
 *
 * @link http://php.net/manual/en/class.splobserver.php
 *
 *     interface SplObserver
 *     {
 *         public function update(SplSubject $subject);
 *     }
 */

/**
 * The Carrier represents an Observer. Various carriers are interested in new loads posted in the market place.
 */
class Carrier implements \SplObserver
{
    /**
     * Observer reacts to the updates issued by the Subject
     */
    public function update(\SplSubject $load)
    {
        echo 'New Load ' . $load->getTitle() . ' was posted in the market place.';
    }
}
