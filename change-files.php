<?php

$files = glob('tests/**/*.php');

foreach ($files as $file)
{
    $content = file_get_contents($file);

    $content = preg_replace('/factory\((\w+)::class\)/', '$1::factory()', $content);

    // var_dump($content);
    // die();

    file_put_contents($file, $content);

}
