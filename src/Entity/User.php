<?php declare(strict_types=1);


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\Column(name="_img_url",type="string",length=200,nullable=true)
     */
    private $_imgUrl;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getImgUrl()
    {
        return $this->_imgUrl;
    }

    /**
     * @param mixed $imgUrl
     */
    public function setImgUrl($imgUrl): void
    {
        $this->_imgUrl = $imgUrl;
    }

    public function __construct()
    {
        parent::__construct();
    }
}
