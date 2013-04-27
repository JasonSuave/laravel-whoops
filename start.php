<?php

/*
|--------------------------------------------------------------------------
| Custom Error handling with Whoops
|--------------------------------------------------------------------------
|
| Whoops by Filipe Dobreira
| https://github.com/filp/whoops
|
| Laravel 3 Integration by Hugo Dias
| https://gist.github.com/hdias/5169713#file-start-php
*/

require path('base').DS.'vendor'.DS.'autoload.php';

if (!IoC::registered('whoops')) {
	IoC::singleton('whoops', function ($from = true) {
			$run = new Whoops\Run;
			$handler = new Whoops\Handler\PrettyPageHandler;
			$run->pushHandler($handler);

			// Example: tag all frames with a comment
			// Hint: Frames are the code preview for each stack row
//			$run->pushHandler(function ($exception, $inspector, $run) {
//					$frames = $inspector->getFrames();
//					foreach ($frames as $i => $frame) {
//						$frame->addComment('This is frame number ' . $i, 'example');
//
//						if ($function = $frame->getFunction()) {
//							$frame->addComment("This frame is within function '$function'", 'cpt-obvious');
//						}
//					}
//				}
//			);

			$run->register();

			return $run;
		}
	);
}

//if (Config::get('error.detail')){
$damnit = IoC::resolve('whoops');
//}