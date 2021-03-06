<?php

/*
 * This file is part of the Sylius package.
 *
 * (c); Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\AssortmentBundle\Model\Variant;

use Doctrine\Common\Collections\Collection;
use Sylius\Bundle\AssortmentBundle\Model\Option\OptionValueInterface;
use Sylius\Bundle\AssortmentBundle\Model\ProductInterface;

/**
 * Product variant interface.
 * It's related only to products that implement CustomizableProductInterface or FluidProductInterface.
 * Allows setting values for different variations of product options.
 * If some products don't need to have such features, they simply have only one master variant.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
interface VariantInterface
{
    /**
     * Checks whether variant is master.
     *
     * @return Boolean
     */
    public function isMaster();

    /**
     * Defines whether variant is master.
     *
     * @param Boolean $master
     */
    public function setMaster($master);

    /**
     * Get variant SKU.
     *
     * @return string
     */
    public function getSku();

    /**
     * Set variant SKU.
     *
     * @param string $sku
     */
    public function setSku($sku);

    /**
     * Get presentation.
     * This should be generated from option values
     * when no other is set.
     *
     * @return string
     */
    public function getPresentation();

    /**
     * Set custom presentation.
     *
     * @param string $presentation
     */
    public function setPresentation($presentation);

    /**
     * Get generated label for variant choice forms.
     *
     * @return string
     */
    public function getLabel();

    /**
     * Get master product.
     *
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * Set product.
     *
     * @param ProductInterface or null $product
     */
    public function setProduct(ProductInterface $product = null);

    /**
     * Returns all option values.
     *
     * @return Collection of OptionValueInterface
     */
    public function getOptions();

    /**
     * Sets all variant options.
     *
     * @param Collection $options
     */
    public function setOptions(Collection $options);

    /**
     * Counts all variant options.
     *
     * @return integer
     */
    public function countOptions();

    /**
     * Adds option value.
     *
     * @param OptionValueInterface $option
     */
    public function addOption(OptionValueInterface $option);

    /**
     * Removes option from variant.
     *
     * @param OptionValueInterface $option
     */
    public function removeOption(OptionValueInterface $option);

    /**
     * Checks whether variant has given option.
     *
     * @param OptionValueInterface $option
     *
     * @return Boolean
     */
    public function hasOption(OptionValueInterface $option);

    /**
     * Check whether the product is available.
     */
    public function isAvailable();

    /**
     * Return available on.
     *
     * @return \DateTime
     */
    public function getAvailableOn();

    /**
     * Set available on.
     *
     * @param \DateTime $availableOn
     */
    public function setAvailableOn(\DateTime $availableOn);

    /**
     * Make available now.
     */
    public function incrementAvailableOn();

    /**
     * Get creation time.
     *
     * @return DateTime
     */
    public function getCreatedAt();

    /**
     * Set creation time.
     *
     * @param DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Set creation time to now.
     */
    public function incrementCreatedAt();

    /**
     * Get the time of last update.
     *
     * @return DateTime
     */
    public function getUpdatedAt();

    /**
     * Set last time update.
     *
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt);

    /**
     * Set last update time to now.
     */
    public function incrementUpdatedAt();

    /**
     * Get the time of deletion.
     * Used for soft removal of variant.
     *
     * @return DateTime
     */
    public function getDeletedAt();

    /**
     * Set deletion time.
     *
     * @param DateTime $deletedAt
     */
    public function setDeletedAt(\DateTime $deletedAt);

    /**
     * Set deletion time to now.
     */
    public function incrementDeletedAt();
}
