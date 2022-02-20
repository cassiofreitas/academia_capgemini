# Helping Débora with her password
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `password` variable must respect the required constraints.
  - `Warning:` this challenge, in my opinion, needs a little more information to help the developer.
     - `Concern 1`: it is not required to make any kind of password string sanitization, to assure that constraints.
     - `Problem 1`: if that checks are made to assure constraints, it is not possible to alert the user.
     - `Reason 1`: the required output to the user is restricted to tell her that minimum # of passwords char is required.

## Tests

As this is a much more simple program, tests were made just changing the password string and checking the result.

As I alerted before, at **Constraints and conditions**, tests were limited to check the password string length.

## Additions

To show a little more about my code, I provided a second version [`available here`](challenge_question_2_extra.php).

This extra version can be executed directly, like `./challenge_question_2_extra.php <somepasswordhere>`
- `Warning 1`: this test must be done in a compatible environment [`see here`](/README.md)
- `Warning 2`: as it is a command line, using bash, special attention is required to user special chars.

This version can be used to do more tests and to show more results.

If you check this code you will see some REGEX tests, some parameters sanitization and even more information to the user.

This extra version helped me during the development process.

