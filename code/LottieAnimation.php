<?php

namespace SilverStripe\Lottie;

use SilverStripe\Assets\File;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\ORM\DataObject;

class LottieAnimation extends DataObject {

    /**
     * @var string
     */
    private static $table_name = 'LottieAnimation';

    /**
     * @var array
     */
    private static $db = [
        'Name' => 'Varchar(255)',
        'Description' => 'Varchar(255)',
        'Autoplay' => 'Boolean',
        'Loop' => 'Boolean',
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'AnimationJson' => File::class,
    ];

    /**
     * @var array
     */
    private static $summary_fields = [
        'Name' => 'Animation Name',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main',
            [
                $name = TextField::create('Name', 'Name'),
                $description = TextField::create('Description', 'Description'),
                UploadField::create('AnimationJson', 'Animation JSON'),
                CheckboxField::create('Autoplay', 'Autoplay'),
                CheckboxField::create('Loop', 'Loop'),
            ]
        );

        $name->setDescription('This name must be unique, and match the one specified in the template');
        $description->setDescription('Short description of the animation. This is used as the label for accessibility purposes.');

        return $fields;
    }

    public function onAfterWrite()
    {
        parent::onAfterWrite();

        $json = $this->AnimationJson();
        if ($json && $json->exists()) {
            $json->write();
            $json->writeToStage('Live');
        }
    }
}
