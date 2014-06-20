<?php

class Api extends Config {

    /**
     * @var XApi
     */
    public $xapi = null;

    /**
     * @var Orders
     */
    public $_orders = null;
    protected $_key = 'bus';
    protected $_skey = 'bus';
    public $type_tpls = array(
        1 => array('seats_tpl' => 'bus', 'icon_class' => 'icon_bus', 'folder' => 'bus'),
        2 => array('seats_tpl' => 'bus', 'icon_class' => 'icon_bus', 'folder' => 'bus'),
        3 => array('seats_tpl' => '', 'icon_class' => 'icon_avia', 'folder' => 'avia'),
        4 => array('seats_tpl' => '', 'icon_class' => 'icon_avia', 'folder' => 'avia'),
        51 => array('seats_tpl' => 'train_51', 'icon_class' => 'icon_train', 'folder' => 'train'),
        52 => array('seats_tpl' => 'train_52', 'icon_class' => 'icon_train', 'folder' => 'train'),
        53 => array('seats_tpl' => 'train_53', 'icon_class' => 'icon_train', 'folder' => 'train'),
        54 => array('seats_tpl' => 'train_54', 'icon_class' => 'icon_train', 'folder' => 'train'),
        55 => array('seats_tpl' => 'train_55', 'icon_class' => 'icon_train', 'folder' => 'train'),
        56 => array('seats_tpl' => 'train_56', 'icon_class' => 'icon_train', 'folder' => 'train'),
        561 => array('seats_tpl' => 'train_561', 'icon_class' => 'icon_train', 'folder' => 'train'),
        562 => array('seats_tpl' => 'train_562', 'icon_class' => 'icon_train', 'folder' => 'train'),
        563 => array('seats_tpl' => 'train_563', 'icon_class' => 'icon_train', 'folder' => 'train'),
        6 => array('seats_tpl' => 'bus', 'icon_class' => 'icon_bus', 'folder' => 'bus'),
        7 => array('seats_tpl' => 'bus', 'icon_class' => 'icon_bus', 'folder' => 'bus'),
        8 => array('seats_tpl' => 'bus', 'icon_class' => 'icon_bus', 'folder' => 'bus')
    );

    public $resources = array();

    /*public function init()
    {

        $this->resources = $this->config->item('resources');

        $keys = $this->config->item('api_keys');
        $resource = $_GET['res'] ? $_GET['res'] : 'default';
        $this->load->library('xApi');
        $this->xapi->setKey('bus');
        $this->xapi->setLocale($this->config->item('curr_lang'));

        $salt = $_POST['slt'] ? $_POST['slt'] : '';
        if (!empty($_GET['type']) && isset($keys[$_GET['type']])) {
            $this->xapi->setKey($_GET['type'], $salt);
        }
        $this->_key = $this->xapi->getKey();

        $this->_skey = md5($this->_key . $salt);
        $this->load->model('Orders');
        $this->_orders = $this->Orders;

        $this->xapi->initialize(XAPI_ERROR_RETURN_JSON);
        $this->_pageType = TPL_TYPE_NONE;
        header('Cache-Control: no-cache, must-revalidate');
        header('Content-type: application/json');
        $this->tvars->type_tpls = $this->type_tpls;

        $this->resource = $this->tvars->resource = isset($this->resources[$resource]) ? $this->resources[$resource] : $this->resources['default'];
        $this->tvars->currencyCode = $this->resource['currencyCode'] = !empty($this->resource['currencyCode']) ? $this->resource['currencyCode'] : 980;
        $this->resource['trip_filter'] = !empty($this->resource['trip_filter']) ? true : 980;
        $this->resource['acqid'] = !empty($this->resource['acqid']) ? $this->resource['acqid'] : 414963;
        $this->resource['pb_merchant_id'] = !empty($this->resource['pb_merchant_id']) ? $this->resource['pb_merchant_id'] : $this->config->item('pb_merchant_id');
        $this->resource['pb_merchant_password'] = !empty($this->resource['pb_merchant_password']) ? $this->resource['pb_merchant_password'] : $this->config->item('pb_merchant_password');
        $this->resource['reservationUrl'] = !empty($this->resource['reservationUrl']) ? $this->resource['reservationUrl'] : ($this->config->item('curr_lang') == 'ru' ? '' : '/' . $this->config->item('curr_lang') ) .'/reservation.php';
        $_SESSION['xapi'][$this->_skey]['remoteUser']=$_GET['remoteUser'];
    }*/

