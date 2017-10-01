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

namespace MehrAlsNix\Assumptions\Extensions;

use function MehrAlsNix\Assumptions\Functions\assumeThat;
use function MehrAlsNix\Assumptions\Functions\is;
use function MehrAlsNix\Assumptions\Functions\not;
use function MehrAlsNix\Assumptions\Functions\matchesPattern;
use function MehrAlsNix\Assumptions\Functions\greaterThanOrEqualTo;
use MehrAlsNix\Assumptions\AssumptionViolatedException;

/**
 * Trait System
 * @package MehrAlsNix\Assumptions\Extensions
 */
trait System
{
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
    public static function assumePhpVersion($atLeast, $message = '')
    {
        assumeThat(version_compare(PHP_VERSION, $atLeast, '>='), is(true), $message);
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
    public static function assumeExtensionLoaded($extension, $message = '')
    {
        assumeThat(extension_loaded($extension), is(true), $message);
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
    public static function assumeEnvironment($varname, $message = '')
    {
        assumeThat(getenv($varname), is(not(false)), $message);
    }

    /**
     * Assumes that a specific directory has free disk space.
     *
     * @param string $directory
     * @param float  $available optional
     * @param string $message
     *
     * @return void
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeFreeDiskSpace($directory, $available = null, $message = '')
    {
        if ($available === null) {
            assumeThat(disk_free_space($directory), is(not(false)), $message);
        } else {
            assumeThat(disk_free_space($directory), is(greaterThanOrEqualTo($available)), $message);
        }
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
    public static function assumeCfgVar($name, $message = '')
    {
        assumeThat(get_cfg_var($name), is(not(false)), $message);
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
    public static function assumeOperatingSystem($pattern, $message = '')
    {
        $regEx = sprintf('/%s/i', addcslashes($pattern, '/'));
        assumeThat(PHP_OS, matchesPattern($regEx), $message);
    }
}
