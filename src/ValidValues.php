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
	 * @inheritDoc
	 */
	#[Override]
	public static function createDateTimeString( string $format ): string
	{
		return sprintf( ValidValues::DATETIME_STRING_TEMPLATE, $format );
	}
}
