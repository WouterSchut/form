<?php namespace JF;
/**

Copyright 2019 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-19ef09
Date:    2019-04-02 11:45:32
Version: v3.0.2
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-19ef09",
    "email": {
        "to": "info@israel-tours.nl",
        "cc": "",
        "bcc": "",
        "subject": "Formulier Israel Tours",
        "template": ""
    },
    "admin": {
        "users": "admin:3f1cd",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "https:\/\/israel-tours.nl",
        "message": "Bedankt {f1}! \nWij nemen zo snel mogelijk contact met u op.",
        "seconds": "5"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "blue"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "Uw volledige naam",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true,
                        "msg": "Dit veld is verplicht."
                    }
                },
                "placeholder": "Voornaam Achternaam",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                },
                "hidden": false
            },
            "id": "f1",
            "cid": "c1",
            "labelHide": false
        },
        {
            "label": "Telefoon",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": true,
                "placeholder": "00 31 6 12 34 56 78",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": false,
                        "val": "[0-9 -+.]+",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true,
                        "msg": "Dit veld is verplicht."
                    },
                    "phonenumber": {
                        "enabled": false
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N",
                "preferredCountries": "nl",
                "onlyCountries": "nl"
            },
            "id": "f5",
            "cid": "c33"
        },
        {
            "label": "Email",
            "field_type": "email",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": false,
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true,
                        "msg": "Dit veld is verplicht."
                    },
                    "equalto": {
                        "enabled": false
                    }
                },
                "placeholder": "Uw e-mail adres",
                "addon": {
                    "leftIcon": "fa fa-envelope"
                }
            },
            "id": "f6",
            "cid": "c39"
        },
        {
            "label": "Start gewenste periode",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": "",
                    "leftIcon": "fa fa-calendar",
                    "leftText": ""
                },
                "date": {
                    "format": "dd\/mm\/yyyy",
                    "weekStart": "1",
                    "multidate": "false"
                },
                "placeholder": "Kies uw start datum"
            },
            "id": "f7",
            "cid": "c45"
        },
        {
            "label": "Einde gewenste periode",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": "",
                    "leftIcon": "fa fa-calendar"
                },
                "date": {
                    "format": "dd\/mm\/yyyy",
                    "weekStart": "1",
                    "multidate": "false",
                    "startView": "0",
                    "minViewMode": "0"
                },
                "placeholder": "Kies uw eind datum"
            },
            "cid": "c30",
            "id": "f8"
        },
        {
            "label": "Uw bericht",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "fa fa-comment-o"
                },
                "validators": {
                    "required": {
                        "enabled": true,
                        "msg": "Dit veld is verplicht."
                    },
                    "pattern": {
                        "enabled": false
                    }
                },
                "placeholder": "Uw bericht"
            },
            "id": "f10",
            "cid": "c45"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "Verstuur",
                "icon": "glyphicon glyphicon-send",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "gdpr": {
        "consentFieldId": "",
        "saveData": "always"
    },
    "licenseKey": "",
    "lang": {
        "language": "nl"
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class