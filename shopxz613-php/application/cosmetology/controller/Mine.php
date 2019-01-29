<?php
namespace app\cosmetology\controller;
use app\common\logic\UsersLogic;
use think\Page;
use think\Verify;
use think\Image;
use think\Db;
class Mine extends Base {
	public function index(){
		$order = M('order');
		$where = 'user_id = '.$this->user_id;
		//待付款
		$order_num['WAITPAY'] = $this->getOrdernum($order,$where.C("WAITPAY"));
		//待发货
		$order_num['WAITSEND'] = $this->getOrdernum($order,$where.C("WAITSEND"));
		//待收货
		$order_num['WAITRECEIVE'] = $this->getOrdernum($order,$where.C("WAITRECEIVE"));
		//已完成
		$order_num['FINISH'] = $this->getOrdernum($order,$where.C("FINISH"));
		//$this->distribution('201812260947356875');
		$this->assign('order_num',$order_num);
		return $this->fetch();
	}

	public function getOrdernum($order,$where){
		return $order_num = $order->where($where)->count();
	}

	//设置页面
	public function setUp(){
		return $this->fetch();
	}

	//我的收藏
	public function collection(){
		$goods_collect = M('goods_collect');
		$collect_info = $goods_collect->where(['user_id'=>$this->user_id])->getField('collect_id,goods_id');
		$goods_id_str = implode(',', $collect_info);

		$where = ['is_on_sale'=>1 , 'goods_id'=>['in',$goods_id_str] , 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];
	 	$goods = $this->select_goods($where,'sort ASC');
	 	$this->assign('goods',$goods);
		return $this->fetch();
	}

	//移除收藏
	public function remove_collection(){
		if(IS_AJAX){
			$_POST['user_id'] = $this->user_id;
			$goods_collect = M('goods_collect');
			$res = $goods_collect->where($_POST)->delete();
			if($res !== false){
				$count = $goods_collect->where(['user_id'=>$this->user_id])->count();
                echo json_encode(['status'=>1,'msg'=>'已取消','info'=>$count]);exit;
            }else{
                echo json_encode(['status'=>0,'msg'=>'取消收藏失败']);exit;
            }
		}
	}

	//地址管理
	public function address(){
		$user_address = M('user_address');
		$info = $user_address->where(['user_id'=>$this->user_id])->order('is_default desc')->select();

		if ($info) {
            $area_id = array();
            foreach ($info as $val) {
                $area_id[] = $val['province'];
                $area_id[] = $val['city'];
                $area_id[] = $val['district'];
                $area_id[] = $val['twon'];
            }
            $area_id = array_filter($area_id);
            $area_id = implode(',', $area_id);
            $regionList = Db::name('region')->where("id", "in", $area_id)->getField('id,name');
            $this->assign('regionList', $regionList);
        }
		$this->assign('info',$info);
		$url = I('get.url');
		if(empty($url)){ $url = 1; }else{ $url = cookie('firm_order_url'); }
		$this->assign('url', $url);
		return $this->fetch();
	}

	//删除地址
	public function deleteAddress(){
		if(IS_AJAX){
			$_POST['user_id'] = $this->user_id;
			$res = M('user_address')->where($_POST)->delete();
			if($res !== false){
                echo json_encode(['status'=>1,'msg'=>'删除成功']);exit;
            }else{
                echo json_encode(['status'=>0,'msg'=>'删除失败']);exit;
            }
		}
	}

	//设置默认地址
	public function defaultAddress(){
		if(IS_AJAX){
			$user_address = M('user_address');
			$_POST['user_id'] = $this->user_id;
			$user_address->where(['user_id'=>$this->user_id,'is_default'=>1])->save(['is_default'=>0]);
			$res = $user_address->where($_POST)->save(['is_default'=>1]);
			if($res !== false){
                echo json_encode(['status'=>1,'msg'=>'成功']);exit;
            }else{
                echo json_encode(['status'=>0,'msg'=>'失败']);exit;
            }
		}
	}

	//修改资料
	public function modifyingData(){
		return $this->fetch();
	}

