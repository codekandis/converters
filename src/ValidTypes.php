<?php declare( strict_types = 1 );
namespace CodeKandis\Converters;

/**
 * Represents an enumeration of valid types.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidTypes
{
	/**
	 * Represents an unknown type.
	 * @var string
	 */
	public const string UNKNOWN = 'unknown';

	/**
	 * Represents a NULL type.
	 * @var string
	 */
	public const string NULL = 'null';

	/**
	 * Represents a boolean type.
	 * @var string
	 */
	public const string BOOLEAN = 'bool';

	/**
	 * Represents a nullable boolean type.
	 * @var string
	 */
	public const string NULLABLE_BOOLEAN = '?bool';

	/**
	 * Represents a boolean type.
	 * @var string
	 */
	public const string INTEGER = 'int';

	/**
	 * Represents a nullable boolean type.
	 * @var string
	 */
	public const string NULLABLE_INTEGER = '?int';

	/**
	 * Represents a float type.
	 * @var string
	 */
	public const string FLOAT = 'float';

	/**
	 * Represents a nullable float type.
	 * @var string
	 */
	public const string NULLABLE_FLOAT = '?float';

	/**
	 * Represents a string type.
	 * @var string
	 */
	public const string STRING = 'string';

	/**
	 * Represents a nullable string type.
	 * @var string
	 */
	public const string NULLABLE_STRING = '?string';

	/**
	 * Represents an array type.
	 * @var string
	 */
	public const string ARRAY = 'array';

	/**
	 * Represents a nullable array type.
	 * @var string
	 */
	public const string NULLABLE_ARRAY = '?array';

	/**
	 * Represents a resource type.
	 * @var string
	 */
	public const string RESOURCE = 'resource';

	/**
	 * Represents a nullable resource type.
	 * @var string
	 */
	public const string NULLABLE_RESOURCE = '?resource';

	/**
	 * Represents an array of boolean values type.
	 * @var string
	 */
	public const string BOOLEAN_ARRAY = 'bool[]';

	/**
	 * Represents a DateTimeZone type.
	 * @var string
	 */
	public const string DATE_TIME_ZONE = 'DateTimeZone';

	/**
	 * Represents a nullable DateTimeZone type.
	 * @var string
	 */
	public const string NULLABLE_DATE_TIME_ZONE = '?DateTimeZone';

	/**
	 * Represents a DateTimeImmutable type.
	 * @var string
	 */
	public const string DATE_TIME_IMMUTABLE = 'DateTimeImmutable';

	/**
	 * Represents a nullable DateTimeImmutable type.
	 * @var string
	 */
	public const string NULLABLE_DATE_TIME_IMMUTABLE = '?DateTimeImmutable';

	/**
	 * Represents a DateTime type.
	 * @var string
	 */
	public const string DATE_TIME = 'DateTime';

	/**
	 * Represents a nullable DateTime type.
	 * @var string
	 */
	public const string NULLABLE_DATE_TIME = '?DateTime';
}
