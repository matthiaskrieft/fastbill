<?php
/**
 * @package fastbill
 *
 * @author Artur Wawrzynkiewicz <aw@appandweb.de>
 * @date 11.11.2015
 * @time 13:03
 */

namespace DVelopment\FastBill\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("none")
 */
class Feature
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CODE")
     */
    private $code;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    private $quantity;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("VALUE")
     */
    private $value;

    /**
     * @param string $code
     *
     * @return Feature
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->subscriptionId;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return Feature
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return Feature
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int $value
     */
    public function getValue()
    {
        return $this->value;
    }

}