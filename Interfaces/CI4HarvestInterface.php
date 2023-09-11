<?php

namespace XVIID\CI4Harvest\Interfaces;

/**
 * CI4Harvest Interface
 * =======================
 * @package officialxviid/ci4harvest
 */
interface CI4HarvestInterface
{
  /** 
   * ----------------------------------
   * Export
   * ----------------------------------
   */
  public function export();
  
  /** 
   * ----------------------------------
   * Get Resource
   * ----------------------------------
   * @param string $resource
   * @param string $format "array" or "object"
   */
  public function getResource(string $resource, string $format = "array");
}
