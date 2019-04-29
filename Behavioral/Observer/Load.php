<?php

namespace DesignPatterns\Behavioral\Observer;

/**
 * PHP has several built-in interfaces (SplSubject, SplObserver)
 * that can be used to make your implementationsof the Observer pattern
 * compatible with the rest of the PHP code.
 *
 * Here's what the Subject interface looks like:
 *
 * @link http://php.net/manual/en/class.splsubject.php
 *
 *     interface SplSubject
 *     {
 *         // Attach an observer to the subject.
 *         public function attach(SplObserver $observer);
 *
 *         // Detach an observer from the subject.
 *         public function detach(SplObserver $observer);
 *
 *         // Notify all observers about an event.
 *         public function notify();
 *     }
 *
 */

/**
 * The Load represents a Subject. Notify observers (carriers) when a new load is posted in the market place.
 */
class Load implements \SplSubject
{
    private $title;
    private $observers;

    public function __construct() {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Subscribe observer to subject changes
     */
    public function attach(\SplObserver $carrier)
    {
        $this->observers->attach($carrier);
    }

    /**
     * Unsubscribe observer to subject changes
     */
    public function detach(\SplObserver $carrier)
    {
        $this->observers->detach($carrier);
    }

    /**
     * Notify observer for subject changes
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Create a new load and notify the observers
     */
    public function create($title)
    {
        $this->title = $title;
        $this->notify();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getObservers()
    {
        return $this->observers;
    }
}
