<?php
/**
 * Assumptions
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @copyright 2015 MehrAlsNix (http://www.mehralsnix.de)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://github.com/MehrAlsNix/Assumptions
 */

if (!function_exists('assumeThat')) {
    /**
     * Assumes that a specific value matches a specific hamcrest matcher.
     *
     * @param mixed $actual
     * @param \Hamcrest\Matcher $matcher
     * @param string $message optional
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeThat($actual, \Hamcrest\Matcher $matcher, $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeThat'],
            $actual,
            $matcher,
            $message
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
     * Assumes that one or more value(s) is/are not `null`.
     *
     * @param mixed $item [optional]
     * @param mixed $_ [optional]
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeNotNull($item = null, $_ = null)
    {
        $items = func_get_args();
        call_user_func_array(
            ['MehrAlsNix\Assumptions\Assume', 'assumeNotNull'],
            $items
        );
    }
}

if (!function_exists('assumePhpVersion')) {
    /**
     * Assumes that a specific version string is greater or equal to the
     * PHP version.
     *
     * @param string $atLeast
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumePhpVersion($atLeast, $message = '')
    {
        call_user_func(
            array('MehrAlsNix\Assumptions\Assume', 'assumePhpVersion'),
            $atLeast,
            $message
        );
    }
}

if (!function_exists('assumeExtensionLoaded')) {
    /**
     * Assumes that a specific PHP extension is loaded.
     *
     * @param string $extension
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeExtensionLoaded($extension, $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeExtensionLoaded'],
            $extension,
            $message
        );
    }
}

if (!function_exists('assumeSocket')) {
    /**
     * Assumes that a specified socket connection could be established.
     *
     * @param string $address
     * @param int    $port
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeSocket($address, $port = 0)
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeSocket'],
            $address,
            $port
        );
    }
}

if (!function_exists('assumeEnvironment')) {
    /**
     * Assumes that a specific environment variable is set.
     *
     * @param string $varname
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeEnvironment($varname, $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeEnvironment'],
            $varname,
            $message
        );
    }
}

if (!function_exists('assumeFreeDiskSpace')) {
    /**
     * Assumes that a specific directory has free disk space.
     *
     * @param string $directory
     * @param float  $available optional
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeFreeDiskSpace($directory, $available = null,  $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeFreeDiskSpace'],
            $directory,
            $available,
            $message
        );
    }
}

if (!function_exists('assumeCfgVar')) {
    /**
     * Assumes that a specific PHP configuration option is set (`php.ini`).
     *
     * @param string $name
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeCfgVar($name, $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeCfgVar'],
            $name,
            $message
        );
    }
}

if (!function_exists('assumeOperatingSystem')) {
    /**
     * Assumes that a specific OS is used.
     *
     * @param string $pattern
     * @param string $message
     *
     * @return void
     *
     * @throws \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    function assumeOperatingSystem($pattern, $message = '')
    {
        call_user_func(
            ['MehrAlsNix\Assumptions\Assume', 'assumeOperatingSystem'],
            $pattern,
            $message
        );
    }
}
