<?php

require_once('i18next.php');

function t($key, $variables = array()) {

	return i18next::getInstance('en')->getTranslation($key, $variables);

}

echo 'common.dog -> ' . t('common.dog');

echo '<br>';

echo 'common.cat { count: 1 } -> ' . t('common.cat', array('count' => 1));

echo '<br>';

echo 'common.cat { count: 2 } -> ' . t('common.cat', array('count' => 2));

echo '<br>';

echo 'common.cat { count: 2, lng: fi } -> ' . t('common.cat', array('count' => 2, 'lng' => 'fi'));