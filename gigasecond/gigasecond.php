<?php

    function from($date)
    {
        $gs = (string)10**9;
        return $date->add(new DateInterval('PT'.$gs.'S'));
    }

 ?>
