<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('adminPanel') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Kitaplar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-book') }}">kitap Ekle</a>
                        <a class="nav-link" href="{{ url('admin/book') }}">Kitap Göster</a>
                    </nav>
                </div>
                <br>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTür" aria-expanded="false" aria-controls="collapseTür">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    kitap türleri
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTür" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-genre') }}">kitap Tür Ekle</a>
                        <a class="nav-link" href="{{ url('admin/genres') }}">Kitap Türler Göster</a>
                    </nav>
                </div>
                <br>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseYazar" aria-expanded="false" aria-controls="collapseYazar">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Yazarlar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseYazar" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-writer') }}">Yazar Ekle</a>
                        <a class="nav-link" href="{{ url('admin/writer') }}">Yazar Göster</a>
                    </nav>
                </div>
                <br>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseYorum" aria-expanded="false" aria-controls="collapseYorum">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Yorumlar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseYorum" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-comment') }}">Yorum Ekle</a>
                        <a class="nav-link" href="{{ url('admin/comment') }}">Yorum Göster</a>
                    </nav>
                </div>
                <br>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Kullanıcılar
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('admin/add-user') }}">Kullanıcı Ekle</a>
                        <a class="nav-link" href="{{ url('admin/user') }}">Kullanıcı Göster</a>
                    </nav>
                </div>
        
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>