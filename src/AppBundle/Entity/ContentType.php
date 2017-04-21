<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of ContentType
 *
 * @author MMBARROSO
 *
 * @ORM\Entity
 */
class ContentType {

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $name;

}
