<?php

namespace DesignPatterns\Behavioral\Iterator;

class UserList implements \Iterator
{
    /**
     * @var array
     */
    private $users = [];

    /**
     * @var int Stores the current traversal position.
     */
    private $currentIndex = 0;

    /**
     * Add a user to the list
     *
     * @param User $user
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * Remove a user from the list
     *
     * @param User $user
     */
    public function removeUser(User $user)
    {
        foreach ($this->users as $key => $value) {
            if ($value->getName() == $user->getName() &&
                $value->getEmail() == $user->getEmail()) {
                unset($this->users[$key]);
            }
        }

        $this->users = array_values($this->users);
    }

    /**
     * Count users in the list
     *
     * @param int
     */
    public function count(): int
    {
        return count($this->users);
    }

    /**
     * Get the current user object in the list
     *
     * @return User
     */
    public function current(): User
    {
        return $this->users[$this->currentIndex];
    }

    /**
     * Get the current traversal position.
     *
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * Move to next traversal position
     *
     * @return int
     */
    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * Reset the traversal position.
     */
    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * Check if the end of the list has been reached
     *
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->users[$this->currentIndex]);
    }
}
