<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 text-left">
                <ul class="top-bar-info clearfix">
                    <li>Egov.kz - Электронное правительство
                        Республики Казахстан</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="top-bar-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 text-left">
                <ul class="top-bar-info clearfix">
                    @guest
                        <li class="top-bar"><a href="{{ route('login.index') }}">Login</a></li>

                    @endguest
                    @auth
                        <li class="top-bar">
                            <form action="{{ route('login.logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-primary" type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
