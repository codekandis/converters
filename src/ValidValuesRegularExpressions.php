<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

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
	public const string REGEX_BOOL_STRING = '~^(?:true|false)$~';

	/**
	 * Represents the regular expression of an int representation of a bool value.
	 * @var string
	 */
	public const string REGEX_BOOL_INT_STRING = '~^[01]$~';

	/**
	 * Represents the regular expression of an int value.
	 * @var string
	 */
	public const string REGEX_INT_STRING = '~^\\-?\d+$~';

	/**
	 * Represents the regular expression of a float value.
	 * @var string
	 */
	public const string REGEX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';

	/**
	 * Represents the regular expression of a binary string value.
	 * @var string
	 */
	public const string REGEX_BINARY_STRING = '~^[01]+$~';
}