<?php
namespace DB\Builder;

trait Helper
{
    protected $setPart = [];

    private function filterNumberKeys($collections)
    {
        foreach($collections as $k=>$v) {
            foreach($v as $k1=>$v1) {
                if (is_numeric($k1)) {
                    unset($collections[$k][$k1]);
                }
            }
        }

        return $collections;
    }

    private function insertColumns()
    {
        $str = "";

        foreach ($this->values as $key => $value) {
            $str .= $key == array_key_last($this->values) ? ":$key" : ":$key, ";
        }

        return $str;
    }

    private function insertValues()
    {
        return implode(', ',array_keys($this->values));
    }

    private function selectDetails($isOrAnd = false)
    {
        $query = '';
        foreach ($this->values as $column => $value) {
            if ($column == array_key_first($this->values)) {
                $query .= "WHERE $column = :$column ";
            } else if ($isOrAnd === true){
                $query .= "AND $column = :$column ";
            } else {
                $query .= "OR $column = :$column ";
            }
        }
        return $query;
    }

    private function updateDetails()
    {
        foreach ($this->values as $column => $value)
        {
            $this->setPart[] = "`{$column}` = :{$column}";
        }
        return $this->setPart;
    }
}