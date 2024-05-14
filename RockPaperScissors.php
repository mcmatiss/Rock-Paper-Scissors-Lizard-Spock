<?php
$possibleChoices = [
    "rock" => ["lizard", "spock"],
    "paper" => ["rock", "scissors"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["spock", "paper"],
    "spock" => ["scissors", "rock"],
];

do {
    $player = readline("Rock, Paper, Scissors, Lizard or Spock? ");
    if (!array_key_exists(strtolower($player), $possibleChoices)) {
        echo "\nInvalid input!\n";
    }
} while (!array_key_exists(strtolower($player), $possibleChoices));

$computer = array_rand($possibleChoices);
if (strtolower($player) === $computer) {
    echo "Computer choice: $computer\nIt is a tie!\n";
} elseif (in_array(strtolower($player), $possibleChoices[$computer])) {
    echo "Computer choice: $computer\nComputer wins!\n";
} else {
    echo "Computer choice: $computer\nCongratulations you win!\n";
}