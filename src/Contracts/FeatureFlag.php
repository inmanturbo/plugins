<?php

namespace Inmanturbo\Plugins\Contracts;

interface FeatureFlag
{
    
    public function name(): string;

    public function envKey(): string;

    public function envValue($default = null): string;
}
