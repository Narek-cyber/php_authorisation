<?php

namespace DB\Builder;

use DB\Connection;

class Builder extends Connection
{
    use Helper;

    protected $table = '';
    protected $query = '';

    protected $toArray = false;
    protected $isOrAnd = false;

    protected $values = [];

    protected $select = false;
    protected $insert = false;
    protected $update = false;
    protected $delete = false;

    protected function runQuery()
    {
        $query = '';

        switch (true) {
            case $this->select:
                $query = "SELECT * FROM `$this->table` {$this->selectDetails($this->isOrAnd)}";
                break;
            case $this->insert:
                $query = "INSERT INTO `{$this->table}` ({$this->insertValues()}) VALUES ({$this->insertColumns()}) ";
                break;
            case $this->update:
                $updateValues = array_diff($this->updateDetails(), ['`id` = :id']);

                $query = "UPDATE `{$this->table}` SET ".implode(', ', $updateValues)." WHERE id = :id";
                break;
            case $this->delete:
                $query = "DELETE FROM $this->table WHERE id = :id";
        }

        $query .= $this->query;

        return parent::init()
            ->run(
                $query,
                $this->values,
                $this->toArray,
                $this->select,
                $this->insert,
                $this->update
            );
    }
}