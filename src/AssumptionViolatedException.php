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
use Hamcrest\BaseMatcher;
use PHPUnit\Framework\SkippedTestError;

/**
 * Class AssumptionViolatedException
 * @package MehrAlsNix\Assumptions
 */
class AssumptionViolatedException extends SkippedTestError
{
    /**
     * @var string
     */
    private $assumption;

    /**
     * @var bool
     */
    private $valueMatcher = true;

    /**
     * @var string
     */
    private $value;

    /**
     * @var BaseMatcher
     */
    private $matcher;

    /**
     * @param string $value
     * @param Matcher $matcher
     * @param string $message [optional] The Exception message to throw.
     */
    public function __construct($value, Matcher $matcher, $message = '')
    {
        $this->value = json_encode($value);
        $this->matcher = $matcher;

        if (function_exists('debug_backtrace')) {
            $this->assumption = debug_backtrace()[1]['function'];
        }

        parent::__construct($this->describe($message));
    }

    protected function describe($message): string
    {
        $description = '';

        if ($this->assumption !== null) {
            $description .= $this->assumption;
        }

        if ($this->valueMatcher) {
            // a value was passed in when this instance was constructed; print it
            if ($this->assumption !== null) {
                $description .= ': ';
            }

            $description .= 'got: ';
            $description .= $this->value;

            if ($this->matcher !== null) {
                $description .= ', expected: ';
                $description .= $this->matcher;
            }
        }

        return $description . PHP_EOL . $message;
    }
}
