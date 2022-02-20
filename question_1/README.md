script -f -e -c./challenge_question_1.sh challenge_question_1.txt; fromdos < challenge_question_1.txt > tmp.txt; cat tmp.txt > challenge_question_1.txt; rm tmp.txt





# Desenhar escada
## Constraints and conditions
- `#!/usr/bin/php` at the code's begining is optional, depending on how you will test the code.
- `stairsize` variable must be an integer > 0
- to get better results, execute the system using a command line, where the stairs effect looks better.

## Tests

To run a loop of calls, I used a [bash script](challenge_question_1.sh).

To run that bash script and to produces its outputs [available here](challenge_question_1.txt), I used the following command sequence:
```
script -f -e -c./challenge_question_1.sh challenge_question_1.txt;
fromdos < challenge_question_1.txt > tmp.txt;
cat tmp.txt > challenge_question_1.txt;
rm tmp.txt
```
