<?php

/**
 * opCSV2ProfilePlugin actions.
 *
 * @package    OpenPNE
 * @subpackage opCSV2ProfilePlugin
 * @author     Your name here
 */
class opCSV2ProfilePluginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfWebRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
}
