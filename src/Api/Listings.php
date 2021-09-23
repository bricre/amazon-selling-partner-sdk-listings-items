<?php

namespace Amz\ListingsItems\Api;

use Amz\ListingsItems\Model\ErrorList as ErrorList;
use Amz\ListingsItems\Model\ListingsItemPatchRequest as ListingsItemPatchRequest;
use Amz\ListingsItems\Model\ListingsItemPutRequest as ListingsItemPutRequest;
use Amz\ListingsItems\Model\ListingsItemSubmissionResponse as ListingsItemSubmissionResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Listings extends AbstractAPI
{
    /**
     * Creates a new or fully-updates an existing listings item for a selling partner.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @param $sellerId A selling partner identifier, such as a merchant account or
     * vendor code
     * @param $sku A selling partner provided identifier for an Amazon listing
     * @param ListingsItemPutRequest $Model Creates a new or fully-updates an existing
     *                                      listings item for a selling partner.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @return ListingsItemSubmissionResponse|ErrorList
     */
    public function putItem($sellerId, $sku, ListingsItemPutRequest $Model)
    {
        return $this->client->request('putListingsItem', 'PUT', "listings/2020-09-01/items/{$sellerId}/{$sku}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Delete a listings item for a selling partner.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @param $sellerId A selling partner identifier, such as a merchant account or
     * vendor code
     * @param $sku A selling partner provided identifier for an Amazon listing
     *
     * @return ListingsItemSubmissionResponse|ErrorList
     */
    public function deleteItem($sellerId, $sku)
    {
        return $this->client->request('deleteListingsItem', 'DELETE', "listings/2020-09-01/items/{$sellerId}/{$sku}",
            [
            ]
        );
    }

    /**
     * Partially update (patch) a listings item for a selling partner. Only top-level
     * listings item attributes can be patched. Patching nested attributes is not
     * supported.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @param $sellerId A selling partner identifier, such as a merchant account or
     * vendor code
     * @param $sku A selling partner provided identifier for an Amazon listing
     * @param ListingsItemPatchRequest $Model Partially update (patch) a listings item
     *                                        for a selling partner. Only top-level listings item attributes can be patched.
     *                                        Patching nested attributes is not supported.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 5 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see [Usage Plans and Rate Limits in the Selling Partner
     * API](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/usage-plans-rate-limits/Usage-Plans-and-Rate-Limits.md).
     *
     * @return ListingsItemSubmissionResponse|ErrorList
     */
    public function patchItem($sellerId, $sku, ListingsItemPatchRequest $Model)
    {
        return $this->client->request('patchListingsItem', 'PATCH', "listings/2020-09-01/items/{$sellerId}/{$sku}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
