# Uncommon PHP Bug: Unexpected Behavior of `continue` in Nested Loops

This repository demonstrates a potential issue with the `continue` statement in PHP, particularly within nested loops.  Improper usage can result in unexpected loop behavior, including infinite loops or skipped iterations, leading to incorrect results.  The provided code examples illustrate this issue and a possible solution.

## Description:

The `continue` statement in PHP immediately jumps to the next iteration of the current loop, skipping any remaining code within that iteration. While this is generally a useful feature, it can cause problems if not used carefully, especially when dealing with multiple nested loops or complex logic.

## Bug:

The primary issue arises when `continue` is used in conjunction with nested loops and internal loop counters.  Accidental mis-management of variables during the `continue` action can lead to unexpected consequences.  The 'bug.php' file showcases a scenario where an error in the counter's logic results in an infinite loop.

## Solution:

The 'bugSolution.php' file provides a corrected version that ensures proper counter management even when the `continue` statement is executed. This solution carefully avoids unexpected loop behaviors and provides the expected outputs.

## How to Run:

1. Clone the repository.
2. Navigate to the project directory.
3. Run the PHP files using a PHP interpreter (e.g., `php bug.php`, `php bugSolution.php`).