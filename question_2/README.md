# Helping Débora with her password
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `password` variable must respect the required constraints and be filled, in the source code, to make tests.
  -`Warning:` this challenge, in my opinion, needs a little more information to help the developer.
    - `Concern 1`: it is not required to make any kind of password string sanitization, to assure that constraints.
    - `Problem 1`: if that checks are made to assure constraints, it is not possible to alert the user.
    - `Reason 1`: the required output to user is just to tell her that minimum # of passwords char is not enough.
## Tests

As this is a much more simple program, tests were made just changing the password string and checking the results.

## Additions

To show a little more about my code, I provided a second version [`available here`](challenge_question_2_extra.php).

This version can be executed using this format: `./challenge_question_2_extra.php <passwordhere>`

This version can be used to do more tests and to show more results.

This extra version helped me during the development process.
