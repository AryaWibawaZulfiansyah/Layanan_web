                <!-- login form -->
                <div class="login-card card mt-4">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <div class="card-body">
                        <h4 class="card-title text-start">Selamat Datang</h4>
                        <p>Silahkan login terlebih dahulu.</p>
                        <form class="form-inline" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" :value="__('Email')" style="padding-right: 5px;">Email</label>
                                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Masukan Email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="password" :value="__('Password')" style="padding-left: 20px; padding-right:10px">Password</label>
                                <input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Masukan Password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <button class="btn btn-primary" style="margin-left: 5px">{{ __('Log in') }}</button>
                            <a href="{{ route('register') }}" class="btn btn-secondary" style="margin-left: 7px">Buat Akun Baru</a>
                        </form>
                    </div>
                    <div class="card-footer">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Lupa Kata Sandi?') }}
                        </a>
                        @endif
                    </div>
                </div>