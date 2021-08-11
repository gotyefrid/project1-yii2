<?php

function printr($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function dateArticle($date)
{
    echo date("d.m.y", strtotime($date));
}
function dateComment($date)
{
    echo date("d.m.y", strtotime($date));
}