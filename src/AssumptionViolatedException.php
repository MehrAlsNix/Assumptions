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
 * @link      http://github.com/MehrAlsNix/kindergarten
 */

namespace MehrAlsNix\Assumptions;

use Hamcrest\Matcher;

/**
 * Class AssumptionViolatedException
 * @package MehrAlsNix\Assumptions
 */
class AssumptionViolatedException extends \RuntimeException
{
    /**
     * @var string
     */
    private $assumption;

    /**
     * @var
     */
    private $valueMatcher;

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
    public function __construct($assumption, Matcher $matcher, $message = '')
    {
        $this->assumption = $assumption;
        $this->matcher    = $matcher;

        parent::__construct($message);
    }
}
