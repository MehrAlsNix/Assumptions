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

namespace MehrAlsNix\Assumptions;

use Hamcrest\Matcher;

/**
 * Class Assume
 * @package MehrAlsNix\Assumptions
 */
class Assume
{
    use Extensions\Network;
    use Extensions\System;

    /**
     * @param boolean $bool
     * @param string $message optional
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeTrue($bool, $message = '')
    {
        assumeThat($bool, is(true), $message);
    }

    /**
     * @param boolean $bool
     * @param string $message
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeFalse($bool, $message = '')
    {
        assumeThat($bool, is(false), $message);
    }

    /**
     * @param mixed $actual
     * @param Matcher $matcher
     * @param string $message optional
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeThat($actual, Matcher $matcher, $message = '')
    {
        if (!$matcher->matches($actual)) {
            throw new AssumptionViolatedException($actual, $matcher, $message);
        }
    }

    /**
     * @param mixed ...$items
     */
    public static function assumeNotNull(...$items)
    {
        assumeThat($items, everyItem(notNullValue()));
    }

    /**
     * @param \Exception $e
     * @param string $message
     *
     * @throws AssumptionViolatedException
     */
    public static function assumeNoException($e, $message = '')
    {
        assumeThat($e, nullValue(), $message);
    }
}
