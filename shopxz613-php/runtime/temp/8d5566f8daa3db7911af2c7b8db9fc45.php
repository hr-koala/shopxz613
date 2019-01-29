<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"./template/web/rainbow/agent\ajaxIncome.html";i:1547189899;}*/ ?>
<div class="has-data">
    <ul>
        <?php if(is_array($bonus_list) || $bonus_list instanceof \think\Collection || $bonus_list instanceof \think\Paginator): $i = 0; $__LIST__ = $bonus_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bonus): $mod = ($i % 2 );++$i;?>
            <li class="income-detail-jiangli">
                <div class="income-jiangli-left">
                    <div class="income-jiangli-img">
                        <?php if($bonus[type] == 1): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_qiandai.png">
                        <?php elseif($bonus[type] == 2): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_tuiguang.png">
                        <?php elseif($bonus[type] == 3): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_jinji.png">
                        <?php elseif($bonus[type] == 5): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_tongji.png">
                        <?php elseif($bonus[type] == 6): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_xiaoshou.png">
                        <?php elseif($bonus[type] == 7): ?>
                            <img src="/template/web/rainbow/static/tonghaoran/images/icon_jifen.png">
                        <?php endif; ?>
                    </div>
                    <div class="income-jiangli-txt">
                        <div class="income-jiangli-left-txt">
                            <?php if($bonus[type] == 1): ?>直推奖励
                            <?php elseif($bonus[type] == 2): ?>推广奖励
                            <?php elseif($bonus[type] == 3): ?>晋级奖励
                            <?php elseif($bonus[type] == 5): ?>同级奖励
                            <?php elseif($bonus[type] == 6): ?>销售提成
                                <?php if($bonus['user_money'] == 0): ?>&nbsp;<span style="color: #4f5352;">(待返)</span><?php endif; elseif($bonus[type] == 7): ?>积分红利
                                <?php if($bonus['user_money'] == 0): ?>&nbsp;<span style="color: #4f5352;">(待返)</span><?php endif; endif; ?>
                        </div>
                        <div class="income-jiangli-left-date">
                            <?php echo date('Y-m-d H:i:s',$bonus['change_time']); ?>
                        </div>
                    </div>
                </div>
                <div class="income-jiangli-right">
                    <?php if(($bonus[type] == 6) AND ($bonus['user_money'] == 0)): ?>
                        <span style="color: #6f6d69;">+ <?php echo $bonus['sales_award']; ?></span>
                    <?php elseif(($bonus[type] == 7) AND ($bonus['user_money'] == 0)): ?>
                        <span style="color: #6f6d69;">+ <?php echo $bonus['bonus']; ?></span>
                    <?php else: ?>
                        + <?php echo $bonus['user_money']; endif; ?>
                </div>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>