    public function actionCreateSession($post, $display_form) {
        $remoteUser =  $_SERVER["SERVER_NAME"].$_SERVER["PHP_SELF"];

        if (!empty($post)) {

            $action = $post['action'];
            $type = empty($post['type']) ? 'avia_plus_charter' : $post['type'];
            $res = empty($post['res']) ? 'echarter2' : $post['res'];

            $x = $this->actionGetRemoteData('http://api.e-travels.com.ua/apitest2/'.$action.'.php?type='.$type.'&res='.$res.'&remoteUser='.$remoteUser, $post);

            if($action != 'getActionSalt'){
                $x = str_replace('/images/', '/static/images/form/', $x[1]);
                echo $x;
            } else {
                $data = array('salt' => $x[1]);
                echo json_encode($data);
            }
            die;
        }



        $form = $this->renderPartial($display_form ,array(),true);
        return $form;
    }

    public function getActionSalt()
    {
        $salt = md5(mt_rand(1, time()));
        $this->_skey = md5($this->_key . $salt);
        $_SESSION[$this->_skey]['trip_search'] = array();
        $_SESSION[$this->_skey]['trip_search']['INTERNATIONAL'] = false;
        $_SESSION[$this->_skey]['trip_search']['CHECKED_SEATS'] = array();
        if (!isset($_SESSION['formShown'])) {
            $_SESSION['formShown'] = 1;
        }

        return $salt;
    }

    public function actionGetRemoteData($url, $params = array()) {

        if (!is_array($params)) $params = array();

        $ch = curl_init($url);
        $sparams = http_build_query($params);
        $_SESSION['sid'] = isset($_SESSION['sid']) ? $_SESSION['sid'] : '';

        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $sparams);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
        curl_setopt($ch, CURLOPT_COOKIE, 'PHPSESSID=' . $_SESSION['sid'] . ';');
        $data = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);

        $r = preg_match('#PHPSESSID=([^;]+);#Umis', $data, $m);

        if ($r)
            $_SESSION['sid'] = $m[1];

        $r = preg_match('#Content-Type: ([^;]+);#Umis', $data, $m);

        $ct = (isset($m[1])) ? $m[1]: '';

        return array($ct, substr($data, $header_size));
    }


    function hexbin($d)
    {
        $data = '';
        $len = strlen($d);
        for ($i = 0; $i < $len; $i += 2) {
            $data .= chr(hexdec(substr($d, $i, 2)));
        }
        return $data;
    }

    function confirm_buy($merchant_password, $merchant_id, $post)
    {
        if ($post['reasoncode'] != 1 || $post['responsecode'] != 1) {
            return false;
        }

        $m_id = $merchant_id;
        $m_sig = $merchant_password;

        $signature = base64_encode(hexbin(sha1(
            $m_sig
            . $m_id
            . $post['acqid']
            . $post['orderid']
            . $post['responsecode']
            . $post['reasoncode']
            . $post['reasoncodedesc']
        )));

        $signature2 = base64_encode(hexbin(sha1(
            $m_sig
            . $post['eci']
            . $post['ip']
            . $post['countryip']
            . $post['countrybin']
            . $post['onus']
            . $post['time']
            . $post['phone']
            . $post['countryphone']
        )));

        if ($post['signature'] !== $signature) {
            return false;
        }

        if ($post['signature2'] !== $signature2) {
            return false;
        }

        return true;
    }


    function pingDomain($domain, $timeout = 1)
    {

        $timeout = $timeout ? $timeout : 1;
        $starttime = microtime(true);
        $file = @fsockopen($domain, 80, $errno, $errstr, $timeout);
        $stoptime = microtime(true);
        $status = 0;

        if (!$file) $status = -1; // Site is down
        else {
            fclose($file);
            $status = ($stoptime - $starttime) * 1000;
            $status = floor($status);
        }
        return $status;
    }
} 