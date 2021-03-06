<?php
/**
 * Created by PhpStorm.
 * User: yantingting
 * Date: 15/9/11
 * Time: 上午11:51
 */
namespace App\Http\Controllers\Api;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use App\Lib\UserReg as Registrar ;

class BaseController extends Controller
{
    use Helpers;

    const PAGE_SIZE = 15;
    const DATELINE = 20;


    /**
     * 验证封装类
     *
     * @param array $data 验证数据
     * @param array $rules 验证规则
     * @return boolean|array 验证通过返回 false 不通过 抛出参数错误异常array('code'=>105,'message'=>'参数错误描述')
     */
    public function validator($data, $rules, $messages = array(),$ajax=1)
    {


        $validator = Validator::make($data, $rules,$messages);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $message) {
                    $return = json_encode(['code'=>105,'message'=>$message]);
                    header ( 'Content-type: application/json' );
                    echo $return;
                    exit ();
            }
        }
        return;
    }
    /**
     * 验证AcessToken 是否合法
     *
     * @param string $access_token
     * @return boolean|array 验证通过返回 false 不通过 抛出参数错误异常array('code'=>1006,'message'=>'Acess_Token 失效')
     */
    public function validateAcessToken($accessToken)
    {
        $Registrar= new Registrar();

        //access_token 未验证通过
        $vendor = $Registrar->checkLogin($accessToken);
        if(!$vendor) {
            $message = Lang::get('messages.access_token');
            header ( 'Content-type: application/json' );
            echo json_encode ( array('code'=>1006,'message'=>$message) );
            exit ();
        }



        return $vendor;
    }

    public function getToken($accessToken)
    {
        $Registrar= new Registrar();

        //access_token 未验证通过
        $vendor = $Registrar->checkLogin($accessToken);
        if(!$vendor) {
           return false;
        }



        return $vendor;
    }

    /**
     * 验证手机号码
     * @param string $mobile
     * @return boolean|array 验证通过返回 false 不通过 抛出参数错误异常array('code'=>1001,'message'=>'Acess_Token 失效')
     */
    public function validateMobile($mobile)
    {
        if (preg_match("/^1[034578]{1}\d{9}$/",$mobile)){
            return true;
        }
        $message = Lang::get('messages.mobile_error');
        header ( 'Content-type: application/json' );
        echo json_encode ( array('code'=>1005,'message'=>$message) );
        exit ();
    }



}