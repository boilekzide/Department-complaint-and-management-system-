<?php

function sanitize($data)
{
    return htmlspecialchars(
        trim($data)
    );
}

function generateComplaintID()
{
    return "CMP" .
           date("YmdHis") .
           rand(100,999);
}

?>
