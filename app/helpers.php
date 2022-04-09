<?php

function setActive($param) 
{
    //
    return request()->routeIs($param) ? 'active' : '';
}