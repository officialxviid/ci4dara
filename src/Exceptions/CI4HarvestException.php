<?php

namespace XVIID\CI4Harvest\Exceptions;

use Exception;

/**
 * CI4Harvest Exception
 * =======================
 * @package officialxviid/ci4harvest
 */
class CI4HarvestException extends Exception {
  /** 
   * ----------------------------------
   * Resource Does Not Exist
   * ----------------------------------
   * @param string $file
   */
  public function forResourceDoesNotExist(string $file){
    return new self(lang('CI4Harvest.fileDoesNotExist', [$file]), 404);
  }
  
  /** 
   * ----------------------------------
   * Unsupported Export Type
   * ----------------------------------
   * @param string $type
   */
  public function forUnsuppportedExportType(string $type){
    return new self(lang('CI4Harvest.unsupportedExportType', [$type]), 500);
  }
}
