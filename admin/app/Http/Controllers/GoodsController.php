<?php
namespace App\Http\Controllers;


use DB;
use App\Model\Goods;
use App\Model\Category;
use App\Model\Type;
use App\Model\Brand;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;


class GoodsController extends CommonController
{
    //商品展示
    public function show()
    {
        $goodsList = Goods::paginate(10);
        $typeList = Type::all()->toArray();
        $brandList = Brand::all('brand_id','brand_name')->toArray();

        return view('goods.show', ['goodsList' => $goodsList, 'typeList' => $typeList, 'brandList' => $brandList]);
    }

    //商品搜索
    public function search(Request $request)
    {
        $data = $request->input();

        //搜索条件
        $keys = [];
        $values = [];
        if ($data['type_id']) {
            $keys[] = 'type_id';
            $values[] = $data['type_id'];
        }
        if ($data['brand_id']) {
            $keys[] = 'brand_id';
            $values[] = $data['brand_id'];
        }
        if ($data['is_on_sale'] !== '') {
            $keys[] = 'is_on_sale';
            $values[] = $data['is_on_sale'];
        }
        if ($data['intro_type']) {
            $keys[] = $data['intro_type'];
            $values[] = 1;
        }
        $where = array_combine($keys, $values);
        $goods = Goods::all()->toArray();

        $totalData = count($goods);
        $page = isset($data['page']) ? $data['page'] : 1;
        $pages = $this->page($page, $totalData, $size = 10);
        $offset = ($page - 1) * 10;
        $goodsList = Goods::where($where)->where('keywords', 'like', '%'.$data['keywords'].'%')->offset($offset)->limit(10)->get()->toArray();


        $str = '';
        foreach($goodsList as $val) {
            if ($val['is_on_sale'] == 1) {
                $img_sale = '<img src = "img/yes.gif" class="image" >';
            } else {
                $img_sale = '<img src = "img/no.gif" class="image" >';
            }
            if ($val["is_best"] == 1) {
                $img_best = '<img src = "img/yes.gif" class="image" >';
            } else {
                $img_best = '<img src = "img/no.gif" class="image" >';
            }
            if ($val['is_new'] == 1) {
                $img_new = '<img src = "img/yes.gif" class="image" >';
            } else {
                $img_new = '<img src = "img/no.gif" class="image" >';
            }
            if ($val['is_hot'] == 1) {
                $img_hot = '<img src = "img/yes.gif" class="image" >';
            } else {
                $img_hot = '<img src = "img/no.gif" class="image" >';
            }
            if ($val['is_limit'] == 1) {
                $img_limit = '<img src = "img/yes.gif" class="image" >';
            } else {
                $img_limit = '<img src = "img/no.gif" class="image" >';
            }
            $str .= '<tr alt = "'.$val["goods_id"].'" >
                                <td >
                                    <input type = "checkbox" class="ckbox" value = "'.$val["goods_id"].'" >
                                    '.$val["goods_id"].'
                                </td >
                                <td >
                                    <span class="c_name" >'.$val["goods_name"].'</span >
                                    <input type = "text" name = "goods_name" class="cname" style = "display: none;" >
                                </td >
                                <td >
                                    <span class="c_name" >'.$val["goods_price"].'</span >
                                    <input type = "text" name = "goods_price" class="cname" style = "display: none;" >
                                </td >
                                <td alt = "is_on_sale" >'.$img_sale.'</td >
                                <td alt = "is_best" >'.$img_best.'</td >
                                <td alt = "is_new" >'.$img_new.'</td >
                                <td alt = "is_hot" >'.$img_hot.'</td >
                                <td alt = "is_limit" >'.$img_limit.'</td >
                                <td >
                                    <span class="text-navy" ><i class="fa fa-file-text-o" ></i > <a href = "http://www.frame.com/yiyuan/three/home/public/indexShop?goods_id='.$val["goods_id"].'" target = "_blank" > 查看</a ></span >
                                    <span class="text-navy" ><i class="glyphicon glyphicon-edit" ></i > <a href = "{{ url(\'goodsEdit\').\'?id=\'.$val[\'goods_id\']}}" > 编辑</a ></span >
                                    <i class="glyphicon glyphicon-trash" ></i > <a href = "javascript:void(0)" class="delete" alt = "{{ $val[\'goods_id\'] }}" onclick = "if (confirm(\'确实要删除吗？\') == false) return false" > 删除</a ></td >
                            </tr >';
    }

   $page = '<div class="pull-right">'.$pages.'</div>';
        $arr = [
            'data' => $str,
            'page' => $page,
        ];
        echo json_encode($arr);exit;
    }

