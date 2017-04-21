<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Scheme
 *
 * @author MMBARROSO
 *
 * @ORM\Entity
 */
class Scheme {

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
