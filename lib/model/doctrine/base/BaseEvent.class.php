<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Event', 'doctrine');

/**
 * BaseEvent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $asso_id
 * @property integer $type_id
 * @property string $name
 * @property clob $description
 * @property date $start_date
 * @property date $end_date
 * @property boolean $is_public
 * @property boolean $is_weekmail
 * @property string $place
 * @property Asso $Asso
 * @property EventType $Type
 * 
 * @method integer   getAssoId()      Returns the current record's "asso_id" value
 * @method integer   getTypeId()      Returns the current record's "type_id" value
 * @method string    getName()        Returns the current record's "name" value
 * @method clob      getDescription() Returns the current record's "description" value
 * @method date      getStartDate()   Returns the current record's "start_date" value
 * @method date      getEndDate()     Returns the current record's "end_date" value
 * @method boolean   getIsPublic()    Returns the current record's "is_public" value
 * @method boolean   getIsWeekmail()  Returns the current record's "is_weekmail" value
 * @method string    getPlace()       Returns the current record's "place" value
 * @method Asso      getAsso()        Returns the current record's "Asso" value
 * @method EventType getType()        Returns the current record's "Type" value
 * @method Event     setAssoId()      Sets the current record's "asso_id" value
 * @method Event     setTypeId()      Sets the current record's "type_id" value
 * @method Event     setName()        Sets the current record's "name" value
 * @method Event     setDescription() Sets the current record's "description" value
 * @method Event     setStartDate()   Sets the current record's "start_date" value
 * @method Event     setEndDate()     Sets the current record's "end_date" value
 * @method Event     setIsPublic()    Sets the current record's "is_public" value
 * @method Event     setIsWeekmail()  Sets the current record's "is_weekmail" value
 * @method Event     setPlace()       Sets the current record's "place" value
 * @method Event     setAsso()        Sets the current record's "Asso" value
 * @method Event     setType()        Sets the current record's "Type" value
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEvent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('event');
        $this->hasColumn('asso_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('type_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('start_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('end_date', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('is_public', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('is_weekmail', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('place', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Asso', array(
             'local' => 'asso_id',
             'foreign' => 'id'));

        $this->hasOne('EventType as Type', array(
             'local' => 'type_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}