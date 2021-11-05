<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Types;

/**
 * Represents an enumeration of regular expressions of valid values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValuesRegularExpressions
{
	/**
	 * Represents the regular expression of a bool value.
	 * @var string
	 */
	public const REGEX_BOOL_STRING = '~^(?:true|false)$~';

	/**
	 * Represents the regular expression of an int representation of a bool value.
	 * @var string
	 */
	public const REGEX_BOOL_INT_STRING = '~^[01]$~';

	/**
	 * Represents the regular expression of an int value.
	 * @var string
	 */
	public const REGEX_INT_STRING = '~^\\-?[0-9]+$~';

	/**
	 * Represents the regular expression of a float value.
	 * @var string
	 */
	public const REGEX_FLOAT_STRING = '~^\\-?[0-9]+(?:\\.[0-9]+)?$~';
}
