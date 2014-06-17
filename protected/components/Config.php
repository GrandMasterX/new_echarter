<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.06.14
 * Time: 14:52
 */

class Config extends Controller {

    public function init()
    {
        session_start();
            /*
            $config['api_key'] = 'ia+EqGd1sL7n4qA3ZI8qqg==';
            $config['api_url'] = 'http://demo.gillbus.com/online2/';
            $config['api_session_url'] = 'http://demo.gillbus.com/online2/';*/

        $config['api_key'] = 'srfzG8UAIFwoDSLEqR8Rdq6B6n6JHKkrmcdYGBzOMBDTg6tBAE+BUQ==';
        $config['api_train_key'] = 'srfzG8UAIFw48VRT+s37cCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==';
        //srfzG8UAIFwoDSLEqR8Rdq6B6n6JHKkrmcdYGBzOMBDTg6tBAE+BUQ== - С‚РѕР»СЊРєРѕ Р°РІС‚РѕР±СѓСЃС‹
        //srfzG8UAIFxrd90USE4xmCSPDt4c/KCA54BZSOSL+wiofMDNm3upUg== - С‚РѕР»СЊРєРѕ Р°РІС‚РѕР±СѓСЃС‹
        //srfzG8UAIFxrd90USE4xmCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ== - С‚РѕР»СЊРєРѕ Р°РІС‚РѕР±СѓСЃС‹
        $config['api_keys'] = array(
            'bus' => 'srfzG8UAIFyPgBGwFZGHeySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
            'promo' => 'dOeVG6F+1TvikxgxHozR3hNZgt8UCjWW',
            'get_bus_dates' => 'srfzG8UAIFxL5YXN1WoZfCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
            'avia_charters_bus' => 'srfzG8UAIFyKOAFUsy+UVCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
                //  'train' => 'srfzG8UAIFyEC5rD8w1sDiSPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
            'train' => 'srfzG8UAIFyPgBGwFZGHeySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
            'avia' => 'srfzG8UAIFxKxrWAKN5AoySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
            'avia_skybus40' => 'uDLH6cf0JWihAhI6dbBFBtltsKhjjX21V2J59LQjJlM=',
            'avia_plus_charter' => 'srfzG8UAIFxNRUXNzDnvkU2B8Gk8l3sTKuycjMbMRLYdzOYhflqxgQ==',
            'avia_plus_charter_plus_avto' => 'srfzG8UAIFzEul3ravzjEySPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
            'all' => 'srfzG8UAIFyPgBGwFZGHeySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
            'pkeys' => 'srfzG8UAIFyPgBGwFZGHeySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==',
                // 'partnerkey' => $_SESSION['agentkey'],
            'train_bus' => 'srfzG8UAIFwVzqAIyQY7xQO+nkQxZ3tUqHzAzZt7qVI=',
            'transfer' => 'srfzG8UAIFwoDSLEqR8Rdq6B6n6JHKkrmcdYGBzOMBDTg6tBAE+BUQ==',
                //'busfor' => 'srfzG8UAIFxWubINZG+DziSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==', //RUR
            'busfor' => 'srfzG8UAIFxOZADYlM0JjySPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==', //UAH srfzG8UAIFyPgBGwFZGHeySPDt4c/KCA54BZSOSL+wiofMDNm3upUg==
            'etransport_all' => 'srfzG8UAIFyyqBoOhaRBrCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
            'etransport_avia' => 'srfzG8UAIFyK9I/J+TollySPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
            'etransport_train' => 'srfzG8UAIFwuWnrpZ6hBMySPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
            'etransport_bus' => 'srfzG8UAIFzHTmXo9mkchCSPDt4c/KCAUj8EDXcm7cOL3e2bv0mqRQ==',
                //  'avia_charters' => 'srfzG8UAIFxozAvWTYprb66B6n6JHKkrmcdYGBzOMBDTg6tBAE+BUQ==',
            'avia_charters' => 'SkCODNTck8eq+r9dEYNOkNltsKhjjX21V2J59LQjJlM=',
            'sb_bus' => 'P8Mr1p2bnGBbYrPcWBt2DtltsKhjjX21V2J59LQjJlM=',
            'sb_avia' => 'P8Mr1p2bnGCAqWy79/kk9NltsKhjjX21V2J59LQjJlM=',
            'sb_train' => 'P8Mr1p2bnGDGkS11lH/nYdltsKhjjX21V2J59LQjJlM=',
            'sb_avia_charter' => 'P8Mr1p2bnGDNyc7JmrsCltltsKhjjX21V2J59LQjJlM=',
            'sb_all' => 'P8Mr1p2bnGCrUCGwADv9BNltsKhjjX21V2J59LQjJlM=',
            'mariupol' => '8DEVUQOQIZzikxgxHozR3hNZgt8UCjWW',
            'airbus' => 'z2LaKn21fmql+mAgdFxhqNltsKhjjX21V2J59LQjJlM=',
            'airbusUSD' => 'z2LaKn21fmofedoQlXLQXNltsKhjjX21V2J59LQjJlM=',
            'airbusEUR' => 'z2LaKn21fmqbJHr/j3HUWNltsKhjjX21V2J59LQjJlM=',
            'airbusUAH' => 'z2LaKn21fmql+mAgdFxhqNltsKhjjX21V2J59LQjJlM=',
            'vegarisen' => 'eJ/qXgh6E0edIEoRT2SAS9ltsKhjjX21V2J59LQjJlM=',
        );

        //I0TG09WF
        //oJXf87YbY108453

        //kiwn0q9shuo6phx - С‚РµСЃС‚ РїР°СЂРѕР»СЊ РґР»СЏ РіСЂСѓР·РёРё
        //I0TG0606 - С‚РµСЃС‚ Р»РѕРіРёРЅ РґР»СЏ РіСЂСѓР·РёРё
        $config['resources'] = array(
            'default' => array('folder' => 'default'),
            'airbus' => array('folder' => 'airbus', 'currencyCode' => 981, 'acqid' => 424948, 'pb_merchant_id' => 'I0TG09WF', 'pb_merchant_password' => 'oJXf87YbY108453'),
            'airbusUAH' => array('folder' => 'airbus', 'trip_sort'=>1, 'currencyCode' => 981, 'acqid' => 424948, 'pb_merchant_id' => 'I0TG09WF', 'pb_merchant_password' => 'oJXf87YbY108453'),
            'airbusUSD' => array('folder' => 'airbus', 'currencyCode' => 840, 'acqid' => 424948, 'pb_merchant_id' => 'I0TG09WF', 'pb_merchant_password' => 'oJXf87YbY108453'),
            'airbusEUR' => array('folder' => 'airbus', 'currencyCode' => 978, 'acqid' => 424948, 'pb_merchant_id' => 'I0TG09WF', 'pb_merchant_password' => 'oJXf87YbY108453'),
            'airbusRUB' => array('folder' => 'airbus', 'currencyCode' => 643, 'acqid' => 424948, 'pb_merchant_id' => 'I0TG09WF', 'pb_merchant_password' => 'oJXf87YbY108453'),
            'newform' => array('folder' => 'newform'),
            'hub' => array('folder' => 'hub'),
            'newform3' => array('folder' => 'newform3'),
            'et_international_new' => array('folder' => 'et_international_new'),
            'partner' => array('folder' => 'partner'),
            'et_international_new2' => array('folder' => 'et_international_new2','jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'get_bus_dates' => array('folder' => 'et_international_new2','jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'promo' => array('folder' => 'promo','jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'et_international_promo' => array('folder' => 'et_international_promo','jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'et_intercity_new' => array('folder' => 'et_intercity_new'),
            'vegarisen' => array('folder' => 'vegarisen'),
            'avia_skybus40' => array('folder' => 'newform','fullSearch' => 0, 'trip_sort'=>1),
            'etr_avia_new2link' => array('folder' => 'etr_avia_new2link','fullSearch' => 0, 'trip_sort'=>1),
            'newform_test' => array('folder' => 'newform_test'),
            'etravels' => array('folder' => 'default', 'noCss' => 1, 'fullSearch' => 1),
            'etravels2' => array('folder' => 'default', 'noCss' => 1, 'noJS' => 1, 'fullSearch' => 1),
            'skybus' => array('folder' => 'skybus_newform_avia', 'fullSearch' => 1),
            'skybus_charter' => array('folder' => 'skybus_charter', 'trip_sort'=>1, 'fullSearch' => 1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_new' => array('folder' => 'skybus_new', 'fullSearch' => 1),
            'skybus_newform' => array('folder' => 'skybus_newform'),
            'skybus_newform_train' => array('folder' => 'skybus_newform_train', 'fullSearch' => 1),
            'skybus_newform_avia' => array('folder' => 'skybus_newform_avia', 'trip_sort'=>1, 'fullSearch' => 1),
            'skybus_newform_avia_new' => array('folder' => 'skybus_newform_avia_new', 'trip_sort'=>1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_newform_avia_new_large' => array('folder' => 'skybus_newform_avia_new_large', 'trip_sort'=>1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_newform_transfer_new_large' => array('folder' => 'skybus_newform_transfer_new_large', 'trip_sort'=>1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_newform_all_new_large' => array('folder' => 'skybus_newform_all_new_large', 'trip_sort'=>1),
            'skybus_newform_all_new' => array('folder' => 'skybus_newform_all_new', 'trip_sort'=>1),
            'skybus_newform_transfer_new' => array('folder' => 'skybus_newform_transfer_new', 'trip_sort'=>1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_newform_avia_new_charter' => array('folder' => 'skybus_newform_avia_new', 'trip_sort'=>1, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'skybus_train' => array('folder' => 'skybus_train', 'fullSearch' => 1),
            'mariupolavto' => array('folder' => 'mariupolavto', 'fullSearch' => 1),
            'etr_avia' => array('folder' => 'etr_avia', 'trip_sort'=>1, 'fullSearch' => 0),
            'etr_avia_new' => array('folder' => 'etr_avia_new', 'trip_sort'=>1, 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'etr_avia_new2' => array('folder' => 'etr_avia_new2', 'trip_sort'=>1,'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'etr_acharters' => array('folder' => 'etr_acharters', 'trip_sort'=>1, 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'etr_acharters2' => array('folder' => 'etr_acharters2', 'trip_sort'=>1, 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'etr_acharters22' => array('folder' => 'etr_acharters22', 'trip_sort'=>1, 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'etr_acharters_promo' => array('folder' => 'etr_acharters_promo', 'trip_sort'=>1, 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'thailand' => array('folder' => 'thailand', 'fullSearch' => 0),
            'etr_avia2' => array('folder' => 'etr_acharters22', 'trip_sort'=>1, 'fullSearch' => 0),
            'etr_international' => array('folder' => 'etr_international', 'fullSearch' => 1),
            'skybus_bus' => array('folder' => 'skybus_bus', 'fullSearch' => 1),
            'echarter' => array('folder' => 'echarter', 'trip_sort'=>1,  'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'echarter2' => array('folder' => 'echarter2', 'trip_sort'=>1,  'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'transfer' => array('folder' => 'transfer', 'fullSearch' => 1),
            'transport_main' => array('folder' => 'transport_main'),
            'transport' => array('folder' => 'transport', 'fullSearch' => 0),
            'train' => array('folder' => 'train', 'fullSearch' => 1),
            'busfor' => array('folder' => 'busfor',  'currencyCode' => 980, 'reservationUrl' =>'/reservation'),
            'avtoexpress' => array('folder' => 'avtoexpress', 'fullSearch' => 1, 'currencyCode' => 980),
            'echarter_reg' => array('folder' => 'echarter_reg', 'trip_sort'=>1, 'fullSearch' => 1),
            'etransport' => array('folder' => 'etransport3'),
            'etransport_test' => array('folder' => 'etransport_test'),
            'test' => array('folder' => 'test', 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
            'test22' => array('folder' => 'test22', 'fullSearch' => 0),
            'test_sb' => array('folder' => 'test_sb', 'fullSearch' => 0),
            'default_ukr' => array('folder' => 'default_ukr'),
            'transport_ukr' => array('folder' => 'transport_ukr', 'fullSearch' => 0),
            'et_mobile' => array('folder' => 'et_mobile', 'reservationUrl' =>'/mobile/reservation.php', 'fullSearch' => 0, 'jsInitParams' => array('loadBackDates' => 1, 'loadDates' => 1)),
        );

            /*$config['api_url'] = 'http://online.e-travels.com.ua/online2/';
            $config['api_session_url'] = 'http://online.e-travels.com.ua/';*/
            /*
            $config['api_url'] = 'http://gillbus.com/bus/online2/';
            $config['api_session_url'] = 'http://gillbus.com/bus/';
            */
        $config['api_url'] = 'http://gillbus.com/online2/';
        $config['api_session_url'] = 'http://gillbus.com/';
        //$config['api_url'] = 'http://192.168.2.138:8080/GillBuss/online2/';
        //$config['api_session_url'] = 'http://192.168.2.138:8080/GillBuss';

        //$config['pb_merchant_id'] = 'I0110020';
        //$config['pb_merchant_password'] = '34074xhjqmwf8gs';
        $config['pb_merchant_id'] = 'I01100UM';
        $config['pb_merchant_password'] = '686uXM9c200QQ82';


        $config['ab_userName'] = 'e-travels_ua-api';
        $config['ab_password'] = 'e-travels_ua';
        $banks = array(
        'pbank' => array(
        'merchant_id' => 'I01100UM',
        'merchant_password' => '686uXM9c200QQ82'
        ),
        'abank' => array(

        )
        );


        $config['iso_currency_codes'] = array(
        'UAH' => 980,
        'RUR' => 643,
        'RUB' => 643,
        'USD' => 840
        );


        /*$config['langs'] = array(
            SITE_LANG_DE => 'lang_name_'.SITE_LANG_DE,
            SITE_LANG_RU => 'lang_name_'.SITE_LANG_RU,
            SITE_LANG_UA => 'lang_name_'.SITE_LANG_UA,
            SITE_LANG_EN => 'lang_name_'.SITE_LANG_EN,
        );*/
    }
}