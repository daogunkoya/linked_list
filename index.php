<?php

class Node {
    public $value;
    public $next;

    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList {
    private $head;
    private $tail;
    private $size;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function append($value) {
        $newNode = new Node($value);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }

        $this->size++;
    }

    public function prepend($value) {
        $newNode = new Node($value);

        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }

        $this->size++;
    }

    public function insert($value, $position) {
        if ($position < 0 || $position > $this->size) {
            throw new Exception('Invalid position');
        }

        if ($position === 0) {
            $this->prepend($value);
        } else if ($position === $this->size) {
            $this->append($value);
        } else {
            $newNode = new Node($value);
            $previousNode = null;
            $currentNode = $this->head;
            $index = 0;

            while ($index < $position) {
                $previousNode = $currentNode;
                $currentNode = $currentNode->next;
                $index++;
            }

            $previousNode->next = $newNode;
            $newNode->next = $currentNode;
            $this->size++;
        }
    }

    public function remove($value) {
        if ($this->head === null) {
            throw new Exception('Empty list');
        }

        if ($this->head->value === $value) {
            $this->head = $this->head->next;

            if ($this->head === null) {
                $this->tail = null;
            }

            $this->size--;
            return;
        }

        $previousNode = null;
        $currentNode = $this->head;

        while ($currentNode !== null) {
            if ($currentNode->value === $value) {
                $previousNode->next = $currentNode->next;

                if ($currentNode->next === null) {
                    $this->tail = $previousNode;
                }

                $this->size--;
                return;
            }

            $previousNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        throw new Exception('Value not found');
    }

    public function get($position) {
        if ($position < 0 || $position >= $this->size) {
            throw new Exception('Invalid position');
        }

        $currentNode = $this->head;
        $index = 0;

        while ($index < $position) {
            $currentNode = $currentNode->next;
            $index++;
        }

        return $currentNode->value;
    }

    public function size() {
        return $this->size;
    }

   
