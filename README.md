# PHP strpos() Loose Comparison Bug

This repository demonstrates a common, yet subtle, bug in PHP code involving the `strpos()` function and loose comparison.  The issue arises from the fact that `strpos()` returns `false` if the needle is not found, and `0` if it's found at the beginning of the haystack.  In a loose comparison (`==`), `false` is equivalent to `0`, leading to unexpected behavior.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides the corrected version.

## Bug Description
The code incorrectly uses a loose comparison (`==`) to check if a substring is found at the beginning of a string using `strpos()`. This leads to false positives when the substring exists, but not at the beginning.

## Solution
The solution uses strict comparison (`===`) to differentiate between `false` (not found) and `0` (found at the beginning).