<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/** @noinspection MoreThanThreeArgumentsInspection
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 *
 * @method find($id, $lockMode = null, $lockVersion = null) \AppBundle\Entity\User|null
 * @method findAll() \AppBundle\Entity\User[]
 * @method findOneBy(array $criteria, array $orderBy = null) \AppBundle\Entity\User|null
 * @method findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) \AppBundle\Entity\User[]
 * @method findOneByEmail($email) \AppBundle\Entity\User|null
 * @method findOneByUsername($username) \AppBundle\Entity\User|null
 */
class UserRepository extends EntityRepository
{
    /**
     * @param $socialType
     * @param $socialId
     *
     * @return \AppBundle\Entity\User|null
     */
    public function findOneBySocialId($socialType, $socialId)
    {
        return $this->findOneBy([
            'socialType' => $socialType,
            'socialId'   => $socialId,
        ]);
    }
}
