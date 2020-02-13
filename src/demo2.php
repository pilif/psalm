<?php

function global_fn(): string {
    return 'global';
}

function generateTemplateStrings(array $arr)
{
    return array_map(fn(string $e) => $e.global_fn(), $arr);
}

