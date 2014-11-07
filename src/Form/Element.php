<?php

namespace Form;

/**
 * Description of Element
 *
 * @author Fábio
 */
class Element implements ElementInterface {
    
    protected $value;

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
}
