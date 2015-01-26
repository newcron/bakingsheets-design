<?php
namespace bakingsheets\view;

class TeaserImageFilter{

    public function filter($imageHtml) {
        return preg_replace(['/width=\"[0-9]+"/i','/height=\"[0-9]+"/i', "/ +/"], ["", "", " "], $imageHtml);
    }
}