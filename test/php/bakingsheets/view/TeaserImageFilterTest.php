<?php
/**
 * Created by IntelliJ IDEA.
 * User: mhuttar
 * Date: 25.01.15
 * Time: 10:57
 */

class TeaserImageFilterTest extends PHPUnit_Framework_TestCase {


    public function testFiltering()
    {
        $teaserImageFilter = new \bakingsheets\view\TeaserImageFilter();

        $this->assertEquals('<img src="foo.jpg" class="foo">', $teaserImageFilter->filter('<img width="300" height="225" src="foo.jpg" class="foo">'));
    }
}

 