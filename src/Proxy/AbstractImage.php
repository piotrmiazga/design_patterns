<?php
namespace Proxy;

abstract class AbstractImage {

    protected $_width;
    protected $_height;
    protected $_path;
    protected $_data;

    public function getWidth() {
        return $this->_width;
    }

    public function getHeight() {
        return $this->_height;
    }

    public function getPath() {
        return $this->_path;
    }

    public function getType() {
       return pathinfo($this->_path, PATHINFO_EXTENSION);
    }

    abstract function dump();



}
?>
