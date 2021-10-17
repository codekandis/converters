<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents the interface of any uni-directional converters.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UniDirectionalConverterInterface
{
	/**
	 * Converts a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 */
	public function convert( $value );
}
