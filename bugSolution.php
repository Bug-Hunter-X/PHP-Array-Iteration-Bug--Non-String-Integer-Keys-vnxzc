The solution involves explicitly checking the data type of the key before performing comparisons:

```php
<?php
$data = [
    'a' => 1,
    'b' => 2,
    10 => 3,
];

foreach ($data as $key => $value) {
    if (is_string($key) && $key === 'b') {
        echo "Key is: " . $key . " Value is: " . $value . "\n";
    }
    if (is_int($key) && $key === 10) {
        echo "Key is: " . $key . " Value is: " . $value . "\n";
    }
}
?>
```

Alternatively, type casting can be used to ensure consistent comparison:

```php
foreach ($data as $key => $value) {
    if ((string)$key === 'b') {
        echo "Key is: " . $key . " Value is: " . $value . "\n";
    }
    if ((int)$key === 10) {
        echo "Key is: " . $key . " Value is: " . $value . "\n";
    }
}
```
This ensures that comparisons always work as expected regardless of the key type.