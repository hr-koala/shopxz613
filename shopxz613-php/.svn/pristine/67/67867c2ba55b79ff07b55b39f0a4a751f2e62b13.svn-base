<?php
namespace app\cosmetology\controller;
use think\Page;
use think\Verify;
use think\Image;
use think\Db;
class Index extends Base {
    //首页
    public function index(){ 
        $myShop = I('get.myShop');
        $user_info = $this->user_info;
        $shop = M('shop');
        $shop_info = '';
        if(!empty($myShop) && $myShop != '0'){
            $shop_info = $this->getShop($shop,'i.user_id ='.$myShop.' AND shop_status=1 AND img.type=0');
        }elseif($myShop == '0' && $user_info['shop_id'] != 0){
            $shop_info = $this->getShop($shop,'i.shop_id ='.$user_info['shop_id'].' AND shop_status=1 AND img.type=0');
        }
        if($shop_info !== ''){
            $this->assign('shop_info',$shop_info);
            $shop_info_json = json_encode($shop_info);
            cookie("shop_info", setEnCode($shop_info_json,'key'), 72*3600);
        }else{
            cookie("shop_info", null);
        }

        $where = ['is_on_sale'=>1 , 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];
        $hot_area = $this->select_goods($where,'sort ASC');
        //收藏
        $goods_collect = M('goods_collect');
        $collect = $goods_collect->where(['user_id'=>$this->user_id])->getField('collect_id,goods_id');
    	$this->assign('hot_area',$hot_area);
    	$this->assign('collect',$collect);
        return $this->fetch();
    }

}