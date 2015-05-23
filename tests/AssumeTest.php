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

namespace MehrAlsNix\Assumptions\Tests;

use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class AssumeTest
 * @package MehrAlsNix\Assumptions\Tests
 * @requires PHP 5.6
 */
class AssumeTest extends TestCase
{
    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Unable to connect
     */
    public function assumeSocket()
    {
        assumeSocket('127.0.0.1', 123);
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Extension does not exists.
     */
    public function assumeExtensionLoaded()
    {
        assumeExtensionLoaded('SPL');
        assumeExtensionLoaded('TEST', 'Extension does not exists.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Version not exists.
     */
    public function assumePhpVersion()
    {
        assumePhpVersion('5.6');
        assumePhpVersion('9.1', 'Version not exists.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage False  cannot be true.
     */
    public function assumeThat()
    {
        assumeThat('test', isNonEmptyString());
        assumeThat(false, is(true), 'False  cannot be true.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage There were at least one `NULL` value.
     */
    public function assumeNotNull()
    {
        assumeNotNull(1, '2', 3.1);
        assumeNotNull(null, 'There were at least one `NULL` value.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage This is not true.
     */
    public function assumeTrue()
    {
        assumeTrue(true);
        assumeTrue(false, 'This is not true.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage This is not false.
     */
    public function assumeFalse()
    {
        assumeFalse(false);
        assumeFalse(true, 'This is not false.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Environment not set.
     */
    public function assumeEnvironment()
    {
        assumeEnvironment('TMP');
        assumeEnvironment('THIS_IS_NOT_AN_ENV', 'Environment not set.');
    }
}
