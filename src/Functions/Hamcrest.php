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

namespace MehrAlsNix\Assumptions\Functions;

/**
 * Make an assertion and throw {@link Hamcrest_AssertionError} if it fails.
 *
 * Example:
 * <pre>
 * //With an identifier
 * assertThat("assertion identifier", $apple->flavour(), equalTo("tasty"));
 * //Without an identifier
 * assertThat($apple->flavour(), equalTo("tasty"));
 * //Evaluating a boolean expression
 * assertThat("some error", $a > $b);
 * </pre>
 */
function assertThat()
{
    $args = func_get_args();
    call_user_func_array(
        array('Hamcrest\MatcherAssert', 'assertThat'),
        $args
    );
}

function anArray(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Arrays\IsArray', 'anArray'), $args);
}

function hasItemInArray($item)
{
    return \Hamcrest\Arrays\IsArrayContaining::hasItemInArray($item);
}

function hasValue($item)
{
    return \Hamcrest\Arrays\IsArrayContaining::hasItemInArray($item);
}

function arrayContainingInAnyOrder(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'),
        $args);
}

function containsInAnyOrder(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'),
        $args);
}

function arrayContaining(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
}

function contains(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
}

function hasKeyInArray($key)
{
    return \Hamcrest\Arrays\IsArrayContainingKey::hasKeyInArray($key);
}

function hasKey($key)
{
    return \Hamcrest\Arrays\IsArrayContainingKey::hasKeyInArray($key);
}

function hasKeyValuePair($key, $value)
{
    return \Hamcrest\Arrays\IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
}

function hasEntry($key, $value)
{
    return \Hamcrest\Arrays\IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
}

function arrayWithSize($size)
{
    return \Hamcrest\Arrays\IsArrayWithSize::arrayWithSize($size);
}

function emptyArray()
{
    return \Hamcrest\Arrays\IsArrayWithSize::emptyArray();
}

function nonEmptyArray()
{
    return \Hamcrest\Arrays\IsArrayWithSize::nonEmptyArray();
}

function emptyTraversable()
{
    return \Hamcrest\Collection\IsEmptyTraversable::emptyTraversable();
}

function nonEmptyTraversable()
{
    return \Hamcrest\Collection\IsEmptyTraversable::nonEmptyTraversable();
}

function traversableWithSize($size)
{
    return \Hamcrest\Collection\IsTraversableWithSize::traversableWithSize($size);
}

function allOf(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\AllOf', 'allOf'), $args);
}

function anyOf(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\AnyOf', 'anyOf'), $args);
}

function noneOf(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\AnyOf', 'noneOf'), $args);
}

function both(\Hamcrest\Matcher $matcher)
{
    return \Hamcrest\Core\CombinableMatcher::both($matcher);
}

function either(\Hamcrest\Matcher $matcher)
{
    return \Hamcrest\Core\CombinableMatcher::either($matcher);
}

function describedAs(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\DescribedAs', 'describedAs'), $args);
}

function everyItem(\Hamcrest\Matcher $itemMatcher)
{
    return \Hamcrest\Core\Every::everyItem($itemMatcher);
}

function hasToString($matcher)
{
    return \Hamcrest\Core\HasToString::hasToString($matcher);
}

function is($value)
{
    return \Hamcrest\Core\Is::is($value);
}

function anything($description = 'ANYTHING')
{
    return \Hamcrest\Core\IsAnything::anything($description);
}

function hasItem(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\IsCollectionContaining', 'hasItem'), $args);
}

function hasItems(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Core\IsCollectionContaining', 'hasItems'), $args);
}

function equalTo($item)
{
    return \Hamcrest\Core\IsEqual::equalTo($item);
}

function identicalTo($value)
{
    return \Hamcrest\Core\IsIdentical::identicalTo($value);
}

function anInstanceOf($theClass)
{
    return \Hamcrest\Core\IsInstanceOf::anInstanceOf($theClass);
}

function any($theClass)
{
    return \Hamcrest\Core\IsInstanceOf::anInstanceOf($theClass);
}

function not($value)
{
    return \Hamcrest\Core\IsNot::not($value);
}

function nullValue()
{
    return \Hamcrest\Core\IsNull::nullValue();
}

function notNullValue()
{
    return \Hamcrest\Core\IsNull::notNullValue();
}

function sameInstance($object)
{
    return \Hamcrest\Core\IsSame::sameInstance($object);
}

function typeOf($theType)
{
    return \Hamcrest\Core\IsTypeOf::typeOf($theType);
}

