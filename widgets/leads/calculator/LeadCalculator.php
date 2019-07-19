<?php

namespace frontend\themes\building\widgets\leads\calculator;

use pantera\leads\models\Lead;

class LeadCalculator extends Lead
{
    public $name;
    public $email;
    public $region;
    public $phone;
    public $description;
    public $services;

    public function toText(): string
    {
        $properties = [];
        foreach ($this->getAllProperty() as $propertyName => $propertyValue) {
            if ($propertyName == 'services' && $propertyValue) {
                $arrayValues = [];
                foreach ($propertyValue as $value) {
                    $arrayValues[] = $this->getServicesList()[$value];
                }
                $propertyValue = implode(', ', $arrayValues);
            }
            $label = $this->getAttributeLabel($propertyName);
            $properties[] = $label . ': ' . $propertyValue;
        }
        return implode("\n", $properties);
    }

    public function getServicesList()
    {
        return [
            'Разработка проекта рабочих чертежей',
            'Монтаж свайно-винтового фундамента',
            'Строительство силового каркаса дома с кровлей',
            'Внешняя отделка дома',
            'Утепление дома',
            'Внутренняя отделка дома',
            'Прочие услуги',
        ];
    }

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = [['name', 'email', 'region', 'phone'], 'required'];
        $rules[] = [['name', 'email', 'region', 'phone'], 'string', 'max' => '255'];
        $rules[] = ['email', 'email'];
        $rules[] = ['description', 'string'];
        $rules[] = ['services', 'each', 'rule' => ['in', 'range' => array_keys($this->getServicesList())]];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше имя';
        $labels['email'] = 'Ваша E-mail';
        $labels['region'] = 'Регион строительства';
        $labels['phone'] = 'Ваш телефон';
        $labels['description'] = 'Описание';
        $labels['services'] = 'Услуги';
        return $labels;
    }
}