    //分页
    public function page($page = 1, $totalData = 55, $size = 10)
    {
        $totalPage = ceil($totalData/$size);

        $prevPage = $page - 1 > 0 ? $page : 1;

        $nextPage = $page + 1 < $totalPage ? $page : $totalPage;

        $page = '<ul class="pagination"><li><a href="javascript:void(0)" onclick="page('.$prevPage.')">«</a></li>';
        for($i = 1; $i < $totalPage; $i++) {
            if ($page == $i) {
                $page .= '<li class="disabled"><a href="javascript:void(0)" onclick="page('.$i.')" >'.$i.'</a></li>';
            } else {
                $page .= '<li><a href="javascript:void(0)" onclick="page('.$i.')">'.$i.'</a></li>';
            }
        }
        $page .= '<li><a href="javascript:void(0)" onclick="page('.$nextPage.')">»</a></li></ul>';
       return $page;
    }

    //商品添加
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'goods_name' => 'required',
                'type_id' => 'required',
                'cate_id' => 'required',
                'brand_id' => 'required',
                'goods_price' => 'required',
                'is_on_sale' => 'required',
                'is_new' => 'required',
                'is_hot' => 'required',
                'keywords' => 'required',
                'goods_desc' => 'required',
            ],[
                'required' => ':attribute 为必填项',
            ],[
                'goods_name' => '商品名称',
                'type_id' => '分类',
                'cate_id' => '类型',
                'brand_id' => '品牌',
                'goods_price' => '商品价格',
                'is_on_sale' => '是否销售',
                'is_new' => '是否最新',
                'is_hot' => '是否最热',
                'keywords' => '关键词',
                'goods_desc' => '商品描述',
            ]);
            $goods = new Goods();
            $goods->goods_name = $request['goods_name'];
            $goods->type_id = $request['type_id'];
            $goods->cate_id = $request['cate_id'];
            $goods->brand_id = $request['brand_id'];
            $goods->goods_price = $request['goods_price'];
            $goods->is_on_sale = $request['is_on_sale'];
            $goods->is_new = $request['is_new'];
            $goods->is_hot = $request['is_hot'];
            $goods->keywords = $request['keywords'];
            $goods->goods_desc = $request['goods_desc'];

            if ($goods->save()) {
                return redirect('goodsShow')->with('success', '添加成功');
            } else {
                return redirect('goodsAdd')->with('error', '添加失败');
            }
        }
        $typeList = Type::all()->toArray();
        $BrandList = Brand::all()->toArray();
        return view('goods.add', ['typeList' => $typeList,"BrandList"=>$BrandList]);
    }

    //商品修改
    public function edit(Request $request)
    {
        if ($request->isMethod('POST')) {

            $data = $request->input();
            $goods = Goods::find($data['cate_id']);
            $goods->cate_name = $data['cate_name'];
            $goods->parent_id = $data['parent_id'];
            $goods->sort = $data['sort'];
            $goods->is_show = $data['is_show'];
            $goods->show_in_nav = $data['show_in_nav'];
            $goods->keywords = $data['keywords'];
            $goods->cate_desc = $data['cate_desc'];

            if ($goods->save()) {
                return redirect('goodsShow')->with('success', '修改成功');
            } else {
                return redirect('goodsEdit')->with('error', '修改失败');
            }
        }
        $cate_id = $request->get('id');
        $goodsList = Goods::find($cate_id)->toArray();
        $typeList = Type::all()->toArray();
        return view('goods.edit', ['goodsList' => $goodsList, 'typeList' => $typeList]);
    }



    //商品删除
    public function delete(Request $request)
    {
        $goods_id = $request->get('id');
        $bool = Goods::where('goods_id', '=', $goods_id)->delete();
        if ($bool) {
            echo 1;exit;
        } else {
           echo 0;exit;
        }
    }

    //即点即改
    public function alter(Request $request)
    {
        $data = $request->all();
//        dd($data);
        if(isset($data['val'])) {
            $goods = Goods::find($data['id']);
            $goods->$data['name'] = $data['val'];

            if ($goods->save()) {
                echo 1;exit;
            } else {
                echo 0;exit;
            }
        } else {
            $goods = Goods::find($data['id']);
            $goods->$data['name'] = $data['flog'];
            if ($goods->save()) {
                echo 1;exit;
            } else {
                echo 0;exit;
            }
        }
    }

    //类型ajax请求方法
    public  function ajax(Request $request)
    {
        $id = $request->id;
        $type = Category::where("parent_id",$id)->get()->toArray();
        return json_encode($type);
    }


}