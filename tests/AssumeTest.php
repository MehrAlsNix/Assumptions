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

use MehrAlsNix\Assumptions\AssumptionViolatedException;
use PHPUnit\Framework\TestCase;

/**
 * Class AssumeTest
 * @package MehrAlsNix\Assumptions\Tests
 */
class AssumeTest extends TestCase
{
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass()
    {
        assumePhpVersion('5.4');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Unable to connect
     */
    public function assumeSocket()
    {
        assumeSocket('google.de', 80);
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
        assumePhpVersion('5.4');
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
        assumeEnvironment('PATH');
        assumeEnvironment('THIS_IS_NOT_AN_ENV', 'Environment not set.');
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage No free disk space.
     */
    public function assumeFreeDiskSpace()
    {
        assumeFreeDiskSpace(__DIR__);
        assumeFreeDiskSpace(__DIR__, 9999999999999999.0, 'No free disk space.');
    }

    /**
     * @test
     */
    public function assumeCfgVar()
    {
        if (defined('HHVM_VERSION')) {
            $this->markTestSkipped(
                'Not supported in HHVM.'
                . 'See https://github.com/facebook/hhvm/issues/3754'
            );
        }
        try {
            assumeCfgVar('precision');
            assumeCfgVar('does_not_exist', 'Not found in php.ini');
        } catch (AssumptionViolatedException $e) {
            $this->assertStringEndsWith('Not found in php.ini', $e->getMessage());
        }
    }

    /**
     * @test
     * @expectedException \MehrAlsNix\Assumptions\AssumptionViolatedException
     * @expectedExceptionMessage Not the right OS.
     */
    public function assumeOperatingSystem()
    {
        if (0 === strpos(strtolower(php_uname('s')), 'win')) {
            assumeOperatingSystem('Win');
            assumeOperatingSystem('Linux', 'Not the right OS.');
        } else {
            assumeOperatingSystem('Linux');
            assumeOperatingSystem('Win', 'Not the right OS.');
        }
    }
}
