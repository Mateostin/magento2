<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Catalog\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * @api
 */
interface CategoryLinkInterface extends ExtensibleDataInterface
{
    /**
     * @return int|null
     */
    public function getPosition();

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition($position);

    /**
     * Get category id
     *
     * @return string
     */
    public function getCategoryId();

    /**
     * Set category id
     *
     * @param string $categoryId
     * @return $this
     */
    public function setCategoryId($categoryId);

    /**
     * Retrieve existing extension attributes object.
     *
     * @return \Magento\Catalog\Api\Data\CategoryLinkExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Catalog\Api\Data\CategoryLinkExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Magento\Catalog\Api\Data\CategoryLinkExtensionInterface $extensionAttributes
    );
}
