<?php
/**
 * Category: Wishusucess_ProductImageApi
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\ProductImageApi\Api;
interface GetProductImage {
    /**
     * @api
     * @param string $sku
     * @return array
     */
    public function getProductImageUrl($sku);
}