	//上传图像
	public function uploadPictures(){
		if(IS_AJAX){
			$image = I('post.base');
			$imageName = "25220".date("His",time()).rand(1111,9999).'.png';
            if (strstr($image,",")){
                $image = explode(',',$image);
                $image = $image[1];
            }
            $path = "public/upload/head_portrait/".date("Ymd",time());
            if (!is_dir($path)){ //判断目录是否存在 不存在就创建
                mkdir($path,0777,true);
            }
            $imageSrc=  $path."/". $imageName;  //图片名字 "public/".
            //返回的是字节数
            $r = file_put_contents(str_replace("\\","/",ROOT_PATH) .$imageSrc, base64_decode($image));
            if (!$r) {
                echo json_encode(['status'=>0,'msg'=>'失败']);exit;
            }else{
            	$head_pic = "/".$imageSrc;
            	M('users')->where(['user_id'=>$this->user_id])->save(['head_pic'=>$head_pic]);
                echo json_encode(['status'=>1,'msg'=>'成功']);exit;
            }
		}
	}

	//修改昵称
	public function modifyNickname(){
		if(IS_AJAX){
			$nickname = I('post.nickname');
			if(!empty($nickname)){
				M('users')->where(['user_id'=>$this->user_id])->save(['nickname'=>$nickname]);
			}
		}
	}

	//关于我们
	public function aboutUs(){
		return $this->fetch();
	}

	//申请代理
	public function application_agent(){
		$upgrade_suite = $this->upgrade_suite();
		$this->assign('upgrade_suite',$upgrade_suite);
		$this->assign('all_level',$this->get_all_level());
		return $this->fetch();
	}

	//礼包
	public function upgrade_suite(){
		$z_upgrade_suite = M('z_upgrade_suite');
		$upgrade_suite = $z_upgrade_suite->field('id,level_id,goods_info,goods_id_str')->select();

		$count = count($upgrade_suite);
		$goods_id_str = '';
		for($i=0; $i < $count; $i++){
			$goods_id_str .= $upgrade_suite[$i]['goods_id_str'].',';
			$upgrade_suite_info['upgrade_suite'][$upgrade_suite[$i]['level_id']]['id'] = json_decode($upgrade_suite[$i]['id'],true);
			$upgrade_suite_info['upgrade_suite'][$upgrade_suite[$i]['level_id']]['goods'] = json_decode($upgrade_suite[$i]['goods_info'],true);
		}
		$goods_id_str = trim($goods_id_str,',');
		$goods_id_str = implode(',', array_unique(explode(',', $goods_id_str)));

 		$where = ['is_on_sale'=>1 , 'goods_id'=> ['in',$goods_id_str], 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];

		$upgrade_suite_info['goods_info'] = $this->get_goods_id_info($where);

        return $upgrade_suite_info;
	}

	//获取商品
	public function get_goods_id_info($where){
		return $goods_info = Db::name('goods')->where($where)->order('sort ASC')->getField('goods_id,goods_name,shop_price,goods_remark,original_img,is_agent,explain,commodity_effect,distributor_price,lian_price,shopkeeper_price,market_generation_price,provincial_generation_price');
	}

	//云库存
	public function cloud_inventory(){
		$shop_stock = M('shop_stock');
		$stock_info = $shop_stock->where(['user_id'=>$this->user_id,'stock'=>['GT',0]])->getField('goods_id,stock');

		$goods_id_str = implode(',', array_flip($stock_info));

		$where = ['is_on_sale'=>1 , 'goods_id'=> ['in',$goods_id_str], 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];
        $goods_info = $this->get_goods_id_info($where);
		$this->assign('stock_info',$stock_info);
		$this->assign('goods_info',$goods_info);
		return $this->fetch();
	}

	//提货
	public function receiving_goods(){
		$goods_id = I('goods_id');
		$shop_stock = M('shop_stock');
		$stock_info = $shop_stock->where(['user_id'=>$this->user_id,'goods_id'=>$goods_id])->field('goods_id,stock')->find();
		//库存是否足够
		if($stock_info['stock'] == 0 || $stock_info['stock'] < 0){
			$this->redirect('Mine/cloud_inventory');
		}
		//商品信息
		$where = ['is_on_sale'=>1 , 'goods_id'=> $stock_info['goods_id'], 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];
        $goods_info = $this->get_goods_id_info($where)[$stock_info['goods_id']];
        //地址信息
        $getAddress = $this->getAddress();
        $this->assign('stock_info',$stock_info);
		$this->assign('goods_info',$goods_info);
		return $this->fetch();
	}

