<?php

namespace Cody\Bundle\ProductBundle;

use Cody\Bundle\ProductBundle\ValidityInterface;

class Product {

    private ValidityInterface $validity;
    private int $id;

    public function __construct(ValidityInterface $validity, int $id = 1)
    {
        $this->validity = $validity;
        $this->id = $id;
    }

    public function check() {
        return [
            'id' => 'Product Check: ' . $this->id,
            'validities' => $this->validity->getValidities()
        ];
    }
}
