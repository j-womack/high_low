<?php  

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your name? ');

// Get the input from user
$name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello, $name" . PHP_EOL . "See if you can guess the number I'll choose..." . PHP_EOL);

// Game iteration
do {
    $guessNumber = 1;

    // Prompt user to input upper bound
    fwrite(STDOUT, 'What is the upper bound? ');
    $toplimit = trim(fgets(STDIN));

    // Selects random number within the range
    $random = mt_rand(1, $toplimit);
    echo "between 1 and $toplimit ..." . PHP_EOL;

    // Runs the loop for user guess input
    do {

        // Guess input prompt
        fwrite(STDOUT, 'Guess? ');
        $guess = fgets(STDIN);

        // Evaluates guess and if incorrect lets you know 
        // if you are too high or too low. 
        if ($guess != $random){

            // Increments the amount of guesses made for
            // display at the end of the round.
            $guessNumber++;

            if ($guess < $random){
                echo "Higher..." . PHP_EOL;
            }
            if ($guess > $random){
                echo "Lower..." . PHP_EOL;
            }
        } else {

            // Winning condition
            echo "That's it!" . PHP_EOL;
            echo "You got it in $guessNumber guesses." . PHP_EOL;
            
            // Prompts to restart
            fwrite(STDOUT, 'Play again? (y/n) ');
            $restart = trim(fgets(STDIN));

            // Converts user input to boolean
            if ($restart == 'y'){
                $restart = true;
            } else if ($restart == 'n') {
                $restart = false;
            }
        }
    } while ($guess != $random);
} while ($restart);

echo "See ya" . PHP_EOL;

?>