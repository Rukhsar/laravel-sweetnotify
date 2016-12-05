<?php

if(!function_exists ('sweet'))
{
    function sweet($title=null, $message=null)
    {
        $sweet = app('Rukhsar\SweetNotify\Flash');

        if(func_num_args() == 0)
        {
            return $sweet;
        }
        return $sweet->info($title, $message);
    }
}