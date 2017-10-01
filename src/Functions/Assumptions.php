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

namespace MehrAlsNix\Assumptions\Functions;

use Hamcrest\Matcher;
use MehrAlsNix\Assumptions\Assume;
use MehrAlsNix\Assumptions\AssumptionViolatedException;

/**
 * Assumes that a specific value matches a specific hamcrest matcher.
 *
 * @param mixed $actual
 * @param Matcher $matcher
 * @param string $message optional
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeThat($actual, Matcher $matcher, $message = '')
{
    Assume::assumeThat($actual, $matcher, $message);
}

/**
 * Assumes that a specific value is `true`.
 *
 * @param boolean $bool
 * @param string $message optional
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 *
 * @see \Assume::assumeTrue
 */
function assumeTrue($bool, $message = '')
{
    Assume::assumeTrue($bool, $message);
}

/**
 * Assumes that a specific value is `false`.
 *
 * @param boolean $bool
 * @param string $message optional
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 *
 * @see \Assume::assumeFalse
 */
function assumeFalse($bool, $message = '')
{
    Assume::assumeFalse($bool, $message);
}

/**
 * Assumes that one or more value(s) is/are not `null`.
 *
 * @param array $items
 *
 * @return void
 */
function assumeNotNull(...$items)
{
    Assume::assumeNotNull(...$items);
}

/**
 * Assumes that a specific version string is greater or equal to the
 * PHP version.
 *
 * @param string $atLeast
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumePhpVersion($atLeast, $message = '')
{
    Assume::assumePhpVersion($atLeast, $message);
}

/**
 * Assumes that a specific PHP extension is loaded.
 *
 * @param string $extension
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeExtensionLoaded($extension, $message = '')
{
    Assume::assumeExtensionLoaded($extension, $message);
}

/**
 * Assumes that a specified socket connection could be established.
 *
 * @param string $address
 * @param int $port
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeSocket($address, $port = 0)
{
    Assume::assumeSocket($address, $port);
}

/**
 * Assumes that a specific environment variable is set.
 *
 * @param string $varname
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeEnvironment($varname, $message = '')
{
    Assume::assumeEnvironment($varname, $message);
}

/**
 * Assumes that a specific directory has free disk space.
 *
 * @param string $directory
 * @param float $available optional
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeFreeDiskSpace($directory, $available = null, $message = '')
{
    Assume::assumeFreeDiskSpace($directory, $available, $message);
}

/**
 * Assumes that a specific PHP configuration option is set (`php.ini`).
 *
 * @param string $name
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeCfgVar($name, $message = '')
{
    Assume::assumeCfgVar($name, $message);
}

/**
 * Assumes that a specific OS is used.
 *
 * @param string $pattern
 * @param string $message
 *
 * @return void
 *
 * @throws AssumptionViolatedException
 */
function assumeOperatingSystem($pattern, $message = '')
{
    Assume::assumeOperatingSystem($pattern, $message);
}
