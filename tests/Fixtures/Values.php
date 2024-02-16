<?php declare( strict_types = 1 );
namespace CodeKandis\Converters\Tests\Fixtures;

use DateTime;
use DateTimeImmutable;
use DateTimeZone;

/**
 * Represents an enumeration of values.
 * @package codekandis/converters
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a `null` value.
	 * @var null
	 */
	public const null NULL = null;

	/**
	 * Represents a `boolean false` value.
	 * @var bool
	 */
	public const bool BOOLEAN_FALSE = false;

	/**
	 * Represents a `boolean true` value.
	 * @var bool
	 */
	public const bool BOOLEAN_TRUE = true;

	/**
	 * Represents a `boolean integer false` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_FALSE = 0;

	/**
	 * Represents a `boolean integer true` value.
	 * @var int
	 */
	public const int BOOLEAN_INTEGER_TRUE = 1;

	/**
	 * Represents a set of `boolean integer` values.
	 * @var int[]
	 */
	public const array BOOLEAN_INTEGER_SET = [
		self::BOOLEAN_INTEGER_FALSE,
		self::BOOLEAN_INTEGER_TRUE
	];

	/**
	 * Represents a `boolean integer string false` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_FALSE = '0';

	/**
	 * Represents a `boolean integer string true` value.
	 * @var string
	 */
	public const string BOOLEAN_INTEGER_STRING_TRUE = '1';

	/**
	 * Represents a set of `boolean integer string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_INTEGER_STRING_SET = [
		self::BOOLEAN_INTEGER_STRING_FALSE,
		self::BOOLEAN_INTEGER_STRING_TRUE
	];

	/**
	 * Represents a `boolean string false` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_FALSE = 'false';

	/**
	 * Represents a `boolean string true` value.
	 * @var string
	 */
	public const string BOOLEAN_STRING_TRUE = 'true';

	/**
	 * Represents a set of `boolean string` values.
	 * @var string[]
	 */
	public const array BOOLEAN_STRING_SET = [
		self::BOOLEAN_STRING_FALSE,
		self::BOOLEAN_STRING_TRUE
	];

	/**
	 * Represents a set of `boolean` values.
	 * @var bool[]
	 */
	public const array BOOLEAN_ARRAY = [
		true,
		false,
		true,
		false,
		true,
		false
	];

	/**
	 * Represents a `binary string` value.
	 * @var string
	 */
	public const string BINARY_STRING = '101010';

	/**
	 * Represents an `integer` value.
	 * @var int
	 */
	public const int INTEGER = 42;

	/**
	 * Represents an `integer string` value.
	 * @var string
	 */
	public const string INTEGER_STRING = '42';

	/**
	 * Represents a `float` value.
	 * @var float
	 */
	public const float FLOAT = 42.24;

	/**
	 * Represents a `float string` value.
	 * @var string
	 */
	public const string FLOAT_STRING = '42.24';

	/**
	 * Represents a `DateTime string` value.
	 * @var string
	 */
	public const string DATETIME_STRING = '1990-05-14 12:24:49.123456';

	/**
	 * Represents a `DateTime` format.
	 * @var string
	 */
	public const string DATETIME_FORMAT = 'Y-m-d H:i:s.u';

	/**
	 * Represents a UTC `DateTimeZone`.
	 * @var string
	 */
	public const string DATETIMEZONE_UTC = 'UTC';

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

	/**
	 * Represents the template of a `DateTime string` value.
	 * @var string
	 */
	public const string TEMPLATE_DATETIME_STRING = 'string<datetime<%s>>';

	/**
	 * Represents a nonexistant `enumeration class` class name.
	 * @var string
	 */
	public const string NON_EXISTENT_ENUMERATION_CLASS_NAME = 'nonExistentEnumerationClassClassName';

	/**
	 * Represents a set of `enumeration` values.
	 * @var mixed[]
	 */
	public const array ENUMERATION_ARRAY = [
		Values::NULL,
		Values::BOOLEAN_FALSE,
		Values::BOOLEAN_TRUE,
		Values::BOOLEAN_INTEGER_FALSE,
		Values::BOOLEAN_INTEGER_TRUE,
		Values::BOOLEAN_STRING_FALSE,
		Values::BOOLEAN_STRING_TRUE,
		Values::BOOLEAN_INTEGER_STRING_FALSE,
		Values::BOOLEAN_INTEGER_STRING_TRUE,
		Values::INTEGER,
		Values::INTEGER_STRING,
		Values::FLOAT,
		Values::FLOAT_STRING
	];

	/**
	 * Creates an `enumeration class` object.
	 * @return object The created `enumeration class` object.
	 */
	public static function createEnumerationClassObject(): object
	{
		return new class()
		{
			public const null   NULL                         = Values::NULL;

			public const bool   BOOLEAN_FALSE                = Values::BOOLEAN_FALSE;

			public const bool   BOOLEAN_TRUE                 = Values::BOOLEAN_TRUE;

			public const int    BOOLEAN_INTEGER_FALSE        = Values::BOOLEAN_INTEGER_FALSE;

			public const int    BOOLEAN_INTEGER_TRUE         = Values::BOOLEAN_INTEGER_TRUE;

			public const string BOOLEAN_STRING_FALSE         = Values::BOOLEAN_STRING_FALSE;

			public const string BOOLEAN_STRING_TRUE          = Values::BOOLEAN_STRING_TRUE;

			public const string BOOLEAN_INTEGER_STRING_FALSE = Values::BOOLEAN_INTEGER_STRING_FALSE;

			public const string BOOLEAN_INTEGER_STRING_TRUE  = Values::BOOLEAN_INTEGER_STRING_TRUE;

			public const int    INTEGER                      = Values::INTEGER;

			public const string INTEGER_STRING               = Values::INTEGER_STRING;

			public const float  FLOAT                        = Values::FLOAT;

			public const string FLOAT_STRING                 = Values::FLOAT_STRING;
		};
	}

	/**
	 * Creates a `DateTimeImmutable` object.
	 * @return DateTimeImmutable The created `DateTimeImmutable` object.
	 */
	public static function createDateTimeImmutableObject(): DateTimeImmutable
	{
		return new DateTimeImmutable( Values::DATETIME_STRING );
	}

	/**
	 * Creates a `DateTime` object.
	 * @return DateTime The created `DateTime` object.
	 */
	public static function createDateTimeObject(): DateTime
	{
		return new DateTime( Values::DATETIME_STRING );
	}

	/**
	 * Creates a `DateTimeZone` object.
	 * @return DateTimeZone The created `DateTimeZone` object.
	 */
	public static function createDateTimeZoneObject(): DateTimeZone
	{
		return new DateTimeZone( Values::DATETIMEZONE_UTC );
	}
}
