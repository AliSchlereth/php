<?php

    function from($date)
    {
        $gs = (string)10**9;
        $new_date = (clone $date);
        return $new_date->add(new DateInterval('PT'.$gs.'S'));
    }

 ?>
