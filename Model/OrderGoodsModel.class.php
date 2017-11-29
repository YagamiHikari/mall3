<?php
header("Content-Type:text/html;charset=utf-8");
class OrderGoodsModel extends Model{
    protected $table = 'ordergoods';
    protected $primarykey = 'og_id';

    //删除对应订单的商品
    public function del_order_goods($order_id){
        $sql = 'delete from '.$this->table.' where order_id = '.$order_id;
        return $this->db->query($sql);
    }
}

?>