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

/**
 * Trait System
 * @package MehrAlsNix\Assumptions\Extensions
 */
trait System
{
    /**
     * @param string $atLeast
     * @param string $message
     */
    public static function assumePhpVersion($atLeast, $message = '')
    {
        assumeTrue(version_compare(phpversion(), $atLeast, '>='), $message);
    }

    /**
     * @param string $extension
     * @param string $message
     */
    public static function assumeExtensionLoaded($extension, $message = '')
    {
        assumeTrue(extension_loaded($extension), $message);
    }

    /**
     * @param string $varname
     * @param string $message
     */
    public static function assumeEnvironment($varname, $message = '')
    {
        assumeTrue((bool) getenv($varname), $message);
    }

    /**
     * @param string $directory
     * @param string $message
     */
    public static function assumeFreeDiskSpace($directory, $available = null,  $message = '')
    {
        if ($available === null) {
            assumeThat(disk_free_space($directory), is(not(false)), $message);
        } else {
            assumeThat(disk_free_space($directory), is(greaterThanOrEqualTo($available)), $message);
        }
    }
}
