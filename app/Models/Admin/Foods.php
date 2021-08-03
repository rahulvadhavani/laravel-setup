<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['food_name','type','price','selling_price','category','sub_categories','main_image','images','description'];
     
    public function getMainImageAttribute($main_image){
        if ($main_image != '') {
            return url(config('constant.FOOD_IMG_PATH_LINK')) . '/' . $main_image;
        }else{
            return url(config('constant.DUMMY_FOOD_IMG'));
        }
    }
    public static function addFood($param){
       
        $food = new self;
        $food->food_name = $param['food_name'];
        $food->type = $param['food_type'];
        $food->price = $param['price'];
        $food->selling_price = $param['selling_price'];
        $food->category = $param['category'];
        $food->sub_categories = json_encode($param['related_category']);
        $food->description = $param['description'];
        if (isset($param['main_image']) && $param['main_image'] != '') {
            $img = $param['main_image'];
            $dir_path = public_path( \Config::get('constant.FOOD_IMG_PATH_LINK'));
            if (!file_exists($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            $ext = $img->getClientOriginalExtension();
            $fileName = 'food_img'.time() . "." . $ext;
            if ( $img->move($dir_path, $fileName)) {
                $food->main_image = $fileName;
            }
        }
        if (isset($param['images']) && $param['images'] != '') {
            $imgarr = [];
            foreach ($param['images'] as $key => $image) {            
                $img = $image;
                $dir_path = public_path( \Config::get('constant.FOOD_IMG_PATH_LINK'));
                if (!file_exists($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $ext = $img->getClientOriginalExtension();
                $fileName = 'foods'.time() . "." . $ext;
                if ( $img->move($dir_path, $fileName)) {
                    array_push($imgarr, $fileName);
                }
            }
            $food->images = json_encode($imgarr);
        }
        if ($food->save()) {
            $res = \General::success_res('Food added successfully.');
        }else{
            $res = \General::success_res('Something went wrong.');
        }
        return $res;
    }
    
    public static function filter_foods($param){

        $food = self::join('category','category.id','foods.category')
        ->select('foods.*','category.c_name')
        ->orderBy('foods.id','desc');
        if(isset($param['cateogry']) && $param['cateogry'] != ''){
            $food = $food->where('cateogry.id',$param['cateogry']);
        }
        $count =$food->count();
        $len = $param['itemPerPage'];
        $start = ($param['currentPage']-1) * $len;
        $food =$food->skip($start)->take($len)->get()->toArray();
        $res['data'] =$food;
        $res['total_record'] = $count;
        
        return $res;
    }
    public static function deleteFood($param){
        $food = self::where('id',$param['record_id'])->first();
        $old_img = $food['main_image'];
        $old_img = basename($old_img);

        \File::delete(public_path(\Config::get('constant.FOOD_IMG_PATH_LINK')).'/'.$old_img);
        if (isset($food['images']) && $food['images'] != null) {
            $oldImages = json_decode($food['images']);
            foreach ($oldImages as $key => $img) {
                \File::delete(public_path(\Config::get('constant.FOOD_IMG_PATH_LINK')).'/'.$img);
            }
        }

        if ($food->delete()) {
            $res = \General::success_res('Record delete successfully.');
        }else{
            $res = \General::error_res('Something went wrong.');
        }
        return $res;
    }
    public static function foodInfo($id){
        $food = self::join('category','category.id','foods.category')->where('foods.id',$id)->first();
        return $food;
    }
    public static function updateCategory($param){
        $food = self::where('id',$param['category_id'])->first();
        if (isset($param['category_image']) && $param['category_image'] != '') {
            $old_img = basename($food->c_image);
            $img = $param['category_image'];
            $dir_path = public_path( \Config::get('constant.CATEGORY_IMG_PATH_LINK'));
            if (!file_exists($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            $ext = $img->getClientOriginalExtension();
            $fileName = 'category'.time() . "." . $ext;
            if ( $img->move($dir_path, $fileName)) {
                $food->c_image = $fileName;
            }
        }
        $food->c_name = $param['category_name'];
        $food->parent_id = $param['parent_category'];
        if (isset($fileName) && $fileName != '') {
            \File::delete(public_path(\Config::get('constant.CATEGORY_IMG_PATH_LINK')).'/'.$old_img);
        }
        if ($food->save()) {
            $res = \General::success_res('Category updated successfully.');
        }else{
            $res = \General::error_res('Something went wrong.');
        }
        return $res;
    }
}
