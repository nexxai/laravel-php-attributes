<?php

namespace TWithers\LaravelAttributes\Tests\TestAttributes\AttributeClasses;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class TestClassAttribute
{
    public string $name;
    public string $label;

    public function __construct(
        string $name,
        string $label
    ) {
        $this->label = $label;
        $this->name = $name;
    }
}