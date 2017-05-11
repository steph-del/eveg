<?php

namespace eveg\PsiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use eveg\PsiBundle\Model\Node as NodeModel;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="psi_node")
 */
class Node extends NodeModel
{

}