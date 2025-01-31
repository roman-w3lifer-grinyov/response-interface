# [php-response-interface](https://packagist.org/packages/w3lifer/php-response-interface)

- [Installation](#installation)
- [Usage](#usage)
- [Tests](#tests)

## Installation

``` sh
composer require w3lifer/php-response-interface
```

## Usage

``` php
PhpResponseInterface::getFalseResponse(); // ['success' => false, 'errors' => []
PhpResponseInterface::getFalseResponse(['Some error']); // ['success' => false, 'errors' => ['Some error']]

PhpResponseInterface::getTrueResponse(); // ['success' => true, 'data' => []]
PhpResponseInterface::getTrueResponse(['Some data']); // ['success' => true, 'data' => ['Some data']]
```

## Tests

``` sh
make tests
```
