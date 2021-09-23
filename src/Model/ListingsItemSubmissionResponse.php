<?php

namespace Amz\ListingsItems\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response containing the results of a submission to the Selling Partner API for
 * Listings Items.
 */
class ListingsItemSubmissionResponse extends AbstractModel
{
    /**
     * A selling partner provided identifier for an Amazon listing.
     *
     * @var string
     */
    public $sku = null;

    /**
     * The status of the listings item submission.
     *
     * @var string
     */
    public $status = null;

    /**
     * The unique identifier of the listings item submission.
     *
     * @var string
     */
    public $submissionId = null;

    /**
     * Listings item issues related to the listings item submission.
     *
     * @var \Amz\ListingsItems\Model\Issue[]
     */
    public $issues = null;
}
