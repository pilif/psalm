<?php

namespace App;

function foo(): string {
    return "bar";
}

class Demo {
    function fn(): array{
        echo foo();
        echo global_fn();
        $f = fopen(__FILE__, 'r');
        while(!feof($f)) {
            echo fgets($f);
        }
        fclose($fh);
        return generateTemplateStrings(array_map(function($a) { return $a*2; }, [1,2,3]));
    }
}
