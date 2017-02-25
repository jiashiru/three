<?phpnamespace App\Http\Controllers;use App\Model\Role;use App\Model\Admin;use Illuminate\Http\Request;use DB;class AdminController extends CommonController{    //管理员展示    public function show()    {        $adminList = Admin::with('roles')->take(5)->get()->toArray();        return view('admin.show', ['adminList' => $adminList]);    }    //管理员添加    public function add(Request $request)    {        $roleData = Role::all()->toArray();        if ($request->isMethod('POST')) {                $this->validate($request, [                'uname' => 'required|min:2|max:20',                'filename' => 'required',                'role_id' => 'required',                'password_confirmation'  => 'required|between:6,32',                'password'  => 'required|between:6,32|confirmed',            ],[                'required' => ':attribute 为必填项',                'min' => ':attribute 长度不符合要求',                'max' => ':attribute 长度不符合要求',            ],[                'uname' => '姓名',                'filename' => '头像',                'role_id' => '角色',                'password' => '密码',            ]);            $data = $request->input();//            dd(md5(md5($data['password'], true)));die;            $img = $request->file('filename');            if ($img->isValid()) {                //源文件名                $originalName = $img->getClientOriginalName();                $path = public_path('upload');                $img->move($path, $originalName);                $admin = new Admin();                $admin->admin_name = $data['uname'];                $admin->admin_photo = $originalName;                $admin->admin_password = md5(md5($data['password'], true));                if ($admin->save()) {                    foreach ($data['role_id'] as $val) {                        $admin_id = $admin->admin_id;                        DB::table('admin_role')->insert(['admin_id' => $admin_id, 'role_id' => $val]);                    }                    return redirect('adminShow')->with('success', '添加成功');                } else {                    return redirect('adminAdd')->with('error', '添加失败');                }            }        }        return view('admin.add', ['roleData' => $roleData]);    }    //管理员修改    public function edit(Request $request)    {        $admin_id = $request->get('id');        $roles = Role::all()->toArray();        $admin = Admin::with('roles')->take(['admin_id' => $admin_id])->get()->toArray();        if ($request->isMethod('POST')) {            $this->validate($request, [                'uname' => 'required|min:2|max:20',                'filename' => 'required',                'role_id' => 'required',                'password'  => 'required|between:6,32|',            ],[                'required' => ':attribute 为必填项',                'min' => ':attribute 长度不符合要求',                'max' => ':attribute 长度不符合要求',            ],[                'uname' => '姓名',                'filename' => '头像',                'role_id' => '角色',                'password' => '密码',            ]);            $data = $request->input();//            dd($data);die;//            var_dump($data);            $img = $request->file('filename');            if ($img->isValid()) {                //源文件名                $originalName = $img->getClientOriginalName();                $path = public_path('upload');                $img->move($path, $originalName);                $admins = Admin::where(['admin_id' => $data['admin_id']])->first();//                echo '<pre>';//                var_dump($admins);die;                $admins->admin_name = $data['uname'];                $admins->admin_photo = $originalName;                $admins->admin_password = md5(md5($data['password'], true));                if ($admins->save()) {                    DB::table('admin_role')->where('admin_id', '=', $data['admin_id'])->delete();                    foreach ($data['role_id'] as $val) {                        DB::table('admin_role')->insert(['admin_id' => $data['admin_id'], 'role_id' => $val]);                    }                    return redirect('adminShow')->with('success', '修改成功');                } else {                    return redirect('adminEdit')->with('error', '修改失败');                }            }        }        return view('admin.edit', ['admin' => $admin[0], 'roles' => $roles]);    }    //管理员删除    public function delete(Request $request)    {        $admin_id = $request->get('id');        $bool = Admin::where('admin_id', '=', $admin_id)->delete();        if ($bool) {            $bools = DB::table('admin_role')->where('admin_id', '=', $admin_id)->delete();            if ($bools) {                return redirect('adminShow')->with('success', '删除成功');            } else {                return redirect('adminShow')->with('error', '删除失败');            }        } else {            return redirect('adminShow')->with('error', '删除失败');        }    }}=======<?phpnamespace App\Http\Controllers;use App\Http\Requests\Request;class AdminController extends CommonController{    public function adminList()    {        $name = '张三';        return view('admin.adminList', ['name' => $name]);    }    public function adminAdd()    {        return view('admin.adminAdd');    }}>>>>>>> master