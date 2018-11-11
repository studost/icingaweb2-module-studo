<?php

/**
 * This is where we say hello
 *
 * The hello command allows us to be friendly to everyone
 * and his dog. That's how nice people behave!
 */
namespace Icinga\Module\Studo\Clicommands;

use Icinga\Cli\Command;

class HelloCommand extends Command
{
    /**
     * Use this to greet the world
     *
     * Greeting every single person would take some time,
     * so let's greet the whole world at once!
     */
    public function worldAction()
    {
        echo "Hello World!\n";
    }

    /**
     * Use this action to say something
     *
     * This is just a little test from studo 
     */
    public function somethingAction()
    {
        echo "I just wanted to say something!\n";
    }
}

