<?php

use Illuminate\Support\Facades\Request;
// Check active page
function isCurrent($url)
{
    return ($url == Request::path()) ? ' active' : '';
}
?>