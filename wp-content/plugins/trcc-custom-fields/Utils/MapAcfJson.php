<?php

namespace Api\Utils;

class MapAcfJson
{
    public function __construct()
    {
        add_filter('acf/settings/save_json', [$this, 'myAcfJsonSavePoint']);
        add_filter('acf/settings/load_json', [$this, 'myAcfJsonLoadPoint']);
    }

    public function myAcfJsonSavePoint($path)
    {
        $path = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'AcfJson');

        return $path;
    }

    public function myAcfJsonLoadPoint($paths)
    {
        unset($paths[0]);

        $paths[] = realpath(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'AcfJson');

        return $paths;
    }
}
