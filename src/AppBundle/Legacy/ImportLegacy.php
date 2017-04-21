<?php

namespace AppBundle\Legacy;

use AppBundle\Entity\Application;

/**
 *
 * @author MMBARROSO
 */
interface ImportLegacy {

	public function import(Application $application);
}
