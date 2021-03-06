<?php
namespace FactoryMethod;

interface AbstractReaderFactory {

    /**
     * @param string $type
     * @return Reader
     */
    public function createReader($type);
}

?>
