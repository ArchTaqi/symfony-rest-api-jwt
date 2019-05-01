<?php declare(strict_types=1);

namespace App\Serializer;

use Symfony\Component\Routing\RouterInterface;
use App\Entity\User;

/**
 * Class CircularReferenceHandler
 * @package App\Serializer
 */
class CircularReferenceHandler
{

# config/packages/framework.yaml
# framework::
#    circular_reference_handler: App\Serializer\CircularReferenceHandler;
#    enabled: true

    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function __invoke($object)
    {
        // TODO: Implement __invoke() method.

        switch ($object){
            case $object instanceOf User:
                return $this->router->generate('get_user_list', ['user_id' => $object->getId()]);
        }

        return $object->getId();
    }
}