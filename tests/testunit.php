<?php

namespace application\models\TheModel;


use CodeIgniter\Test\CIUnitTestCase;

class unitest extends CIUnitTestCase
{
    public function unittesting()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'test');
        $this->assertSame('test', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('test', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}