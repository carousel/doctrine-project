<?php
use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository{

    public function getMessages(){
            $dql = "SELECT m FROM Message m where m.id > 1";
            $query = $this->getEntityManager()->createQuery($dql);
            return $query->getResult();
    }
}
