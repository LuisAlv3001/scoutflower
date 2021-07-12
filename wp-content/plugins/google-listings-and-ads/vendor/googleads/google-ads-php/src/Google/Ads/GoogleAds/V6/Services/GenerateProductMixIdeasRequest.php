<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [ReachPlanService.GenerateProductMixIdeas][google.ads.googleads.v6.services.ReachPlanService.GenerateProductMixIdeas].
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.GenerateProductMixIdeasRequest</code>
 */
class GenerateProductMixIdeasRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The ID of the location, this is one of the ids returned by
     * ListPlannableLocations.
     *
     * Generated from protobuf field <code>string plannable_location_id = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $plannable_location_id = '';
    /**
     * Required. Currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>string currency_code = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $currency_code = '';
    /**
     * Required. Total budget.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>int64 budget_micros = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $budget_micros = 0;
    /**
     * The preferences of the suggested product mix.
     * An unset preference is interpreted as all possible values are allowed,
     * unless explicitly specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Preferences preferences = 5;</code>
     */
    protected $preferences = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type string $plannable_location_id
     *           Required. The ID of the location, this is one of the ids returned by
     *           ListPlannableLocations.
     *     @type string $currency_code
     *           Required. Currency code.
     *           Three-character ISO 4217 currency code.
     *     @type int|string $budget_micros
     *           Required. Total budget.
     *           Amount in micros. One million is equivalent to one unit.
     *     @type \Google\Ads\GoogleAds\V6\Services\Preferences $preferences
     *           The preferences of the suggested product mix.
     *           An unset preference is interpreted as all possible values are allowed,
     *           unless explicitly specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The ID of the location, this is one of the ids returned by
     * ListPlannableLocations.
     *
     * Generated from protobuf field <code>string plannable_location_id = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPlannableLocationId()
    {
        return $this->plannable_location_id;
    }

    /**
     * Required. The ID of the location, this is one of the ids returned by
     * ListPlannableLocations.
     *
     * Generated from protobuf field <code>string plannable_location_id = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPlannableLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->plannable_location_id = $var;

        return $this;
    }

    /**
     * Required. Currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>string currency_code = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Required. Currency code.
     * Three-character ISO 4217 currency code.
     *
     * Generated from protobuf field <code>string currency_code = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Required. Total budget.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>int64 budget_micros = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getBudgetMicros()
    {
        return $this->budget_micros;
    }

    /**
     * Required. Total budget.
     * Amount in micros. One million is equivalent to one unit.
     *
     * Generated from protobuf field <code>int64 budget_micros = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBudgetMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->budget_micros = $var;

        return $this;
    }

    /**
     * The preferences of the suggested product mix.
     * An unset preference is interpreted as all possible values are allowed,
     * unless explicitly specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Preferences preferences = 5;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\Preferences
     */
    public function getPreferences()
    {
        return isset($this->preferences) ? $this->preferences : null;
    }

    public function hasPreferences()
    {
        return isset($this->preferences);
    }

    public function clearPreferences()
    {
        unset($this->preferences);
    }

    /**
     * The preferences of the suggested product mix.
     * An unset preference is interpreted as all possible values are allowed,
     * unless explicitly specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Preferences preferences = 5;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\Preferences $var
     * @return $this
     */
    public function setPreferences($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\Preferences::class);
        $this->preferences = $var;

        return $this;
    }

}

