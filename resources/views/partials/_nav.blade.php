<div class="navigation">
      <div class="header">
            <div class="logo">
                <img class="icon" src="{{url('assets/img/palm.png')}}" alt="logo">
                <a href="/">
                  <div class="text">HOW TO LIVE</div>
                </a>
            </div>
      </div>
      <div class="menu">
        @foreach($objs as $obj)
          <div class="menu-item">
            <a class="title" href="{{asset('category/'.$obj->id)}}">{{$obj->category_name}}</a>
              <ul class="submenu">
              @foreach($obj->categories()->get() as $two)
                <li><a href = "{{asset('category/'.$two->id)}}">{{$two->category_name}}</a></li>
              @endforeach
              </ul>
          </div> 
        @endforeach
      </div>
      <div class="icons">
        <a href="#" title="Войти" target="_blank"><img class="icon"src="{{url('assets/img/user.png')}}" alt="Sign up"></a>
        <a href="search" title="Поиск" target="_blank"><img class="icon" src="{{url('assets/img/search.png')}}" alt="Search"></a>
        <a href="#" title="Версия для печати" target="_blank"><img class="icon" src="{{url('assets/img/print.png')}}" alt="Print version"></a>
      </div>
</div>