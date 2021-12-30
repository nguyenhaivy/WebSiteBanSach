<?php
class Product extends Db{
    //Lấy ra tất cả sản phẩm
    function getAll(){
        return $this->selectQuery('select * from product');
    }

    //Lấy sản phẩm có ID = ?
    function getById($product_id){
        $sql = "select * from product where product_id = ?";
        $arr=[$product_id];
        return $this->selectQuery($sql, $arr);
    }

    //Tìm sản phẩm theo tên
    function search($kw){
        $sql = "select * from product like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
}