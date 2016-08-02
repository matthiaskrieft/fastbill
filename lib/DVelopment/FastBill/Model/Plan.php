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
class Plan
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ARTICLE_ID")
     */
    private $articleId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    private $articleNumber;

    /**
     * @var array
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("FEATURES")
     */
    private $features;

    public function __construct() {
        $this->features = [];
    }

    /**
     * @param int $articleId
     *
     * @return Plan
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param int $articleNumber
     *
     * @return Subscription
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param Feature[] $features
     *
     * @return Subscription
     */
    public function setFeatures($features)
    {
        $this->features= $features;
        return $this;
    }

    /**
     * @return Feature[]
     */
    public function getFeatures()
    {
        return $this->features;
    }
}