<?php

namespace Amz\ListingsItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An issue with a listings item.
 */
class Issue extends AbstractModel
{
    /**
     * An issue code that identifies the type of issue.
     *
     * @var string
     */
    public $code = null;

    /**
     * A message that describes the issue.
     *
     * @var string
     */
    public $message = null;

    /**
     * The severity of the issue.
     *
     * @var string
     */
    public $severity = null;

    /**
     * Name of the attribute associated with the issue, if applicable.
     *
     * @var string
     */
    public $attributeName = null;
}
