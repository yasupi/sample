<?php
namespace Model;

class test2 extends \Model {
    public static function model_u_images_a_category() {
        $db_query = \DB::select('id', 'name')->from('u_images_a_category')->execute();
        return $db_query->as_array();
    }

    public static function model_u_images_b_category() {
        $db_query = \DB::select('id', 'name')->from('u_images_b_category')->execute();
        return $db_query->as_array();
    }
}

/*
class test2 extends \Model {
    public static function model_u_images_search() {
        $db_query = \DB::select('id', 'name')->from('u_images_a_category', 'u_images_b_category')->where('title', $search)->execute();
        return $db_query->as_array();
    }
*/