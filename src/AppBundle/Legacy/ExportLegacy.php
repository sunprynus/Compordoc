<?php

namespace AppBundle\Legacy;

use AppBundle\Entity\Application;

/**
 *
 * @author MMBARROSO
 */
interface ExportLegacy {

	public function export(Application $application, String $data);
}
