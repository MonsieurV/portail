<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addnotedefrais extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('note_de_frais', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'nom' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 255,
             ),
             'transaction_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'deleted_at' => 
             array(
              'notnull' => false,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('note_de_frais');
    }
}