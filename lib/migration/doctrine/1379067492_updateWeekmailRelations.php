<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class updateWeekmailRelations extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('weekmail_article', 'weekmail_article_event_id_event_id', array(
             'name' => 'weekmail_article_event_id_event_id',
             'local' => 'event_id',
             'foreign' => 'id',
             'foreignTable' => 'event',
             ));
        $this->addIndex('weekmail_article', 'weekmail_article_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('weekmail_article', 'weekmail_article_event_id_event_id');
        $this->removeIndex('weekmail_article', 'weekmail_article_event_id', array(
             'fields' => 
             array(
              0 => 'event_id',
             ),
             ));
    }
}