<?php
namespace App\Http\Controllers;


use DB;
use App\Model\Goods;
use App\Model\Type;
use App\Model\Brand;
use Illuminate\Http\Request;

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
        if (isset($data['is_on_sale'])) {
            $keys[] = 'is_on_sale';
            $values[] = $data['is_on_sale'];
        }
        if ($data['intro_type']) {
            $keys[] = $data['intro_type'];
            $values[] = 1;
        }
       $where = array_combine($keys, $values);
        $goodsList = Goods::where($where)->where('keywords', 'like', '%'.$data['keywords'].'%')->paginate(10);
        echo json_encode($goodsList);exit;

    }

    //商品添加
    public function add(Request $request)
    {
        if ($request->isMethod('POST')) {

            $data = $request->input();

            $goods = new Goods();
            $goods->cate_name = $data['cate_name'];
            $goods->parent_id = $data['parent_id'];
            $goods->sort = $data['sort'];
            $goods->is_show = $data['is_show'];
            $goods->show_in_nav = $data['show_in_nav'];
            $goods->keywords = $data['keywords'];
            $goods->cate_desc = $data['cate_desc'];

            if ($goods->save()) {
                return redirect('goodsShow')->with('success', '添加成功');
            } else {
                return redirect('goodsAdd')->with('error', '添加失败');
            }
        }

        $typeList = Type::all()->toArray();
        return view('goods.add', ['typeList' => $typeList]);
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
}