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
namespace MehrAlsNix\Assumptions\Functions;

use Hamcrest\Arrays\IsArrayContaining;
use Hamcrest\Arrays\IsArrayContainingKey;
use Hamcrest\Arrays\IsArrayContainingKeyValuePair;
use Hamcrest\Arrays\IsArrayWithSize;
use Hamcrest\Collection\IsEmptyTraversable;
use Hamcrest\Collection\IsTraversableWithSize;
use Hamcrest\Core\CombinableMatcher;
use Hamcrest\Core\Every;
use Hamcrest\Core\HasToString;
use Hamcrest\Core\Is;
use Hamcrest\Core\IsAnything;
use Hamcrest\Core\IsEqual;
use Hamcrest\Core\IsIdentical;
use Hamcrest\Core\IsInstanceOf;
use Hamcrest\Core\IsNot;
use Hamcrest\Core\IsNull;
use Hamcrest\Core\IsSame;
use Hamcrest\Core\IsTypeOf;
use Hamcrest\Core\Set;
use Hamcrest\Matcher;
use Hamcrest\Number\IsCloseTo;
use Hamcrest\Number\OrderingComparison;
use Hamcrest\Text\IsEmptyString;
use Hamcrest\Text\IsEqualIgnoringCase;
use Hamcrest\Text\IsEqualIgnoringWhiteSpace;
use Hamcrest\Text\MatchesPattern;
use Hamcrest\Text\StringContains;
use Hamcrest\Text\StringContainsIgnoringCase;
use Hamcrest\Text\StringContainsInOrder;
use Hamcrest\Core\IsCollectionContaining;
use Hamcrest\Core\DescribedAs;
use Hamcrest\Core\AnyOf;
use Hamcrest\Core\AllOf;
use Hamcrest\Arrays\IsArrayContainingInOrder;
use Hamcrest\Arrays\IsArrayContainingInAnyOrder;
use Hamcrest\Arrays\IsArray;
use Hamcrest\MatcherAssert;
use Hamcrest\Text\StringEndsWith;
use Hamcrest\Text\StringStartsWith;
use Hamcrest\Type\IsArray as IsArrayType;
use Hamcrest\Type\IsBoolean;
use Hamcrest\Type\IsCallable;
use Hamcrest\Type\IsDouble;
use Hamcrest\Type\IsInteger;
use Hamcrest\Type\IsNumeric;
use Hamcrest\Type\IsObject;
use Hamcrest\Type\IsResource;
use Hamcrest\Type\IsScalar;
use Hamcrest\Type\IsString;
use Hamcrest\Xml\HasXPath;

/**
 * @param array ...$args
 */
function assertThat(...$args)
{
    MatcherAssert::assertThat($args);
}

/**
 * @param array ...$args
 * @return IsArray
 */
function anArray(...$args)
{
    return IsArray::anArray($args);
}

/**
 * @param $item
 * @return IsArrayContaining
 */
function hasItemInArray($item)
{
    return IsArrayContaining::hasItemInArray($item);
}

/**
 * @param $item
 * @return IsArrayContaining
 */
function hasValue($item)
{
    return IsArrayContaining::hasItemInArray($item);
}

/**
 * @param array ...$args
 * @return IsArrayContainingInAnyOrder
 */
function arrayContainingInAnyOrder(...$args)
{
    return IsArrayContainingInAnyOrder::arrayContainingInAnyOrder($args);
}

/**
 * @param array ...$args
 * @return IsArrayContainingInAnyOrder
 */
function containsInAnyOrder(...$args)
{
    return IsArrayContainingInAnyOrder::arrayContainingInAnyOrder($args);
}

/**
 * @param array ...$args
 * @return IsArrayContainingInOrder
 */
function arrayContaining(...$args)
{
    return IsArrayContainingInOrder::arrayContaining($args);
}

/**
 * @param array ...$args
 * @return IsArrayContainingInOrder
 */
function contains(...$args)
{
    return IsArrayContainingInOrder::arrayContaining($args);
}

/**
 * @param $key
 * @return IsArrayContainingKey
 */
function hasKeyInArray($key)
{
    return IsArrayContainingKey::hasKeyInArray($key);
}

/**
 * @param $key
 * @return IsArrayContainingKey
 */
function hasKey($key)
{
    return IsArrayContainingKey::hasKeyInArray($key);
}

/**
 * @param $key
 * @param $value
 * @return IsArrayContainingKeyValuePair
 */
function hasKeyValuePair($key, $value)
{
    return IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
}

