<?php

/**
 * Class AppleTV
 *
 * @package \\${NAMESPACE}
 */
class AppleTV implements TV
{
    public function open()
    {
        echo "Open Apple TV.\n";
    }

    public function watch()
    {
        echo "Watch Apple TV.\n";
    }
}
