<?php

namespace Mcarson24\ChuckNorrisJokes;

class JokeFactory
{
    public array $jokes = [
        "Chuck Norris' tears cure cancer. Too bad he has never cried.",
        "Chuck Norris does not sleep. He waits.",
        "Chuck Norris can kill two stones with one bird.",
        "Chuck Norris lost his virginity before his dad did.",
        "Chuck Norris can slam a revolving door."
    ];

    public function __construct($jokes = NULL) {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke() : string
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}