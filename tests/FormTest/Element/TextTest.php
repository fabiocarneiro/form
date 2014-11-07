<?php

namespace FormTest\Element;

use PHPUnit_Framework_TestCase as TestCase;
use Form\Element;

class TextTest extends TestCase {
    public function testCanSetAndGetValue() {
        $element = new Element;
        $element->setValue('test');
        $this->assertSame('test', $element->getValue());
    }
}