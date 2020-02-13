<?php

namespace App\Psalm\Plugins;

use PhpParser\Node\Expr\FuncCall;
use Psalm\Codebase;
use Psalm\Context;
use Psalm\Plugin\Hook\AfterFunctionCallAnalysisInterface;
use Psalm\StatementsSource;
use Psalm\Type\Union;

class DemoPlugin implements AfterFunctionCallAnalysisInterface
{

    public static function afterFunctionCallAnalysis(
        FuncCall $expr,
        string $function_id,
        Context $context,
        StatementsSource $statements_source,
        Codebase $codebase,
        array &$file_replacements = [],
        Union &$return_type_candidate = null
    ){
        var_dump($function_id);
    }
}
