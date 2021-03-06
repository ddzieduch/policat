<?php
/*
 * Copyright (c) 2016, webvariants GmbH <?php Co. KG, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

class myLoginForm extends sfGuardFormSignin {

  public function configure() {
    parent::configure();
    $this->disableLocalCSRFProtection();
    unset($this['remember']);

    $this->widgetSchema['username']->setLabel('E-mail address');
  }

}