<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use CodeKandis\Types\BaseObject;
use Override;
use function sprintf;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValues extends BaseObject implements ValidValuesInterface
{
	/**
	 * Represents a `null string`.
	 * @var string
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean integer` representing the boolean value `false`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` representing the boolean value `true`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a set of `boolean integers`.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_SET = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents a `boolean string` representing the boolean value `false`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` representing the boolean value `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a `boolean integer string` representing the boolean value `false`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` representing the boolean value `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents the template of a `DateTime string`.
	 * @var string
	 */
	public const string DATETIME_STRING_TEMPLATE = 'string<datetime<%s>>';

	/**
	 * Represents the regular expression of a `boolean string` value.
	 * @var string
	 */
	public const string REGEX_BOOLEAN_STRING = '~^false|true$~';

	/**
	 * Represents the regular expression of a `boolean integer string` value.
	 * @var string
	 */
	public const string REGEX_BOOLEAN_INTEGER_STRING = '~^[01]$~';

	/**
	 * Represents the regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REGEX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents the regular expression of an `integer string` value.
	 * @var string
	 */
	public const string REGEX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents the regular expression of a `float string` value.
	 * @var string
	 */
	public const string REGEX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';

	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function createDateTimeString( string $format ): string
	{
		return sprintf( ValidValues::DATETIME_STRING_TEMPLATE, $format );
	}
}
