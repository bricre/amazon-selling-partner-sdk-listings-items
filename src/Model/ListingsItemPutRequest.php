<?php

namespace Amz\ListingsItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request body schema for the putListingsItem operation.
 */
class ListingsItemPutRequest extends AbstractModel
{
    /**
     * The Amazon product type of the listings item.
     *
     * @var string
     */
    public $productType = null;

    /**
     * The name of the requirements set for the provided data.
     *
     * @var string
     */
    public $requirements = null;

    /**
     * JSON object containing structured listings item attribute data keyed by
     * attribute name.
     *
     * @var object
     */
    public $attributes = null;
}
