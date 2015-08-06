<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures. Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * @package    TwentyFifteen25
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

require_once( 'inc/class-twentyfifteen25-google-fonts.php' );

/*
 * Turn on the lights
 * ... and bootstrap the theme
 */

require_once( 'class-twentyfifteen25.php' );
require_once( 'class-twentyfifteen25-assets.php' );

__p2c_after_setup_theme( new TwentyFifteen25() );
__p2c_after_setup_theme( new TwentyFifteen25_Assets() );