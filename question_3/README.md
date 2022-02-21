# Anagramas pares 
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `sourcestr` variable must respect the required constraints and be manually filled to make tests.
  - `Warning:` this challenge, in my opinion, needs a check at the examples results and explanations.
     - `Example 1`: input: ```ovo```; output: ```3```; explanation: ```[o, o], [ov, vo]``` at ```[[0, 2], [0, 1], [1, 2]]```.
     - `Example 2`: input: ```ifailuhkqq```; output: ```3```; explanation: ```[i, i], [q, q] [ifa, fai]``` at ```[[0, 3]],[[8, 9]] e [[0, 1, 2], [1, 2, 3]]```.
     - `Problem 1`: the both ouput are 3, but the two groups of anagram pairs  
     - `Reason 1`: the required output to the user is restricted to tell her that minimum # of passwords char is required.

## Tests

As this is a much more simple program, tests were made just changing the password string and checking the result.

As I alerted before, at **Constraints and conditions**, tests were limited to check the password string length.

## Additions

To show a little more about my code, I provided a second version [`available here`](challenge_question_2_extra.php).

This extra version can be executed directly, like `./challenge_question_2_extra.php <somepasswordhere>`
- `Warning 1`: this test must be done in a compatible environment [`see here`](/README.md).
- `Warning 2`: as it is a command line, using bash, special attention is required to user special chars.

This version can be used to do more tests and to show more results.

If you check this code you will see some REGEX tests, some parameters sanitization and even more information to the user.

This extra version helped me during the development process.
