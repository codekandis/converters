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
	 * Represents a set of boolean integer strings.
	 * @var string[]
	 */
	public const array BOOL_INT_STRING_SET = [
		'0',
		'1'
	];
}