function set($property)
{
    return \Hamcrest\Core\Set::set($property);
}

function notSet($property)
{
    return \Hamcrest\Core\Set::notSet($property);
}

function closeTo($value, $delta)
{
    return \Hamcrest\Number\IsCloseTo::closeTo($value, $delta);
}

function comparesEqualTo($value)
{
    return \Hamcrest\Number\OrderingComparison::comparesEqualTo($value);
}

function greaterThan($value)
{
    return \Hamcrest\Number\OrderingComparison::greaterThan($value);
}

function greaterThanOrEqualTo($value)
{
    return \Hamcrest\Number\OrderingComparison::greaterThanOrEqualTo($value);
}

function atLeast($value)
{
    return \Hamcrest\Number\OrderingComparison::greaterThanOrEqualTo($value);
}

function lessThan($value)
{
    return \Hamcrest\Number\OrderingComparison::lessThan($value);
}

function lessThanOrEqualTo($value)
{
    return \Hamcrest\Number\OrderingComparison::lessThanOrEqualTo($value);
}

function atMost($value)
{
    return \Hamcrest\Number\OrderingComparison::lessThanOrEqualTo($value);
}

function isEmptyString()
{
    return \Hamcrest\Text\IsEmptyString::isEmptyString();
}

function emptyString()
{
    return \Hamcrest\Text\IsEmptyString::isEmptyString();
}

function isEmptyOrNullString()
{
    return \Hamcrest\Text\IsEmptyString::isEmptyOrNullString();
}

function nullOrEmptyString()
{
    return \Hamcrest\Text\IsEmptyString::isEmptyOrNullString();
}

function isNonEmptyString()
{
    return \Hamcrest\Text\IsEmptyString::isNonEmptyString();
}

function nonEmptyString()
{
    return \Hamcrest\Text\IsEmptyString::isNonEmptyString();
}

function equalToIgnoringCase($string)
{
    return \Hamcrest\Text\IsEqualIgnoringCase::equalToIgnoringCase($string);
}

function equalToIgnoringWhiteSpace($string)
{
    return \Hamcrest\Text\IsEqualIgnoringWhiteSpace::equalToIgnoringWhiteSpace($string);
}

function matchesPattern($pattern)
{
    return \Hamcrest\Text\MatchesPattern::matchesPattern($pattern);
}

function containsString($substring)
{
    return \Hamcrest\Text\StringContains::containsString($substring);
}

function containsStringIgnoringCase($substring)
{
    return \Hamcrest\Text\StringContainsIgnoringCase::containsStringIgnoringCase($substring);
}

function stringContainsInOrder(/* args... */)
{
    $args = func_get_args();
    return call_user_func_array(array('\Hamcrest\Text\StringContainsInOrder', 'stringContainsInOrder'), $args);
}

function endsWith($substring)
{
    return \Hamcrest\Text\StringEndsWith::endsWith($substring);
}

function startsWith($substring)
{
    return \Hamcrest\Text\StringStartsWith::startsWith($substring);
}

function arrayValue()
{
    return \Hamcrest\Type\IsArray::arrayValue();
}

function booleanValue()
{
    return \Hamcrest\Type\IsBoolean::booleanValue();
}

function boolValue()
{
    return \Hamcrest\Type\IsBoolean::booleanValue();
}

function callableValue()
{
    return \Hamcrest\Type\IsCallable::callableValue();
}

function doubleValue()
{
    return \Hamcrest\Type\IsDouble::doubleValue();
}

function floatValue()
{
    return \Hamcrest\Type\IsDouble::doubleValue();
}

function integerValue()
{
    return \Hamcrest\Type\IsInteger::integerValue();
}

function intValue()
{
    return \Hamcrest\Type\IsInteger::integerValue();
}

function numericValue()
{
    return \Hamcrest\Type\IsNumeric::numericValue();
}

function objectValue()
{
    return \Hamcrest\Type\IsObject::objectValue();
}

function anObject()
{
    return \Hamcrest\Type\IsObject::objectValue();
}

function resourceValue()
{
    return \Hamcrest\Type\IsResource::resourceValue();
}

function scalarValue()
{
    return \Hamcrest\Type\IsScalar::scalarValue();
}

function stringValue()
{
    return \Hamcrest\Type\IsString::stringValue();
}

function hasXPath($xpath, $matcher = null)
{
    return \Hamcrest\Xml\HasXPath::hasXPath($xpath, $matcher);
}

