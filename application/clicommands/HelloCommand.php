<?php

/**
 * This is where we say hello
 *
 * The hello command allows us to be friendly to everyone
 * and his dog. That's how nice people behave!
 * Further calls from icingaweb2-moule-training:
 * $this->fail('Ein Fehler ist passiert');
 * echo $this->screen->colorize("Hello from $from!\n", 'lightblue');
 * clear() um den Bildschirm zu löschen (wird von --watch benutzt)
 * underline() um Text zu unterstreichen
 * newlines($count = 1) um einen oder mehrere Zeilenumbrüche auszugeben
 * strlen() um die Zeichenbreite ohne ANSI-Codes zu ermitteln
 * center($text) um Text abhängig von der Bildschirmbreite zentriert auszugeben
 * getRows() und getColumns() um wo möglich den verwendbaren Platz zu ermitteln
 * hasUtf8() um UTF8-Unterstützung des Terminals abzufragen
 */
namespace Icinga\Module\Studo\Clicommands;

use Icinga\Cli\Command;
use Icinga\Exception\ProgrammingError;

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

    /**
     * Say hello as someone
     *
     * Usage: icingacli studo hello from --from <SOMEONE>
     */
    public function fromAction()
    {
        $from = $this->params->shift('from', 'Nobody');
        //$from = $this->params->shift(null, 'Nowhere');
        //$from = $this->params->shift();
        //$from = $this->params->get('from', 'STUDO');
        echo "Hello from $from!\n";
    }

    /**
     * This action will always fail
     */
    public function kaputtAction()
    {
        throw new ProgrammingError('No way');
    }


}

