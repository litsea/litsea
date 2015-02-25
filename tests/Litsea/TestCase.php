<?php

namespace Litsea\Test;

class TestCase extends \PHPUnit_Framework_TestCase
{

    public function skipIf($should_skip, $message = '')
    {
        if ($should_skip)
        {
            $this->markTestSkipped($message);
        }

        return $should_skip;
    }

    protected function skipUnless($condition, $message = '')
    {
        if (!$condition)
        {
            $this->markTestSkipped($message);
        }

        return $condition;
    }

}
