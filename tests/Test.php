<?php
/**
 * Created by PhpStorm.
 * User: nir003
 * Date: 3/13/15
 * Time: 3:06 PM
 *

class WebTest extends PHPUnit_Extensions_Selenium2TestCase {

    protected function setUp()
    {
        $this->setBrowser('safari');
        $this->setBrowserUrl('http://www.example.com/');
    }

    public function testTitle()
    {
        $this->url('http://www.example.com/');

        $this->assertEquals('Example Domain', $this->title());

    }

}*/
?>
