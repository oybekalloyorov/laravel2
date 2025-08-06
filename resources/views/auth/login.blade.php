<x-layouts.auth>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="teklif pt-100 pb-100">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-home" aria-selected="true">Kirish</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-uye-ol" role="tab" aria-controls="nav-profile" aria-selected="false">Ro'yhatdan otish</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="wc-social-login form-row-wide">

                                <p class="mt-2">Tezroq yoki ro'yxatdan o'tish uchun tizimga kirish uchun ijtimoiy hisobdan foydalaning.</p>

                                <a href="#" class="button-social-login button-social-login-facebook"><img src="https://cdn.techgyd.com/50-Best-Facebook-Logo-Icons-GIF-Transparent-PNG-Images-54.png" class="arac-icon" alt="facebook ile giriş">Facebook</a>
                                <a href="#" class="button-social-login button-social-login-google"><img src="https://img.icons8.com/ios/1600/google-logo.png" class="arac-icon" alt="google ile giriş">Google</a>
                            </div>
                            <form action="{{ route('authenticate') }}" method="POST">
                                @csrf
                                {{-- <p class="wc-social-login-divider">
                                    <span>ya da</span>
                                </p> --}}

                                <div class="form-group">
                                    <label>Email adress</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Parol</label>
                                    <input name="password" type="password" class="form-control"  placeholder="****  ">
                                </div>
                                <button type="submit" class="btn btn-primary btn-large btn-block">Tizimga kirish</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-uye-ol" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <div class="wc-social-login form-row-wide">

                                <p class="mt-2">Tezroq kirish yoki oson ro'yxatdan o'tish uchun ijtimoiy hisobdan foydalaning.</p>

                                <a href="#" class="button-social-login button-social-login-facebook"><img src="img/facebook.svg" class="arac-icon" alt="facebook ile giriş">Facebook</a>
                                <a href="#" class="button-social-login button-social-login-google"><img src="img/google.svg" class="arac-icon" alt="google ile giriş">Google</a>
                            </div>
                            <form  method="POST">
                                @csrf
                                {{-- <p class="wc-social-login-divider">
                                    <span>ya da</span>
                                </p> --}}

                                    <div class="from-row">
                                        <div class="form-group col-m-6">
                                            <label>Ism</label>
                                            <input type="text" class="form-control" placeholder="ISM">
                                        </div>
                                        <div class="form-group col-m-6">
                                            <label>Familiya</label>
                                            <input type="text" class="form-control" placeholder="Familiya   ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email adress</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Parol</label>
                                        <input name="password" type="password" class="form-control"  placeholder="****  ">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input style="    left: 20px;" type="checkbox" class="form-check-input" id="dropdownCheck2">
                                            <label class="form-check-label" for="dropdownCheck2">
                                                <a href="#" class="">A'zolik shartnomasi</a>'Men o'qidim va qabul qildim.
                                            </label>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-large btn-block">Ro'yxatdan o'tish</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--bu kısmı değiştirin şimdi burada yayınlanmasını ıstemedıgım yerler vardı sıldım. Tasarımda bozuk olmasın dıye ıdareten kouydum  -->
                <div class="mt-4 pt-4 pt-100 pb-100">
                    <h4>2300 dan ortiq a'zolar tarmog'iga kirish</h4>
                    <p>Uni oling va foydalaning, bolalar. Kirish sahifasini o'zgartiring va xohlaganingizcha ro'yxatdan o'ting.</p>
               <p><i>Yaxshilik qilib dengizga tashla, baliq bilmasa, yaratgan biladi!</i></p>
                </div>
            </div>
        </div>



    </div>
</x-layouts.auth>
