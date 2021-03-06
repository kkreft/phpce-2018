<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phpce\\tictactoe\\command' => '/Command.php',
                'phpce\\tictactoe\\event' => '/Event.php',
                'phpce\\tictactoe\\eventstore' => '/EventStore.php',
                'phpce\\tictactoe\\gamedrawnevent' => '/events/GameDrawnEvent.php',
                'phpce\\tictactoe\\gamestartedevent' => '/events/GameStartedEvent.php',
                'phpce\\tictactoe\\gamewonevent' => '/events/GameWonEvent.php',
                'phpce\\tictactoe\\placesymbolcommand' => '/commands/PlaceSymbolCommand.php',
                'phpce\\tictactoe\\startgamecommand' => '/commands/StartGameCommand.php',
                'phpce\\tictactoe\\symbolplacedevent' => '/events/SymbolPlacedEvent.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
