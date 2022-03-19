<?php
namespace Cody\Bundle\ProductBundle;

use Cody\Bundle\ProductBundle\ValidityInterface;

class Validity implements ValidityInterface {

    public function getValidities(): array {
        return [
            'initial'
        ];
    }
}