	//补货中心
	public function replenishment_center(){
		$order = M('order');
		// $replenishment = $order->where(['user_id'=>$this->user_id,'order_type'=>2])->field('order_id,order_sn,order_status,shipping_status,pay_status')->select();

		$where = ' user_id=:user_id';
        $bind['user_id'] = $this->user_id;

        $where .= ' and order_type=2';

        // 搜索订单 根据商品名称 或者 订单编号     
        if($search_key){
          $where .= " and (order_sn like :search_key1 or order_id in (select order_id from `".C('database.prefix')."order_goods` where goods_name like :search_key2) ) ";
        }
        $where.=' and prom_type < 5 ';//虚拟拼团订单不列出来
        
        $order_str = "add_time DESC";
        $order_list = $order->order($order_str)->where(['order_status'=>['neq',3]])->where($where)->bind($bind)->select();

        //获取订单商品
        $model = new UsersLogic();
        foreach($order_list as $k=>$v){
            // $v['invoice_no'] = $this->invoice_no($v['order_id']);
            $order_list[$k] = set_btn_order_status($v);  // 添加属性  包括按钮显示属性 和 订单状态显示属性
            $data = $model->get_order_goods($v['order_id']);
            $order_list[$k]['goods_list'] = $data['result'];
            
            foreach ($data['result'] as $key => $va) {
                $order_list[$k]['goods_count'] += $va['goods_num']; 
                $order_list[$k]['goods_list'][$key]['images'] = goods_thum_images($va['goods_id'],60,60);
            }
            if($order_list[$k]['prom_type'] == 4){
                $pre_sell_item =  Db::name('goods_activity')->where(array('act_id'=>$order_list[$k]['prom_id']))->find();
                $pre_sell_item = array_merge($pre_sell_item,unserialize($pre_sell_item['ext_info']));
                $order_list[$k]['pre_sell_is_finished'] = $pre_sell_item['is_finished'];
                $order_list[$k]['pre_sell_retainage_start'] = $pre_sell_item['retainage_start'];
                $order_list[$k]['pre_sell_retainage_end'] = $pre_sell_item['retainage_end'];
            }else{
                $order_list[$k]['pre_sell_is_finished'] = -1;//没有参与预售的订单
            }
            if ($v['order_status'] == 3 && ($v['pay_status'] == 1 || $v['pay_status'] == 4 || $v['pay_status'] == 3)) {
                $order_list[$k]['cancel_info'] = 1; // 取消订单详情
            }
        }

        // dump($order_list);
		return $this->fetch();
	}

	//奖励明细
	public function bonus_details(){
		return $this->fetch();
	}

	//代理升级
	public function agent_upgrade(){
		$all_level = M('user_level')->order('level_id asc')->field('level_id,level_name,amount,describe,lower_rank,team')->select();
		$this->assign('all_level',$all_level);
		return $this->fetch();
	}

	//升级代理提交
	public function apply_agent(){
		$id = I('get.id');
		if($id == 2){
			$num = 1;
		}else{
			for ($i=$id; $i < $id+1; $i++) { 
				$num = $i-8;
			}
		}
		//礼包信息
		$z_upgrade_suite = M('z_upgrade_suite');

		$upgrade_suite = $z_upgrade_suite->alias('s')->join('newtp_user_level l', 'l.level_id = s.level_id')->where('s.level_id='.$id)->field('s.id,s.level_id,s.goods_info,s.goods_id_str,l.level_name,l.pinyin,l.describe,l.amount')->find();
		//礼包商品信息
		$where = ['is_on_sale'=>1 , 'goods_id'=> ['in',$upgrade_suite['goods_id_str']], 'is_virtual' => ['exp' ,"=0 or virtual_indate > ".time()]];

        $goods_info = $this->get_goods_id_info($where);
        $this->assign('num',$num);
        $this->assign('upgrade_suite',$upgrade_suite);
        $this->assign('goods_info',$goods_info);
        $this->assign('goods_num',json_decode($upgrade_suite['goods_info'],true));
        
		return $this->fetch();
	}

