<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function dist(){

        $copyd = Array();
        $copyd['src'] = 'dist';

        $this->taskCleanDir('dist')->run();
        $this->taskCopyDir($copyd)->run();
    }

    public function start(){

        $this->taskServer(8080)->dir('exp')->run();

    }

}