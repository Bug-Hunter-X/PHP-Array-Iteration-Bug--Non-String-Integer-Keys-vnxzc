# PHP Array Iteration Bug

This repository demonstrates a common error in PHP when iterating over arrays with mixed key types (e.g., strings and integers). The problem lies in how PHP handles comparisons involving these keys.  The provided code demonstrates the issue and the solution to resolve it.

## Bug Description

The `foreach` loop in `bug.php` attempts to use an integer key for comparison.  The strict comparison (`===`) will lead to unintended behavior.  The solution involves careful checking of the key type, or converting keys to a consistent type.