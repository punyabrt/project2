<header>
		<div class="container-fluid position-relative no-side-padding">
			<a href="{{ url('/') }}" class="logo"><img src="assets/img/museum.png" alt="Logo Image" style="width:40px;height:40px;"></a>
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>  

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="{{ url('/') }}">หน้าหลัก</a></li>
				<li><a href="#">ยอดนิยม</a></li>
               
			</ul><!-- main-menu -->


			<div class="src-area">
				<form>
					<button class="src-btn" type="submit"><img src="assets/img/search.png"></button>
					<input class="src-input" type="text" placeholder="ค้นหาทั้งหมด">
				</form>
			</div> 
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">เข้าสู่ระบบ</a>

                        @if (Route::has('register'))
                            <a href="{{  route('register')  }}">สมัครสมาชิก</a>
                        @endif
                    @endauth
                </div>
            @endif

		</div><!-- conatiner -->
		

	</header>