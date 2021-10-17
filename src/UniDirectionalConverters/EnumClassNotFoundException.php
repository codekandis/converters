<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\UniDirectionalConverters;

use ReflectionException;

/**
 * Represents an exception if an enum class does not exist.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
class EnumClassNotFoundException extends ReflectionException
{
}
