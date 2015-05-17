<?php

if (!function_exists('assumeThat')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeThat()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeThat'),
            $args
        );
    }
}

if (!function_exists('assumeTrue')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeTrue()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeTrue'),
            $args
        );
    }
}

if (!function_exists('assumeFalse')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeFalse()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeFalse'),
            $args
        );
    }
}

if (!function_exists('assumeNotNull')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeNotNull()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeNotNull'),
            $args
        );
    }
}

if (!function_exists('assumeNoException')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeNoException()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeNoException'),
            $args
        );
    }
}

if (!function_exists('assumePhpVersion')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumePhpVersion()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumePhpVersion'),
            $args
        );
    }
}

if (!function_exists('assumeExtensionLoaded')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeExtensionLoaded()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeExtensionLoaded'),
            $args
        );
    }
}

if (!function_exists('assumeSocket')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeSocket()
    {
        $args = func_get_args();
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeSocket'),
            $args
        );
    }
}
