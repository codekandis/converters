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
	 * Represents a boolean string for `false`.
	 * @var int
	 */
	public const int BOOL_INT_FALSE = 0;

	/**
	 * Represents a boolean string for `true`.
	 * @var int
	 */
	public const int BOOL_INT_TRUE = 1;

	/**
	 * Represents a set of boolean integers.
	 * @var int[]
	 */
	public const array BOOL_INT_SET = [
		self::BOOL_INT_FALSE,
		self::BOOL_INT_TRUE
	];

	/**
	 * Represents a boolean string for `false`.
	 * @var string
	 */
	public const string BOOL_STRING_FALSE = 'false';

	/**
	 * Represents a boolean string for `true`.
	 * @var string
	 */
	public const string BOOL_STRING_TRUE = 'true';

	/**
	 * Represents a set of boolean strings.
	 * @var string[]
	 */
	public const array BOOL_STRING_SET = [
		self::BOOL_STRING_FALSE,
		self::BOOL_STRING_TRUE
	];

	/**
	 * Represents a boolean integer string for `false`.
	 * @var string
	 */
	public const string BOOL_INT_STRING_FALSE = '0';

	/**
	 * Represents a boolean integer string for `true`.
	 * @var string
	 */
	public const string BOOL_INT_STRING_TRUE = '1';

	/**
	 * Represents a set of boolean integer strings.
	 * @var string[]
	 */
	public const array BOOL_INT_STRING_SET = [
		self::BOOL_INT_STRING_FALSE,
		self::BOOL_INT_STRING_TRUE
	];
}