	//提交资料
	public function data_submitting(){
		if(IS_AJAX){
			$dataPost = I('post.');
			$shop_application_log = M('shop_application_log');

			if(!empty($dataPost['invicode'])){
				$users = M('users');
				$invicode = $users->where(['is_lock'=>0,'invitation_code_own'=>$dataPost['invicode']])->find();
				if(empty($invicode)){
					echo json_encode(['status'=>0,'msg'=>'邀请码不存在']);exit;
				}
			}

			$inte = $shop_application_log->where(['user_id'=>$this->user_id,'grade'=>$dataPost['grade'],'status'=>0])->find();
			if($inte){
				echo json_encode(['status'=>0,'msg'=>'您已提交此申请，请勿重复提交']);exit;
			}
			$data = [
				'user_id' => $this->user_id,
				'invitation_code' => $dataPost['invicode'],  //邀请码
				'name' => $dataPost['username'],  //姓名
				'phone' => $dataPost['userphone'],  //电话
				'id_card' => $dataPost['useridcode'],  //身份证
				'wechat' => $dataPost['wechatnumber'],  //微信号
				'mailbox' => $dataPost['usermailbox'],  //邮箱
				'grade' => $dataPost['grade'],  //身份等级
				'identity' => $dataPost['identity'],  //卖家类型身份
				'shop_name' => $dataPost['storename'],  //店铺名
				'shop_introduce' => $dataPost['storeintroduction'],  //店铺介绍
				'shop_logo' => $this->get_base_img($dataPost['shop_logo']),  //店铺logo
				'application_time' => time(),
			];
			$count = count($dataPost['arr']);
			$identity_img = [];
			for ($i=0; $i < $count; $i++) { 
				$identity_img[] = $this->get_base_img($dataPost['arr'][$i]);
			}

			$data['identity_img'] = implode(',', $identity_img);//身份图片
			$res = $shop_application_log->add($data);
			if($res){
				echo json_encode(['status'=>1,'msg'=>'提交成功']);exit;
			}else{
				echo json_encode(['status'=>0,'msg'=>'提交失败']);exit;
			}
		}
	}


	public function get_base_img($image){
		$imageName = "25220_".date("His",time()).rand(1111,9999).'.png';
		if (strstr($image,",")){
		    $image = explode(',',$image);
		    $image = $image[1];
		}
		$path = "upload/shop/".date("Ymd",time());
		if (!is_dir($path)){ //判断目录是否存在 不存在就创建
		    mkdir($path,0777,true);
		}
		$imageSrc=  $path."/". $imageName;  //图片名字

		$r = file_put_contents(str_replace("\\","/",ROOT_PATH) .$imageSrc, base64_decode($image));//返回的是字节数
		if ($r) {
		    return $pic = "/".$imageSrc;
		}
	}
	

	//等级说明
	public function levelDescription(){
		$all_level = $this->all_level();//等级介绍
		$user_info = $this->user_info;
		$team_num = $agent_num = '';
		foreach ($all_level as $k => $v) {
			if($v['level_id'] == 2 && $user_info['level'] == 2){//团队人数与代理
				$lack['upgrade'] = $agent_num = $team_num = $k;
			}elseif($v['level_id'] == $user_info['level'] && $user_info['level'] != 14){
				$lack['upgrade'] = $agent_num = $k;
			}
		}
		$team = $all_level[$team_num+1]['team'];
		if($user_info['gvxx'] < $team && $team_num !== ''){
			$lack['team'] = $team - $user_info['gvxx'];
		}
		$agent= $all_level[$agent_num+1]['lower_rank'];
		if($user_info['lower_stratum_number'] < $agent && $agent_num !== ''){
			$lack['agent'] = $agent - $user_info['lower_stratum_number'];
		}
		$this->display_level($user_info['level']);
		$this->assign('lack',$lack);
		return $this->fetch();
	}

	//获得所有层级
	public function all_level(){
		$all_level = M('user_level')->where('level_id >0')->select();
		$this->assign('all_level',$all_level);
		return $all_level;
	}

	public function display_level($level_id){
		switch ($level_id) {
			case '10':
				$display = 0;
				break;
			case '11':
				$display = 1;
				break;
			case '12':
				$display = 2;
				break;
			case '13':
				$display = 3;
				break;
			case '14':
				$display = 4;
				break;
			default:
				$display = 5;
				break;
		}
		$this->assign('display',$display);
	}





}