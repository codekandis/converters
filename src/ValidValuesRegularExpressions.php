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
	 * Represents the regular expression of a `binary string` value.
	 * @var string
	 */
	public const string REGEX_BINARY_STRING = '~^[01]+$~';

	/**
	 * Represents the regular expression of a `boolean` value.
	 * @var string
	 */
	public const string REGEX_INTEGER_STRING = '~^\\-?[0-9]+$~';

	/**
	 * Represents the regular expression of a `float` value.
	 * @var string
	 */
	public const string REGEX_FLOAT_STRING = '~^\\-?[0-9]+(?:\\.[0-9]+)?$~';
}
