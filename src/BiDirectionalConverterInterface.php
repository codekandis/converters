<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any bi-directional converters.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface BiDirectionalConverterInterface
{
	/**
	 * Converts into a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertTo( mixed $value ): mixed;

	/**
	 * Converts from a value.
	 * @param mixed $value The value which has to be converted.
	 * @return mixed The converted value.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 */
	public function convertFrom( mixed $value ): mixed;
}
