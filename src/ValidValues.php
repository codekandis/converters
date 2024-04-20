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
	 * Represents a `null string`.
	 */
	public const string NULL_STRING = 'null';

	/**
	 * Represents a `boolean integer` representing the boolean value `false`.
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer` representing the boolean value `true`.
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
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string` representing the boolean value `true`.
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a `boolean integer string` representing the boolean value `false`.
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string` representing the boolean value `true`.
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents the template of a `DateTime string`.
	 */
	public const string TEMPLATE_DATETIME_STRING_TEMPLATE = 'string<datetime<%s>>';
}
