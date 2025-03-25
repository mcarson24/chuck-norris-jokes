<?php

namespace Mcarson24\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Mcarson24\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    public function test_it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke.'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke.', $joke);
    }

    /** @test */
    public function test_it_still_returns_a_joke_even_when_no_jokes_are_passed()
    {
        $jokes = new JokeFactory();

        $joke= $jokes->getRandomJoke();

        $this->assertNotNull($joke);
    }

    /** @test */
    public function test_it_returns_a_predefined_joke() {
        $testJokes = [
            "Chuck Norris can strangle you with a cordless phone.",
            "The flu has to get Chuck Norris shots every year.",
            "When Chuck Norris turned 18, his parents moved out."
        ];

        $jokes = new JokeFactory($testJokes);

        $this->assertContains($jokes->getRandomJoke(), $testJokes);
    }
}