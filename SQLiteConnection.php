<?php

namespace Itxiao6\Database;

use Itxiao6\Database\Query\Processors\SQLiteProcessor;
use Doctrine\DBAL\Driver\PDOSqlite\Driver as DoctrineDriver;
use Itxiao6\Database\Query\Grammars\SQLiteGrammar as QueryGrammar;
use Itxiao6\Database\Schema\Grammars\SQLiteGrammar as SchemaGrammar;

class SQLiteConnection extends Connection
{
    /**
     * Get the default query grammar instance.
     *
     * @return \Itxiao6\Database\Query\Grammars\SQLiteGrammar
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }

    /**
     * Get the default schema grammar instance.
     *
     * @return \Itxiao6\Database\Schema\Grammars\SQLiteGrammar
     */
    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar);
    }

    /**
     * Get the default post processor instance.
     *
     * @return \Itxiao6\Database\Query\Processors\SQLiteProcessor
     */
    protected function getDefaultPostProcessor()
    {
        return new SQLiteProcessor;
    }

    /**
     * Get the Doctrine DBAL driver.
     *
     * @return \Doctrine\DBAL\Driver\PDOSqlite\Driver
     */
    protected function getDoctrineDriver()
    {
        return new DoctrineDriver;
    }
}
