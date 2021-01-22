<?php 
	namespace VladMakushev\Controller;
    use function VladMakushev\View\showGame;
    
    function startGame() {
        echo "Game started".PHP_EOL;
        showGame();
    }
?>
