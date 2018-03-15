<?php

class LottieAnimation extends DataObject {

    /**
     * @var array
     */
    private static $db = [
        'Name' => 'Varchar(255)',
        'Autoplay' => 'Boolean',
        'Loop' => 'Boolean',
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'AnimationJson' => File::class,
        'FallbackImage' => Image::class,
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
                TextField::create('Name', 'Name'),
                UploadField::create('AnimationJson', 'Animation JSON'),
                UploadField::create('FallbackImage', 'Fallback Image'),
                CheckboxField::create('Autoplay', 'Autoplay'),
                CheckboxField::create('Loop', 'Loop'),
            ]
        );

        return $fields;
    }
}
