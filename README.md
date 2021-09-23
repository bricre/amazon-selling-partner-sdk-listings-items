# (Unofficial) Amazon Selling Partner API client (PHP) - Selling Partner API for Listings Items

Code generated from Amazon's Swagger file
using [allansun/openapi-code-generator](https://github.com/allansun/openapi-code-generator).

Generated code is well self-documented with proper PHPDoc annotations.

Please refer to [Amazon's documentation](https://github.com/amzn/selling-partner-api-docs) for detailed API behaviour
explanation.

## Installation

```shell
composer require bricre/amazon-selling-partner-sdk-listings-items
```

You will also need a [PSR-7 based client](https://www.php-fig.org/psr/psr-7/)
or [Symfony's HTTP Foundation based client](https://symfony.com/doc/current/http_client.html)

So either use Guzzle (or any other PSR-7 compatible clients)

```shell
composer require guzzlehttp/guzzle
```

**or** Symfony HTTP Client

```shell
composer require symfony/http-client
```

## Versioning

This project matches Amazon's API versioning.

Due to the [restriction of Composer](https://getcomposer.org/doc/articles/versions.md), version number like
'2021-01-01' will be changed to '2021.01.01'.

Should you found a matching version not being available. Please contact the author to generate against correct version.

## Usage

First you need to
configure [OpenAPI\RunTime\Client](https://github.com/allansun/openapi-runtime/blob/master/src/Client.php)
with required credentials and predefined responses types. You only need to do this once (or create a service in your
dependency injection).

You may also want to check out Amazon's document
about [how to authorize your request](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#authorizing-selling-partner-api-applications)

```php
<?php
use Amz\ListingsItems\ResponseTypes;
use OpenAPI\Runtime\Client;
use OpenAPI\Runtime\SimplePsrResponseHandlerStack;

Client::configure(
    new \GuzzleHttp\Client([
        'base_uri' => 'https://sellingpartnerapi-na.amazon.com/',
        'headers'=>[
            'Authorization'=> 'Bearer <accessToken>'
        ]
    ]),
    new SimplePsrResponseHandlerStack(new ResponseTypes())
);

```

Then in your business logic you can call API operations directly

```php
<?php
use Amz\AplusContent\Api\AplusContent;
use Ebay\Sell\Account\Api\Program;

$api = new AplusContent();

$docs = $api->searchContentDocuments(['marketplaceId'=>'xxxxxx']);

```

## Author

* [Allan Sun](https://github.com/allansun) - *Initial work*
