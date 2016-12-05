<?php

/**
 * Class SerbianNameGenerator
 */
class SerbianNameGenerator {

  private $_prefixes = [
    'ljubo',
    'drago',
    'mio',
    'slavo',
    'bozi',
    'bogo',
    'stani',
    'brani',
    'budi',
    'beri',
    'blago',
    'brati',
    'veli',
    'vlasti',
    'voji',
    'desi',
    'zivo',
    'mili'
  ];

  private $_suffixes = [
    'mir',
    'slav',
    'ljub',
    'dar',
    'sav',
    'voj',
    'slava',
    'jlo',
    'rad',
    'borka',
    'vojka',
    'jin',
  ];

  /**
   * @return array
   */
  public function getPrefixes() {
    return $this->_prefixes;
  }

  /**
   * @return array
   */
  public function getSuffixes() {
    return $this->_suffixes;
  }

  public function generate() {
    $rval = [];

    foreach($this->_prefixes as $prefix) {
      foreach($this->_suffixes as $suffix) {
        $rval[] = ucfirst($prefix . $suffix);;
      }
    }

    sort($rval);

    return $rval;
  }

}