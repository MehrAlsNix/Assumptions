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

namespace MehrAlsNix\Assumptions\Tests;

use MehrAlsNix\Assumptions\Assume;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class AssumeTest
 * @package MehrAlsNix\Assumptions\Tests
 */
class AssumeTest extends TestCase
{
    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     */
    public function throwExceptionWithWrongAssumption()
    {
        $this->assertEmpty(Assume::assumeTrue(true, 'Assume "true" failed.'));
        Assume::assumeFalse(true, 'Assume "false" failed.');
    }
}