/**
 * @param $key
 * @param $value
 * @return IsArrayContainingKeyValuePair
 */
function hasEntry($key, $value)
{
    return IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
}

/**
 * @param $size
 * @return IsArrayWithSize
 */
function arrayWithSize($size)
{
    return IsArrayWithSize::arrayWithSize($size);
}

/**
 * @return DescribedAs
 */
function emptyArray()
{
    return IsArrayWithSize::emptyArray();
}

/**
 * @return DescribedAs
 */
function nonEmptyArray()
{
    return IsArrayWithSize::nonEmptyArray();
}

/**
 * @return IsEmptyTraversable
 */
function emptyTraversable()
{
    return IsEmptyTraversable::emptyTraversable();
}

/**
 * @return IsEmptyTraversable
 */
function nonEmptyTraversable()
{
    return IsEmptyTraversable::nonEmptyTraversable();
}

/**
 * @param $size
 * @return IsTraversableWithSize
 */
function traversableWithSize($size)
{
    return IsTraversableWithSize::traversableWithSize($size);
}

/**
 * @param array ...$args
 * @return AllOf
 */
function allOf(...$args)
{
    return AllOf::allOf($args);
}

/**
 * @param array ...$args
 * @return AnyOf
 */
function anyOf(...$args)
{
    return AnyOf::anyOf($args);
}

/**
 * @param array ...$args
 * @return IsNot
 */
function noneOf(...$args)
{
    return AnyOf::noneOf($args);
}

/**
 * @param Matcher $matcher
 * @return CombinableMatcher
 */
function both(Matcher $matcher)
{
    return CombinableMatcher::both($matcher);
}

/**
 * @param Matcher $matcher
 * @return CombinableMatcher
 */
function either(Matcher $matcher)
{
    return CombinableMatcher::either($matcher);
}

/**
 * @param array ...$args
 * @return DescribedAs
 */
function describedAs(...$args)
{
    return DescribedAs::describedAs($args);
}

/**
 * @param Matcher $itemMatcher
 * @return Every
 */
function everyItem(Matcher $itemMatcher)
{
    return Every::everyItem($itemMatcher);
}

/**
 * @param $matcher
 * @return HasToString
 */
function hasToString($matcher)
{
    return HasToString::hasToString($matcher);
}

/**
 * @param $value
 * @return Is
 */
function is($value)
{
    return Is::is($value);
}

/**
 * @param string $description
 * @return IsAnything
 */
function anything($description = 'ANYTHING')
{
    return IsAnything::anything($description);
}

/**
 * @param array ...$args
 * @return IsCollectionContaining
 */
function hasItem(...$args)
{
    return IsCollectionContaining::hasItem($args);
}

/**
 * @param array ...$args
 * @return AllOf
 */
function hasItems(...$args)
{
    return IsCollectionContaining::hasItems($args);
}

/**
 * @param $item
 * @return IsEqual
 */
function equalTo($item)
{
    return IsEqual::equalTo($item);
}

/**
 * @param $value
 * @return IsIdentical
 */
function identicalTo($value)
{
    return IsIdentical::identicalTo($value);
}

/**
 * @param $theClass
 * @return IsInstanceOf
 */
function anInstanceOf($theClass)
{
    return IsInstanceOf::anInstanceOf($theClass);
}

/**
 * @param $theClass
 * @return IsInstanceOf
 */
function any($theClass)
{
    return IsInstanceOf::anInstanceOf($theClass);
}

/**
 * @param $value
 * @return IsNot
 */
function not($value)
{
    return IsNot::not($value);
}

/**
 * @return IsNull
 */
function nullValue()
{
    return IsNull::nullValue();
}

/**
 * @return IsNot
 */
function notNullValue()
{
    return IsNull::notNullValue();
}

/**
 * @param $object
 * @return IsSame
 */
function sameInstance($object)
{
    return IsSame::sameInstance($object);
}

/**
 * @param $theType
 * @return IsTypeOf
 */
function typeOf($theType)
{
    return IsTypeOf::typeOf($theType);
}

/**
 * @param $property
 * @return Set
 */
function set($property)
{
    return Set::set($property);
}

/**
 * @param $property
 * @return Set
 */
function notSet($property)
{
    return Set::notSet($property);
}

/**
 * @param $value
 * @param $delta
 * @return IsCloseTo
 */
