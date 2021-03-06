<?php
// $Id: sn.inc,v 1.9 2008/11/17 16:01:57 alexiswilke Exp $

/**
 * @file
 * "Senegal" specific data
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
function addresses_province_list_sn() {
  return array(
    'DA' => t('Dakar'),
    'DI' => t('Diourbel'),
    'FA' => t('Fatick'),
    'KA' => t('Kaolack'),
    'KO' => t('Kolda'),
    'LO' => t('Louga'),
    'MA' => t('Matam'),
    'SL' => t('Saint-Louis'),
    'TA' => t('Tambacounda'),
    'TH' => t('Thies'),
    'ZI' => t('Ziguinchor')
  );
}
