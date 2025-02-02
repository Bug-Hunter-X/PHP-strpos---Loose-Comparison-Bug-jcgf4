The solution uses strict comparison (`===`) to avoid the type juggling issue.

```php
<?php
$haystack = "This is a test string";
$needle = "test";
if (strpos($haystack, $needle) === 0) {
    echo "Needle found at the beginning";
} else {
    echo "Needle not found at the beginning";
}

$haystack = "This is a test string";
$needle = "string";
if (strpos($haystack, $needle) === 0) {
    echo "Needle found at the beginning";
} else {
    echo "Needle not found at the beginning";
}
?>
```
By using strict comparison (`===`), we ensure that the code only evaluates to true when the needle is actually found at the very beginning of the haystack.