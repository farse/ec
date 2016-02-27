<?php

/**
 * @file template.php
 */

function denise_bootstrap_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'teaser') {
  	$vars['theme_hook_suggestions'][] = 'node__teaser';
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->nid . '__teaser';
  }
}
