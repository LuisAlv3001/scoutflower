<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/enum_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Errors;

class EnumError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v6/errors/enum_error.protogoogle.ads.googleads.v6.errors"X
EnumErrorEnum"G
	EnumError
UNSPECIFIED 
UNKNOWN
ENUM_VALUE_NOT_PERMITTEDB�
"com.google.ads.googleads.v6.errorsBEnumErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

