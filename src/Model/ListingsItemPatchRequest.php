<?php

namespace Amz\ListingsItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request body schema for the patchListingsItem operation.
 */
class ListingsItemPatchRequest extends AbstractModel
{
    /**
     * The Amazon product type of the listings item.
     *
     * @var string
     */
    public $productType = null;

    /**
     * One or more JSON Patch operations to perform on the listings item.
     *
     * @var \Amz\ListingsItems\Model\PatchOperation[]
     */
    public $patches = null;
}
