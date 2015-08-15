<?php
/**
 * (To women begging the king to spare their lives) "Ha-ha these humans are
 * definitely foolish creatures. Think as hard as those weak brains of
 * yours can manage. Do you humans ever listen to the cries of mercy coming
 * from pigs and cows you slaughter?" ~ Meruem | Hunter x Hunter
 *
 * @package    Genesis21
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2015, Thiago Senna
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

define( 'CHILD_THEME_NAME', 'Genesis21' );
define( 'CHILD_THEME_URL', 'https://github.com/trsenna/parent2child-blueprints' );

require_once( 'inc/class-genesis21-google-fonts.php' );

/*
 * Turn on the lights
 * ... and bootstrap the theme
 */

require_once( 'class-genesis21.php' );
require_once( 'class-genesis21-assets.php' );

Genesis21::bootstrap( array(
    new Genesis21(),
    new Genesis21_Assets(),
), 15 );