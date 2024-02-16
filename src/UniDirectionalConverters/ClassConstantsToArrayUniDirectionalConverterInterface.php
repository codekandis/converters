<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Converters\ClassNotFoundExceptionInterface;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting an `enumeration class` into an `array` of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClassConstantsToArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts an `enumeration class` into an `array` of values.
	 * @param mixed $value The class name of the `enumeration class` which has to be converted.
	 * @return mixed The converted `array` of values.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws ClassNotFoundExceptionInterface The enumeration class does not exist.
	 */
	public function convert( mixed $value ): array;
}
