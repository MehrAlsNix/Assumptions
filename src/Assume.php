<?php
declare(strict_types=1);
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

namespace MehrAlsNix\Assumptions;

use Hamcrest\Matcher;
use function MehrAlsNix\Assumptions\Functions\assumeThat;
use function MehrAlsNix\Assumptions\Functions\is;
use function MehrAlsNix\Assumptions\Functions\everyItem;
use function MehrAlsNix\Assumptions\Functions\notNullValue;

/**
 * Class Assume
 * @package MehrAlsNix\Assumptions
 */
class Assume
{
    use Extensions\Network;
    use Extensions\System;

    /**
     * Assumes that a specific value is `true`.
     *
     * @param boolean $bool
     * @param string $message optional
     *
     * @return void
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeTrue($bool, $message = ''): void
    {
        assumeThat($bool, is(true), $message);
    }

    /**
     * Assumes that a specific value is `false`.
     *
     * @param boolean $bool
     * @param string $message
     *
     * @return void
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeFalse($bool, $message = ''): void
    {
        assumeThat($bool, is(false), $message);
    }

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
    public static function assumeThat($actual, Matcher $matcher, $message = ''): void
    {
        if (!$matcher->matches($actual)) {
            throw new AssumptionViolatedException($actual, $matcher, $message);
        }
    }

    /**
     * Assumes that one or more value(s) is/are not `null`.
     *
     * @param array $items
     * @return void
     */
    public static function assumeNotNull(...$items): void
    {
        assumeThat($items, everyItem(notNullValue()));
    }
}