function closeTo($value, $delta)
{
    return IsCloseTo::closeTo($value, $delta);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function comparesEqualTo($value)
{
    return OrderingComparison::comparesEqualTo($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function greaterThan($value)
{
    return OrderingComparison::greaterThan($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function greaterThanOrEqualTo($value)
{
    return OrderingComparison::greaterThanOrEqualTo($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function atLeast($value)
{
    return OrderingComparison::greaterThanOrEqualTo($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function lessThan($value)
{
    return OrderingComparison::lessThan($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function lessThanOrEqualTo($value)
{
    return OrderingComparison::lessThanOrEqualTo($value);
}

/**
 * @param $value
 * @return OrderingComparison
 */
function atMost($value)
{
    return OrderingComparison::lessThanOrEqualTo($value);
}

/**
 * @return IsEmptyString
 */
function isEmptyString()
{
    return IsEmptyString::isEmptyString();
}

/**
 * @return IsEmptyString
 */
function emptyString()
{
    return IsEmptyString::isEmptyString();
}

/**
 * @return AnyOf
 */
function isEmptyOrNullString()
{
    return IsEmptyString::isEmptyOrNullString();
}

/**
 * @return AnyOf
 */
function nullOrEmptyString()
{
    return IsEmptyString::isEmptyOrNullString();
}

/**
 * @return IsEmptyString
 */
function isNonEmptyString()
{
    return IsEmptyString::isNonEmptyString();
}

/**
 * @return IsEmptyString
 */
function nonEmptyString()
{
    return IsEmptyString::isNonEmptyString();
}

/**
 * @param $string
 * @return IsEqualIgnoringCase
 */
function equalToIgnoringCase($string)
{
    return IsEqualIgnoringCase::equalToIgnoringCase($string);
}

/**
 * @param $string
 * @return IsEqualIgnoringWhiteSpace
 */
function equalToIgnoringWhiteSpace($string)
{
    return IsEqualIgnoringWhiteSpace::equalToIgnoringWhiteSpace($string);
}

/**
 * @param $pattern
 * @return MatchesPattern
 */
function matchesPattern($pattern)
{
    return MatchesPattern::matchesPattern($pattern);
}

/**
 * @param $substring
 * @return StringContains
 */
function containsString($substring)
{
    return StringContains::containsString($substring);
}

/**
 * @param $substring
 * @return StringContainsIgnoringCase
 */
function containsStringIgnoringCase($substring)
{
    return StringContainsIgnoringCase::containsStringIgnoringCase($substring);
}

/**
 * @param array ...$args
 * @return StringContainsInOrder
 */
function stringContainsInOrder(...$args)
{
    return StringContainsInOrder::stringContainsInOrder($args);
}

/**
 * @param $substring
 * @return StringEndsWith
 */
function endsWith($substring)
{
    return StringEndsWith::endsWith($substring);
}

/**
 * @param $substring
 * @return StringStartsWith
 */
function startsWith($substring)
{
    return StringStartsWith::startsWith($substring);
}

/**
 * @return IsArrayType
 */
function arrayValue()
{
    return IsArrayType::arrayValue();
}

/**
 * @return IsBoolean
 */
function booleanValue()
{
    return IsBoolean::booleanValue();
}

/**
 * @return IsBoolean
 */
function boolValue()
{
    return IsBoolean::booleanValue();
}

/**
 * @return IsCallable
 */
function callableValue()
{
    return IsCallable::callableValue();
}

/**
 * @return IsDouble
 */
function doubleValue()
{
    return IsDouble::doubleValue();
}

/**
 * @return IsDouble
 */
function floatValue()
{
    return IsDouble::doubleValue();
}

/**
 * @return IsInteger
 */
function integerValue()
{
    return IsInteger::integerValue();
}

/**
 * @return IsInteger
 */
function intValue()
{
    return IsInteger::integerValue();
}

/**
 * @return IsNumeric
 */
function numericValue()
{
    return IsNumeric::numericValue();
}

/**
 * @return IsObject
 */
function objectValue()
{
    return IsObject::objectValue();
}

/**
 * @return IsObject
 */
function anObject()
{
    return IsObject::objectValue();
}

/**
 * @return IsResource
 */
function resourceValue()
{
    return IsResource::resourceValue();
}

/**
 * @return IsScalar
 */
function scalarValue()
{
    return IsScalar::scalarValue();
}

/**
 * @return IsString
 */
function stringValue()
{
    return IsString::stringValue();
}

/**
 * @param $xpath
 * @param null $matcher
 * @return HasXPath
 */
function hasXPath($xpath, $matcher = null)
{
    return HasXPath::hasXPath($xpath, $matcher);
}
