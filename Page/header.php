<header class="header">
    <div class="header-container grid wide">
        <div class="header__nav row">
            <div class="col l-0 m-3 c-2">
                <div class="mobile-header__bar">
                    <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                    <label for="mobile-nav-appear" class="header__bar-icon"></label>

                    <input type="checkbox" hidden="" id="mobile-nav-appear" class="click-header__bar-icon">
                    <label for="mobile-nav-appear" class="mobile-header__list">
                        <li class="mobile-header__item">
                            <label for="subnav-appear">
                                <a href="">Trang Chủ</a>
                            </label>

                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear2">
                                Bánh
                                <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                            </label>

                            <input type="checkbox" hidden="" id="subnav-appear2" class="click-subnav">
                            <ul class="mobile-header__item-list">
                                <li class="mobile-header__item-item">
                                    <a href="index.php?direct=banhkem">Bánh Kem</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="index.php?direct=banhmi">Bánh Mì</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear3">
                                Thức Uống
                                <i class="fas fa-chevron-right mobile-header__item-icon-right"></i>
                            </label>

                            <input type="checkbox" hidden="" id="subnav-appear3" class="click-subnav2">
                            <ul class="mobile-header__item-list">
                                <li class="mobile-header__item-item">
                                    <a href="index.php?direct=cafe">Cafe</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="index.php?direct=cocktail">Cocktail</a>
                                </li>
                                <li class="mobile-header__item-item">
                                    <a href="index.php?direct=trasua">Trà Sửa</a>
                                </li>

                            </ul>
                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="index.php?direct=lienhe"> liên Hệ</a>
                            </label>

                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="index.php?direct=phanhoi">Phản Hồi</a>
                            </label>

                        </li>
                        <li class="mobile-header__item">
                            <label for="subnav-appear4">
                                <a href="#contact-area">Thông Tin</a>
                            </label>

                        </li>
                    </label>
                </div>
            </div>

            <div class="col l-2 m-6 c-7">
                <div class="header__nav-logo">
                    <a href="">
                        <img src="./assets/img/banner/logomoon.png" style="width: 140px" alt="" />
                    </a>
                </div>
            </div>

            <div class="col l-8 m-0 c-0">
                <nav class="header__nav-menu">
                    <ul class="header__nav-menu__list">
                        <li class="header__nav-menu-item">
                            <a href="index.php?direct=trangchu" class="header__nav-menu--link">Trang Chủ</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link">Bánh</a>
                            <!-- shop none -->
                            <ul class="navbar__shop">
                                <li class="navbar__shop--item">
                                    <a href="index.php?direct=banhkem" class="navbar__shop--link">Bánh Kem</a>
                                </li>
                                <li class="navbar__shop--item">
                                    <a href="index.php?direct=banhmi" class="navbar__shop--link">Bánh Mì</a>
                                </li>
                            </ul>
                        </li>

                        <li class="header__nav-menu-item">
                            <a href="" class="header__nav-menu--link">
                                Thức Uống
                            </a>
                            <ul class="navbar__page">
                                <li class="navbar__page--item">
                                    <a href="index.php?direct=cafe" class="navbar__page--link">
                                        Cafe
                                    </a>
                                </li>
                                <li class="navbar__page--item">
                                    <a href="index.php?direct=cocktail" class="navbar__page--link">
                                        Cocktail
                                    </a>
                                </li>
                                <li class="navbar__page--item">
                                    <a href="index.php?direct=trasua" class="navbar__page--link">
                                        Trà Sữa
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="index.php?direct=lienhe" class="header__nav-menu--link">liên hệ</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="index.php?direct=phanhoi" class="header__nav-menu--link">Phản Hồi</a>
                        </li>
                        <li class="header__nav-menu-item">
                            <a href="#contact-area" class="header__nav-menu--link">Thông Tin</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col l-2 m-3 c-3">
                <div class="header__nav-warp">
                    <div class="header__nav-warp-search">
                        <a href="#" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon fas fa-search"></i>
                        </a>
                        <div class="header__nav-warp-search-form">
                            <form action="# " method="post">
                                <input type="text" placeholder="Tìm Kiếm ..." class="header__nav-warp-search-form--input" />
                                <button class="btn btn-nav-search" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="header__nav-warp-login">
                        <a href="#" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon far fa-user"></i>
                        </a>
                    </div>
                    <div class="header__nav-warp-login">
                        <a href="#" class="header__nav-warp-link">
                            <i class="header__nav-warp-icon fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</div>