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

use PHPUnit\Framework\TestFailure;
use PHPUnit\Framework\TestResult;
use PHPUnit\TextUI\ResultPrinter as PHPUnitResultPrinter;

/**
 * Class Printer
 * @package MehrAlsNix\Assumptions
 * @codeCoverageIgnore
 */
class ResultPrinter extends PHPUnitResultPrinter
{
    /**
     * @param TestResult $result
     */
    protected function printFooter(TestResult $result)
    {
        if (count($result) === 0) {
            $this->writeWithColor(
                'fg-black, bg-yellow',
                'No tests executed!'
            );
        } elseif ($result->wasSuccessful() &&
            $result->allHarmless() &&
            $result->allCompletelyImplemented() &&
            $result->noneSkipped()) {
            $this->writeWithColor(
                'fg-black, bg-green',
                sprintf(
                    'OK (%d test%s, %d assertion%s)',
                    count($result),
                    (count($result) === 1) ? '' : 's',
                    $this->numAssertions,
                    ($this->numAssertions === 1) ? '' : 's'
                )
            );
        } else {
            if ($result->wasSuccessful()) {
                $color = 'fg-black, bg-yellow';

                if ($this->verbose) {
                    $this->write("\n");
                }

                $this->writeWithColor(
                    $color,
                    'OK, but incomplete, skipped, or risky tests!'
                );
            } else {
                $color = 'fg-white, bg-red';

                $this->write("\n");
                $this->writeWithColor($color, 'FAILURES!');
            }

            $numAssumptions = $this->getAssumptionsCount($result);
            $this->writeCountString(count($result), 'Tests', $color, true);
            $this->writeCountString($this->numAssertions, 'Assertions', $color, true);
            $this->writeCountString($result->errorCount(), 'Errors', $color);
            $this->writeCountString($result->failureCount(), 'Failures', $color);
            $this->writeCountString($numAssumptions, 'Assumptions', $color);
            $this->writeCountString($result->skippedCount() - $numAssumptions, 'Skipped', $color);
            $this->writeCountString($result->notImplementedCount(), 'Incomplete', $color);
            $this->writeCountString($result->riskyCount(), 'Risky', $color);
            $this->write(".\n");
        }
    }

    /**
     * @param TestResult $result
     * @return int
     */
    private function getAssumptionsCount(TestResult $result): int
    {
        $assumptions = 0;
        /** @var TestFailure $skipped */
        $s = $result->skipped();
        foreach ($s as $skipped) {
            if ($skipped->thrownException() instanceof AssumptionViolatedException) {
                $assumptions++;
            }
        }

        return $assumptions;
    }

    /**
     * @param int $count
     * @param string $name
     * @param string $color
     * @param bool $always
     */
    private function writeCountString($count, $name, $color, $always = false)
    {
        static $first = true;

        if ($always || $count > 0) {
            $this->writeWithColor(
                $color,
                sprintf(
                    '%s%s: %d',
                    !$first ? ', ' : '',
                    $name,
                    $count
                ),
                false
            );

            $first = false;
        }
    }
}
