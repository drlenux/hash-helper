# Hash Helper

**Hash Helper** is a versatile PHP library designed for generating hash values from various types of data. It provides a simple yet flexible interface to work with different data types, including strings, arrays, and objects.

## Installation

```shell
composer req drlenux/hash-helper
```

## Usage

### General Usage

The **MixedHashHelper** class can be used to handle various types of data, providing a convenient way to generate hashes for complex or mixed data types.

```php
<?php

use Drlenux\HashHelper\hash\MixedHashHelper;

$helper = new MixedHashHelper();
$data = ...; // Your big data
$hash = $helper->run($data);

var_dump([
    'hash' => [
        'string' => $hash->toString(), // Serializer + MD5 hash
        'integer' => $hash->toInt()    // Convert string hash to integer
    ]
]);

```

### Using Specific Hash Helper Classes

For more specific use cases, you can directly use the classes **StringHashHelper**, **ArrayHashHelper**, and **ObjectHashHelper**.

```php
<?php

require_once 'path/to/HashHelper/autoload.php'; // Adjust the path as necessary

use Drlenux\HashHelper\hash\ArrayHashHelper;
use Drlenux\HashHelper\hash\ObjectHashHelper;
use Drlenux\HashHelper\hash\StringHashHelper;

$stringHelper = new StringHashHelper();
$arrayHelper = new ArrayHashHelper();
$objectHelper = new ObjectHashHelper();

$stringHash = $stringHelper->run('only string');
$arrayHash = $arrayHelper->run(['only' => 'array']);
$objectHash = $objectHelper->run((object) ['only' => 'object']);

// Output the hashes
var_dump($stringHash, $arrayHash, $objectHash);

```

## Features

- **Flexible Hashing:** Supports various data types including strings, arrays, and objects.
- **Multiple Hash Helpers:** Specific classes for different data types allow for customized hashing approaches.
- **Easy to Integrate:** Simple interface to integrate with existing PHP projects.

## License

This project is licensed MIT. For more details, see the [LICENSE](./LICENSE) file included with the source code.