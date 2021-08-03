<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['c_name','c_image','parent_id'];
    public $timestamps = false;
   
     
    public function getCImageAttribute($img){
        if ($img != '') {
            return url(config('constant.CATEGORY_IMG_PATH_LINK')) . '/' . $img;
        }else{
            return url(config('constant.DUMMY_CATEGORY_IMG'));
        }
    }
    public static function addCategory($param){
      
        $cateogry = new self;
        $cateogry->c_name = $param['category_name'];
        $cateogry->parent_id = $param['parent_category'];
        if (isset($param['category_image']) && $param['category_image'] != '') {
            $img = $param['category_image'];
            $dir_path = public_path( \Config::get('constant.CATEGORY_IMG_PATH_LINK'));
            if (!file_exists($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            $ext = $img->getClientOriginalExtension();
            $fileName = 'category'.time() . "." . $ext;
            if ( $img->move($dir_path, $fileName)) {
                $cateogry->c_image = $fileName;
            }
        }
        if ($cateogry->save()) {
            $res = \General::success_res('Category added successfully.');
        }else{
            $res = \General::success_res('Something went wrong.');
        }
        return $res;
    }
    
    public static function filter_category($param){

        $cateogry = self::orderBy('id','desc');
        if(isset($param['cateogry']) && $param['cateogry'] != ''){
            $cateogry = $cateogry->where('company','like','%'.$param['company'].'%');
        }
        $count =$cateogry->count();
        $len = $param['itemPerPage'];
        // $len = 5;
        $start = ($param['currentPage']-1) * $len;
        $cateogry =$cateogry->skip($start)->take($len)->get()->toArray();
        $res['data'] =$cateogry;
        $res['total_record'] = $count;
        
        return $res;
    }
    public static function deleteCategory($param){
        $category = self::where('id',$param['record_id'])->first();
        $old_img = $category['c_image'];
        $old_img = basename($category['c_image']);
        \File::delete(public_path(\Config::get('constant.CATEGORY_IMG_PATH_LINK')).'/'.$old_img);
        if ($category->delete()) {
            $res = \General::success_res('Record delete successfully.');
        }else{
            $res = \General::error_res('Something went wrong.');
        }
        return $res;
    }
    public static function getAllCategory(){
        $category = self::where('parent_id',null)->get()->toArray();
        return $category;
    }
    public static function updateCategory($param){
        $category = self::where('id',$param['category_id'])->first();
        if (isset($param['category_image']) && $param['category_image'] != '') {
            $old_img = basename($category->c_image);
            $img = $param['category_image'];
            $dir_path = public_path( \Config::get('constant.CATEGORY_IMG_PATH_LINK'));
            if (!file_exists($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            $ext = $img->getClientOriginalExtension();
            $fileName = 'category'.time() . "." . $ext;
            if ( $img->move($dir_path, $fileName)) {
                $category->c_image = $fileName;
            }
        }
        $category->c_name = $param['category_name'];
        $category->parent_id = $param['parent_category'];
        if (isset($fileName) && $fileName != '') {
            \File::delete(public_path(\Config::get('constant.CATEGORY_IMG_PATH_LINK')).'/'.$old_img);
        }
        if ($category->save()) {
            $res = \General::success_res('Category updated successfully.');
        }else{
            $res = \General::error_res('Something went wrong.');
        }
        return $res;
    }
}
