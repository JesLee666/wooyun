<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller{

    /**
     * Test
     *
     * @return \Illuminate\Http\Response
     */
    public function getTest(){
        $phone = "18702982564";
        $content = "894578";
        $url='http://api.id98.cn/api/sms?appkey=507e2ad633a356b517424b37b096ad6f&phone=18702982564&templateid=1000&param='. $content;
        p($url);
        $result_info = http("get",$url,null);
        p($result_info);
        die;
        // set_time_limit(0);
        // $num = 0;
        // $image_domain = config('app.image_domain');
        // $articles = DB::table("article")->where("column","drops")->get();
        // foreach ($articles as $key => $article) {
        //     $filepath = public_path().$article->path;
        //     $content = file_get_contents($filepath);
        //     preg_match_all('/src="(.+?)"/i', $content, $m);
        //     $imgs = $m[1];
        //     if(count($imgs)>0){
        //         $thumbnail = $imgs[0];
        //         $thumbnail = str_replace("../images/",'',$thumbnail);
        //         $data = array(
        //             'thumbnail' => $thumbnail,
        //             );
        //         DB::table("article")->where("id",$article->id)->update($data);
        //     }
        //     unset($content);
        // }
        // die;
        // $num = 0;
        // include_once app_path().'\Library\simple_html_dom.php';
        // $articles = DB::table("article")->where("column","bugs")->get();
        // foreach ($articles as $key => $article) {
        //     $html = file_get_html(public_path().$article->path);
        //     $author = $html->find('ul',0)->find("li",1)->find("a",0)->text();
        //     $time = $html->find('ul',0)->find("li",2)->text();
        //     $time = trim(str_replace("提交时间：", "", $time)).":00";
        //     $num++;
        //     $data = array(
        //         'author' => $author,
        //         'created_at' => $time,
        //         );
        //     DB::table("article")->where("id",$article->id)->update($data);
        //     unset($html);
        // }
        // die;
        // $path = public_path().'\data\bugs';
        // $path2 = public_path().'\data\bugs2';
        // $num = 0;
        // $files = file(public_path().'\data\mune.html');
        // foreach ($files as $key => $str) {
        //     $str = str_replace("\r\n","",trim($str));
        //     $strarr = explode(" ### ",$str);
        //     $oldname = public_path().'\data\\'.$strarr[0];
        //     $title = $strarr[1];
        //     $newname = md5($title.rand(0,99999999)).'.html';
        //     $num++;
        //     rename(iconv("utf-8","gbk//ignore",$oldname),iconv("utf-8","gbk",$path2.'\\'.$newname));
        //     $data[] = array(
        //         'path' => '\data\bugs\\'.$newname,
        //         'title' => $title,
        //         'column' => 'bugs',
        //         );
        //     while(count($data) == 1000){
        //         DB::table("article")->insert($data);
        //         $data = array();
        //         sleep(3);
        //         unset($strarr);
        //     }
        // }
        // if(count($data)>0){
        //     DB::table("article")->insert($data);
        // }
        // p($num);
        // die;
        // $path = base_path().'\data\bugs';
        // $path2 = base_path().'\data\bugs2';
        // $dh = opendir($path);
        // $files = file_get_contents(base_path().'\data\mune.html');
        // $num = 0;
        // $data = array();
        // while (($file = readdir($dh)) !== false) {
        //     if ($file!='.' && $file!='..'){
        //         $oldname = str_replace(".html",'',$file);
        //         $title = $oldname;
        //         $newname = md5($oldname).'.html';
        //         $oldname .= '.html';
        //         echo $path.'\\'.$file.'<br>';
        //         echo $path.'\\'.$oldname.'<br>';
        //         echo $path.'\\'.$newname.'<br>';
        //         if(rename(iconv("utf-8","gbk//ignore",$path.'\\'.$oldname),iconv("utf-8","gbk",$path2.'\\'.$newname))){
        //             echo '成功<br>';
        //         }else{
        //             echo '失败<br>';
        //         }
        //         echo '-------------------------------------------------------------------------------<br>';
        //         $num++;
        //         $data[] = array(
        //             'path' => '\data\drops\\'.$newname,
        //             'title' => $title,
        //             );
        //     }
        // }
        // echo '遍历文件数：'.$num.'<br>';
        // echo '写入数据量：'.count($data).'<br>';
        // DB::table("article")->insert($data);
        // die;
        // $path = base_path().'\data\drops';
        // $path2 = base_path().'\data\drops2';
        // $dh = opendir($path);
        // $num = 0;
        // $data = array();
        // while (($file = readdir($dh)) !== false) {
        //     if ($file!='.' && $file!='..'){
        //         $file = iconv("gbk","utf-8",$file);
        //         $oldname = str_replace(".html",'',$file);
        //         $title = $oldname;
        //         $newname = md5($oldname).'.html';
        //         $oldname .= '.html';
        //         echo $path.'\\'.$file.'<br>';
        //         echo $path.'\\'.$oldname.'<br>';
        //         echo $path.'\\'.$newname.'<br>';
        //         if(rename(iconv("utf-8","gbk//ignore",$path.'\\'.$oldname),iconv("utf-8","gbk",$path2.'\\'.$newname))){
        //             echo '成功<br>';
        //         }else{
        //             echo '失败<br>';
        //         }
        //         echo '-------------------------------------------------------------------------------<br>';
        //         $num++;
        //         $data[] = array(
        //             'path' => '\data\drops\\'.$newname,
        //             'title' => $title,
        //             );
        //     }
        // }
        // echo '遍历文件数：'.$num.'<br>';
        // echo '写入数据量：'.count($data).'<br>';
        // DB::table("article")->insert($data);
    }

    /**
     * Bug列表
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $column = "bugs";
        $keyword = "";
        $articles = DB::table("article")->where('column', $column)->orderBy("created_at","desc")->take(30)->get();
        $image_domain = config('app.image_domain');
        return view("articles", compact("articles","column","keyword","image_domain"));
    }

    /**
     * 知识库列表
     *
     * @return \Illuminate\Http\Response
     */
    public function getDrops()
    {
        $column = "drops";
        $keyword = "";
        $articles = DB::table("article")->where('column', $column)->orderBy("created_at","desc")->take(30)->get();
        $image_domain = config('app.image_domain');
        return view("articles", compact("articles","column","keyword","image_domain"));
    }

    /**
     * 检索
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearch()
    {
        $column = I('column');
        $column = $column != 'drops' ? 'bugs' : 'drops';
        $keyword = I('q');
        $db_obj = DB::table("article")->where('column',$column);
        if(!is_null($keyword)){
            $db_obj->where('title','like','%'.$keyword.'%');
        }
        $articles = $db_obj->orderBy("created_at","desc")->take(30)->get();
        $image_domain = config('app.image_domain');
        return view("articles", compact("articles","column","keyword","image_domain"));
    }

    /**
     * 异步加载数据
     *
     * @return \Illuminate\Http\Response
     */
    public function getDatas()
    {
        $column = I('column');
        $column = $column != 'drops' ? 'bugs' : 'drops';
        $keyword = I('q');
        $p = intval(I('p'));
        $p = $p <= 0 ? 1 : $p;
        $db_obj = DB::table("article")->where('column',$column);
        if(!is_null($keyword)){
            $db_obj->where('title','like','%'.$keyword.'%');
        }
        $size = 30;
        $articles = $db_obj->orderBy("created_at","desc")->skip(($p-1)*$size)->take($size)->get();
        $data = array(
            'result' => 0,
            'description' => '获取数据成功',
            'data' => $articles
            );
        echo json_encode($data);
        die;
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getArticle($id)
    {
        $article = DB::table("article")->find($id);
        if(is_null($article)){
            abort(404);
        }
        $article->view += 1;
        DB::table("article")->where('id',$id)->update(['view'=>$article->view]);
        $article->content = file_get_contents(base_path().'\public\\'.$article->path);

        $image_domain = config('app.image_domain');
        $article->content = str_replace("../images/",$image_domain,$article->content);
        $column = $article->column;
        $keyword = "";
        return view("article", compact("article","column","keyword","image_domain"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
