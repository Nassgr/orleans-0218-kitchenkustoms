<?php
/**
 * Created by PhpStorm.
 * User: wilder16
 * Date: 10/04/18
 * Time: 17:34
 */

namespace Model;

class BikeManager extends AbstractManager
{
    const TABLE = 'bike';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    public function addBike(Bike $bike)
    {
        $name = $bike->getName();
        $description = $bike->getDescription();

        if ($name === "" || $name === null) {
            throw new \LogicException('Le nom du vélo ne peut être null ou vide.');
        }

        $query = 'INSERT INTO ' . $this->table . ' (name, description) VALUES (:name, :description)';
        $prepare = $this->pdoConnection->prepare($query);

        $prepare->bindValue('name', $name, \PDO::PARAM_STR);
        $prepare->bindValue('description', $description);

        $prepare->execute();
    }
}
