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
	 */
	public const string REGEX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents the regular expression of an `integer string` value.
	 */
	public const string REGEX_INTEGER_STRING = '~^\\-?\d+$~';

	/**
	 * Represents the regular expression of a `float string` value.
	 */
	public const string REGEX_FLOAT_STRING = '~^\\-?\d+(?:\\.\d+)?$~';
}
