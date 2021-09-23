<?php

namespace Amz\ListingsItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Individual JSON Patch operation for an HTTP PATCH request.
 */
class PatchOperation extends AbstractModel
{
    /**
     * Type of JSON Patch operation. Supported JSON Patch operations include add,
     * replace, and delete. See <https://tools.ietf.org/html/rfc6902>.
     *
     * @var string
     */
    public $op = null;

    /**
     * JSON Pointer path of the element to patch. See
     * <https://tools.ietf.org/html/rfc6902>.
     *
     * @var string
     */
    public $path = null;

    /**
     * JSON value to add, replace, or delete.
     *
     * @var object[]|
     */
    public $value = null;
}
