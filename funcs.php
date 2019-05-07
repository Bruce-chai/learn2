<?php
/**
 * Created by PhpStorm.
 * User: chaishuai
 * Date: 2019/5/7
 * Time: 17:35
 */

/**
 * 数组格式化为无限极菜单
 * chaishuai
 * @param     $menu_List
 * @param int $pid         父id
 *
 * @return array
 * 2019/3/19 17:26
 */
function get_tree($menu_List,$pid=0)
{
    $tree = array();
    foreach ($menu_List as $k=>$v)
    {
        if($v['parentid'] == $pid)
        {
            $v['child'] = $this->get_tree($menu_List,$v['menu_id']);
            array_push($tree,$v);
        }
    }
    return $tree;
}