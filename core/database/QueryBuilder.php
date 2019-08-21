<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            //echo 'erro ao cadastrar';
            die($e->getMessage());
        }
    }

    public function selectWhere($tabela, $campos = null)
    {
        $query = "select * from {$tabela}";
        $query .= ($campos) ? " where " . implode(' = ', $campos) : "";
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function update($tabela, $dados, $where)
    {
        $dados = (array)$dados;
        $campos = '';
        foreach ($dados as $key => $valor) {
            $campos .= "\n $key=:$key,";
        }
        $campos = rtrim($campos, ",");
        $sql = sprintf(
            "UPDATE %s \n SET %s \n WHERE %s",
            $tabela,
            $campos,
            implode(" = ", $where)
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $e = $statement->execute($dados);

            if (!$e) {
                throw new \Exception("Erro ao atualizar $e");
            }
            return $where[1];
        } catch (PDOException $e) {
            http_response_code(500);
            die($e->getMessage());
        } catch (\Exception $e) {
            http_response_code(500);
            die($e->getMessage());
        }
    }
    
}
