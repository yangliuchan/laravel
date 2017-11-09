<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;
use App\Template;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function corporateInformation(Request $request){

        $user = request()->user()['attributes'];

        $company = Company::where('uid',$user['uid'])->first();

        $url = $request->url();
        //dd($url);

        if($company){
            return view('admin.info',compact('company'));
        }else{
            return view('admin.info');
        }

    }

    public function postInformation(Request $request){

        $postInput = request()->input();
        //dd( $postInput );

        $this -> user = request()->user()['attributes'];
        $company = Company::updateOrCreate(
            ['uid' => $this -> user['uid']],
            [
                'co_name' => $postInput['co_name'],
                'co_profile' => $postInput['co_profile'],
                'mobile' => $postInput['mobile'],
                'address' => $postInput['address'],
                'domain' => $postInput['domain']
            ]
        );

        if($company){
            return redirect('/info')->with('message', '提交成功!');
            //return redirect('/prompt')->with(['message'=>'修改成功！','url' =>'info', 'jumpTime'=>300000,'status'=>true]);
        }else{
            return redirect('/info')->with('message', '系统错误！请联系QQ客服 287643563');
        }


    }

    public function changePassword(Request $request){

        $oldpassword = $request->input('oldpassword');
        $password = $request->input('password');
        $email = $request->input('email');
        $data = $request->all(); //接收所有的数据
        $rules = [
            'oldpassword'=>'required|between:6,20',
            'password'=>'between:6,20|confirmed',

        ];
        $messages = [
            'required' => '密码不能为空',
            'between' => '密码必须是6~20位之间',
            'confirmed' => '新密码和确认密码不匹配',

        ];
        $validator = Validator::make($data, $rules, $messages);

        $user = Auth::user();
        //dd($user);
        $validator->after(function($validator) use ($oldpassword, $user) {
            if (!\Hash::check($oldpassword, $user->password)) { //原始密码和数据库里的密码进行比对
                $validator->errors()->add('oldpassword', '原密码错误'); //错误的话显示原始密码错误
            }
        });
        if ($validator->fails()) {      //判断是否有错误
            return back()->withErrors($validator);  //重定向页面，并把错误信息存入一次性session里
        }
        $user->email = $email;
        if ($password){
            $user->password = bcrypt($password);       //使用bcrypt函数进行新密码加密
        }


        $user->save();      //成功后，保存新密码
        Auth::logout();  //更改完这次密码后，退出这个用户
        return redirect('/prompt')->with(['message'=>'修改成功！','url' =>'login', 'jumpTime'=>3,'status'=>true]);
    }

    public function selectTemplate(Request $request){
        $templates = Template::all();
        $user = Auth::user();
        $company = Company::where('uid','=',$user -> uid) -> first();
        return view('admin.template', compact('templates','company'));
    }

    public function changeTemplate(Request $request){
        $post = $request -> input();
        $user = Auth::user();
        $company = Company::where('uid','=',$user -> uid) -> first();
        $company -> tid = $post['tid'];
        $bool = $company -> save();
        echo json_encode($bool);
    }

    /**
    编辑店铺模板
     **/
    public function editShop(Request $request){
        $user = Auth::user();  // 返回单条记录;
        $company = Company::where('uid','=',$user -> uid) -> first();
        $template = Template::where('id','=',$company -> tid) -> first();
        if($template){
            //dd($template);
            $temp_data = DB::table('template_edit') -> where('cid',$company -> cid) -> where('tid',$template -> tid) -> first();
            $temp_data = array(
                'title1' => '正标题',
                'title2' => '副标题'
            );
            return view('template.'.$template -> name.'.index')->with([
                'name' => $template -> name,
                'temp_data' => json_encode($temp_data)
            ]);

        }else{
            return view('welcome')->with('msg','dsads');
        }
    }

    public function editTemplate(Request $request){
        $post = $request -> input();
        $user = Auth::user();
        $company = Company::where('uid','=',$user -> uid) -> first();
        $company -> tid = $post['tid'];
        $bool = $company -> save();
        echo json_encode($bool);
    }
}
