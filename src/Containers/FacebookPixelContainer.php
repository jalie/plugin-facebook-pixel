<?php

namespace FacebookPixel\Containers;

use Plenty\Plugin\Templates\Twig;

class FacebookPixelContainer{
    public function call(Twig $twig):string{
        return $twig->render('FacebookPixel::FacebookPixel');
    }
}
