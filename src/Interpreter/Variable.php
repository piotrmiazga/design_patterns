<?php
namespace Interpreter;

class Variable implements MathExpression {

    private $_letter;

    public function __construct($letter) {
        $this->_letter = $letter;
    }

    public function evaluate(array $values) {
        if (!isset ($values[$this->_letter])) {
            throw new \RuntimeException("Value does not exist");
        }
        return $values[$this->_letter];
    }

}

?>
