<?php

use PHPUnit\Framework\TestCase;

/**
 * @runInSeparateProcess
 * @return void
 * @throws ExpectattionFailedException
 * @throws IvalidArgumentException
 */
class IndexTest extends TestCase{

    public function testHello(){

        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien!', $content);
    }
}