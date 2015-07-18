<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures. Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * @package    Kuorinka34
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

require_once( 'inc/class-kuorinka34-google-fonts.php' );

/*
 * Turn on the lights
 * ... and bootstrap the theme
 */

require_once( 'class-kuorinka34.php' );
require_once( 'class-kuorinka34-assets.php' );

Kuorinka34::bootstrap( array(
    new Kuorinka34(),
    new Kuorinka34_Assets(),
) );