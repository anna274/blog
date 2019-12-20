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
        </div>