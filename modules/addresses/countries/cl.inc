<?php
// $Id: cl.inc,v 1.9 2008/11/17 16:01:57 alexiswilke Exp $

/**
 * @file
 * "Chile" specific data
 */

/**
 * Implementation of hook_province_list().
 *
 * Its a hook from Addresses module to list all
 * states/provinces/teritories of a given country
 *
 * @return
 *   Array. states where the keys are the state
 *   code and the value is the state name
 */
function addresses_province_list_cl() {
  return array(
    'AI' => t('Aisen del General Carlos Ibanez del Campo (XI)'),
    'AN' => t('Antofagasta (II)'),
    'AR' => t('Araucania (IX)'),
    'AT' => t('Atacama (III)'),
    'BI' => t('Bio-Bio (VIII)'),
    'CO' => t('Coquimbo (IV)'),
    'LI' => t("Libertador General Bernardo O'Higgins (VI)"),
    'LL' => t('Los Lagos (X)'),
    'MA' => t('Magallanes (XII)'),
    'ML' => t('Maule (VII)'),
    'RM' => t('Region Metropolitana (RM)'),
    'TA' => t('Tarapaca (I)'),
    'VS' => t('Valparaiso (V)')
  );
}
