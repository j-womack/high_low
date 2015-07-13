<?php  

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your name? ');

// Get the input from user
$name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello, $name" . PHP_EOL . "See if you can guess the number I've chosen " . PHP_EOL);

do {
    fwrite(STDOUT, 'What is the upper bound? ');
    $toplimit = trim(fgets(STDIN));
    $random = mt_rand(1, $toplimit);
    echo "between 1 and $toplimit ..." . PHP_EOL;
    do {
        fwrite(STDOUT, 'Guess? ');
        $guess = fgets(STDIN);
        if ($guess != $random){
            if ($guess < $random){
                echo "Higher..." . PHP_EOL;
            }
            if ($guess > $random){
                echo "Lower..." . PHP_EOL;
            }
        } else {
            echo "That's it!" . PHP_EOL;
            fwrite(STDOUT, 'Play again? (y/n) ');
            $restart = trim(fgets(STDIN));
            if ($restart == 'y'){
                $restart = true;
            } else if ($restart == 'n') {
                $restart = false;
            }
        }
    } while ($guess != $random);
} while ($restart == true);





// The specs for the game are:

// game picks a random number between 1 and 100.
// prompts user to guess the number
// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"
// Hints:

// Using conditionals and loops here is important
// Random numbers can be made with the internal rand() function
// If user is right, tell them they won
// While they are wrong, give them hints and keep asking
// Use exit(0) to end the game
// If you get stuck in game, ctrl-c will exit.

?>



