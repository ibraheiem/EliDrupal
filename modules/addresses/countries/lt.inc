<?php
// $Id: lt.inc,v 1.9 2008/11/17 16:01:57 alexiswilke Exp $

/**
 * @file
 * "Lithuania" specific data
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
function addresses_province_list_lt() {
  return array(
    'AL' => t('Alytus'),
    'KA' => t('Kaunas'),
    'KL' => t('Klaipeda'),
    'MA' => t('Marijampole'),
    'PA' => t('Panevezys'),
    'SI' => t('Siauliai'),
    'TA' => t('Taurage'),
    'TE' => t('Telsiai'),
    'UT' => t('Utena'),
    'VI' => t('Vilnius')
  );
}
