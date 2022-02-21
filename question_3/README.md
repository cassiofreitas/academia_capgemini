# Pairs of anagrams 
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `sourcestr` variable must respect the required constraints and be manually filled to make tests.
  - `Warning:` this challenge, in my opinion, needs a check at the examples results and explanations.
     - `Example 1`: input: ```ovo```; output: ```3```; explanation: ```[o, o], [ov, vo]``` at ```[[0, 2], [0, 1], [1, 2]]```.
     - `Example 2`: input: ```ifailuhkqq```; output: ```3```; explanation: ```[i, i], [q, q] [ifa, fai]``` at ```[[0, 3]],[[8, 9]] e [[0, 1, 2], [1, 2, 3]]```.
     - `Problem 1`: the both outputs are 3, but the two groups of anagram pairs don't make sense if we analyse them and the outputs together.
     - `Reason 1`: my code is printing 2 for the first example and 3 for the second one.
     - `Reason 2`: if the code is adjusted to return 3 to the first string, it must return 4 to the second one.

## Tests

As this is a much more simple program, tests were made just changing the initial string and checking the results.

As I alerted before, at **Constraints and conditions**, I didn't figure it out, when I analysed inputs and outputs.

My conclusions are different from the provided examples.

As an example of my conclusions about inputs and outputs in this challenge, take a look at following results, using a little different string than the one used in the challenge example:

```sh
./challenge_question_3_extra.php ifailuhkqrq
```
```php
Array
(
    [0] => 0,3
    [1] => 0-2
    [2] => 1-3
    [3] => 8,10
    [4] => 8-9
    [5] => 9-10
)
[0,3] => [i,i]
[0,2] => [i,f,a]
[1,3] => [f,a,i]
[8,10] => [q,q]
[8,9] => [q,r]
[9,10] => [r,q]

4
```

## Additions

To show a little more about my code, I provided a second version [`available here`](challenge_question_3_extra.php).

This extra version can be executed directly, like `./challenge_question_3_extra.php <stringhere>`
- `Warning 1`: this test must be done in a compatible environment [`see here`](/README.md).

This version can be used to do more tests and to show more results.

If you check this code you will see some parameters sanitization and even more information to the user.

This extra version helped me during the development process.
