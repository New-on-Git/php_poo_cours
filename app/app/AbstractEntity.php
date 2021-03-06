<?php
namespace M2i\Framework;

abstract class AbstractEntity{
    public function __construct($data = [])
    {
        foreach($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}