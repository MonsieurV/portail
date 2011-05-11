<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Address', 'doctrine');

/**
 * BaseAddress
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $street
 * @property string $zipcode
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property Doctrine_Collection $Profile
 * 
 * @method string              getStreet()  Returns the current record's "street" value
 * @method string              getZipcode() Returns the current record's "zipcode" value
 * @method string              getCity()    Returns the current record's "city" value
 * @method string              getCountry() Returns the current record's "country" value
 * @method string              getPhone()   Returns the current record's "phone" value
 * @method Doctrine_Collection getProfile() Returns the current record's "Profile" collection
 * @method Address             setStreet()  Sets the current record's "street" value
 * @method Address             setZipcode() Sets the current record's "zipcode" value
 * @method Address             setCity()    Sets the current record's "city" value
 * @method Address             setCountry() Sets the current record's "country" value
 * @method Address             setPhone()   Sets the current record's "phone" value
 * @method Address             setProfile() Sets the current record's "Profile" collection
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAddress extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('address');
        $this->hasColumn('street', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('zipcode', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             ));
        $this->hasColumn('city', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('country', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('phone', 'string', 15, array(
             'type' => 'string',
             'length' => 15,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Profile', array(
             'local' => 'id',
             'foreign' => 'home_adress'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}