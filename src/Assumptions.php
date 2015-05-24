<?php

if (!function_exists('assumeThat')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeThat(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeThat'),
            $args
        );
    }
}

if (!function_exists('assumeTrue')) {
    /**
     * Assumes that a specific value is `true`.
     *
     * @param boolean $bool
     * @param string $message optional
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     *
     * @see \MehrAlsNix\Assumptions\Assume::assumeTrue
     */
    function assumeTrue($bool, $message = '')
    {
        call_user_func(
            array('MehrAlsNix\Assumptions\Assume', 'assumeTrue'),
            $bool,
            $message
        );
    }
}

if (!function_exists('assumeFalse')) {
    /**
     * Assumes that a specific value is `false`.
     *
     * @param boolean $bool
     * @param string $message optional
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     *
     * @see \MehrAlsNix\Assumptions\Assume::assumeFalse
     */
    function assumeFalse($bool, $message = '')
    {
        call_user_func(
            array('MehrAlsNix\Assumptions\Assume', 'assumeFalse'),
            $bool,
            $message
        );
    }
}

if (!function_exists('assumeNotNull')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumeNotNull(...$args)
    {
        call_user_func_array(
            array('MehrAlsNix\Assumptions\Assume', 'assumeNotNull'),
            $args
        );
    }
}

if (!function_exists('assumePhpVersion')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     */
    function assumePhpVersion(...$args)
    {
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
    function assumeExtensionLoaded(...$args)
    {
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
     * @param ...$args
     */
    function assumeSocket(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeSocket'], $args);
    }
}

if (!function_exists('assumeEnvironment')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeEnvironment(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeEnvironment'], $args);
    }
}

if (!function_exists('assumeFreeDiskSpace')) {
    /**
     * Assumes that a specific directory has free disk space.
     *
     * @param ...$args
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     *
     * @see \MehrAlsNix\Assumptions\Assume::assumeFreeDiskSpace
     */
    function assumeFreeDiskSpace(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeFreeDiskSpace'], $args);
    }
}

if (!function_exists('assumeCfgVar')) {
    /**
     * Make an assumption and throw
     * {@link MehrAlsNix\Assumptions\AssumptionViolatedException} if it fails.
     * @param ...$args
     */
    function assumeCfgVar(...$args)
    {
        call_user_func_array(['MehrAlsNix\Assumptions\Assume', 'assumeCfgVar'], $args);
    }
}
