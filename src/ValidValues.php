<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValues
{
	/**
	 * Represents a `boolean integer` for `false`.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` for `true`.
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
	 * Represents a `boolean string` for `false`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` for `true`.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a set of `boolean strings`.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_SET = [
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE
	];

	/**
	 * Represents a `boolean integer string` for `false`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` for `true`.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents a set of `boolean integer strings`.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_SET = [
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE
	];

	/**
	 * Represents the template of a `DateTime string`.
	 * @var string
	 */
	public const string TEMPLATE_DATETIME_STRING_TEMPLATE = 'string<datetime<%s>>';
}
