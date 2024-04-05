<section class="header-wrapper navgiation-wrapper">
    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <h1
                    style="font-size: 50px;
                            margin-top: 27px;
                            margin-left: 50px">
                    <a href="{{ route('client.home') }}">egov.kz</a>
                </h1>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" title="About Us">ЛИЧНЫЙ КАБИНЕТ</a>
                    </li>
                    <li>
                        <a href="{{ route('client.docs.deposit.index') }}" title="About Us">ИМУЩЕСТВО</a>
                    </li>
                    <li>
                        <a href="{{ route('client.criminal.search') }}" title="About Us">РОЗЫСК</a>
                    </li>
                    <li class="drop">
                        <a href="#">О ПОРТАЛЕ</a>
                        <ul class="drop-down">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </li>
                    <li><a href="#">ПОМОЩЬ</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
