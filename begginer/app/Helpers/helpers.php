<?php

function isActiveRoute( string $route ){
    return request()->routeIs($route) ? 'active':'';
}
