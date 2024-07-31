<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use CodeKandis\Types\ClassNotFoundExceptionInterface;
use CodeKandis\Types\InvalidTypeExceptionInterface;

/**
 * Represents the interface of any unidirectional converter converting class constants into an array of corresponding key value pairs.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ClassConstantsToArrayUniDirectionalConverterInterface extends UniDirectionalConverterInterface
{
	/**
	 * Converts class constants into an array of corresponding key value pairs.
	 * @param mixed $value The class name of the class whose constants has to be converted.
	 * @return mixed The converted array of corresponding key value pairs.
	 * @throws InvalidTypeExceptionInterface The type of the value to convert is invalid.
	 * @throws ClassNotFoundExceptionInterface The class does not exist.
	 */
	public function convert( mixed $value ): array;
}
