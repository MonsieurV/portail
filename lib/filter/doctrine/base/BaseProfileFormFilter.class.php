<?php

/**
 * Profile filter form base class.
 *
 * @package    simde
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProfileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormFilterInput(),
      'nickname'       => new sfWidgetFormFilterInput(),
      'birthday'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'sexe'           => new sfWidgetFormFilterInput(),
      'mobile'         => new sfWidgetFormFilterInput(),
      'home_address'   => new sfWidgetFormFilterInput(),
      'family_address' => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nickname'       => new sfValidatorPass(array('required' => false)),
      'birthday'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'sexe'           => new sfValidatorPass(array('required' => false)),
      'mobile'         => new sfValidatorPass(array('required' => false)),
      'home_address'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'family_address' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profile';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'user_id'        => 'Number',
      'nickname'       => 'Text',
      'birthday'       => 'Date',
      'sexe'           => 'Text',
      'mobile'         => 'Text',
      'home_address'   => 'Number',
      'family_address' => 'Number',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
    );
  }
}
