for size in $(seq 0 11)
do
	echo "Running challenge_question_1.php ${size} returns:";
	./challenge_question_1.php ${size}
	echo "----------------------------------------";
done
