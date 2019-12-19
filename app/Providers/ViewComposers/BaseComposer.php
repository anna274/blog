<?php

namespace App\Providers\ViewComposers;
use Illuminate\Contracts\View\View;  /* волшебный класс, содержит текущие подшаблоны */
use App\Category; /**/

class BaseComposer{
    public function compose(View $view){  /*Внедрение зависимостей - будет доступен обхект вью класса вью, там дальше есть полезные методы*/
        $objs = Category::where('parent_id', 0)->orderBy('id')->get();
        $view->with('objs', $objs); /*В базовом щаблоне будет доступна переменная test*/ 
    }
}





