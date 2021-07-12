<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/gender_type.proto

namespace Google\Ads\GoogleAds\V6\Enums\GenderTypeEnum;

use UnexpectedValueException;

/**
 * The type of demographic genders (e.g. female).
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.GenderTypeEnum.GenderType</code>
 */
class GenderType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Male.
     *
     * Generated from protobuf enum <code>MALE = 10;</code>
     */
    const MALE = 10;
    /**
     * Female.
     *
     * Generated from protobuf enum <code>FEMALE = 11;</code>
     */
    const FEMALE = 11;
    /**
     * Undetermined gender.
     *
     * Generated from protobuf enum <code>UNDETERMINED = 20;</code>
     */
    const UNDETERMINED = 20;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MALE => 'MALE',
        self::FEMALE => 'FEMALE',
        self::UNDETERMINED => 'UNDETERMINED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenderType::class, \Google\Ads\GoogleAds\V6\Enums\GenderTypeEnum_GenderType::class);

