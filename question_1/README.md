# Desenhar escada com `*`
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `stairsize` variable must be an integer > 0
- to get better results, execute the system using a command line, where the stairs effect looks better.

## Tests

To run a loop of calls, I used a bash script [`available here`](challenge_question_1.sh).

To run that bash script and to produces its outputs [`available here`](challenge_question_1.txt), I used the following command sequence:
```
script -f -e -c./challenge_question_1.sh challenge_question_1.txt;
fromdos < challenge_question_1.txt > tmp.txt;
cat tmp.txt > challenge_question_1.txt;
rm tmp.txt
```
## Additions

To show a little more about my code, I provided a second version [`available here`](challenge_question_1_extra.php).

This version can be executed using this format: `./challenge_question_1.php <stairsizeher>`

This version can be used to do more tests and to show more results.

This extra version helped me during the development process.
