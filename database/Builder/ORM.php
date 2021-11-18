<?php

namespace DB\Builder;

class ORM extends Builder
{
    public function __construct($className)
    {
        parent::__construct();
        $this->table = strtolower(preg_replace('/\B([A-Z])/', '_$1', $className)) . 's';
    }

    public static function query()
    {
        $str = get_called_class();
        $pieces = preg_split('/\\\\+/', $str);
        return new self (end($pieces));
    }

    public function where($values)
    {
        $this->values = $values;
        $this->isOrAnd = true;
        $this->select = true;
        return $this;
    }

    public function orwhere($values)
    {
        $this->values = $values;
        $this->isOrAnd = false;
        $this->select = true;
        return $this;
    }

    public function insert($values)
    {
        $this->values = $values;
        $this->insert = true;
        return $this->runQuery();
    }

    public function update($values, $id)
    {
        $this->values = $values;
        $this->values['id'] = $id;
        $this->update = true;
        return $this->runQuery();
    }

    public function delete($id)
    {
        $this->values['id'] = $id;
        $this->delete = true;
        return $this->runQuery();
    }

    public function first()
    {
        $this->toArray = false;
        return $this->runQuery();
    }

    public function get()
    {
        $this->toArray = true;
        return $this->runQuery();
    }

    public function find($id)
    {
        $this->toArray = false;
        $this->select = true;
        $this->values = ['id' => $id];
        return $this->runQuery();
    }
}
