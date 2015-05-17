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
 * Class AssumptionViolatedException
 * @package MehrAlsNix\Assumptions
 */
class AssumptionViolatedException extends \PHPUnit_Framework_IncompleteTestError
{
    /**
     * @var string
     */
    private $assumption;

    /**
     * @var
     */
    private $valueMatcher = true;

    /**
     * @var
     */
    private $value;

    /**
     * @var Matcher
     */
    private $matcher;

    /**
     * {@inheritdoc}
     *
     * @param string $assumption
     * @param Matcher $matcher
     * @param string $message
     */
    public function __construct($value, Matcher $matcher, $message = '')
    {
        $this->value = json_encode($value);
        $this->matcher = $matcher;
        $this->assumption = debug_backtrace()[1]['function'];

        parent::__construct($this->describe($message));
    }

    protected function describe($message)
    {
        $description = '';

        if ($this->assumption !== null) {
            $description .= $this->assumption;
        }

        if ($this->valueMatcher) {
            // a value was passed in when this instance was constructed; print it
            if ($this->assumption !== null) {
                $description .= ": ";
            }

            $description .= "got: ";
            $description .= print_r($this->value, true);

            if ($this->matcher !== null) {
                $description .= ", expected: ";
                $description .= $this->matcher;
            }
        }

        return $description . PHP_EOL . $message;
    }
}
