<div class="col-md-8">
    <div class="card-body">
        <form class="form form-vertical" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-body">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="name" :value="__('Name')">Nama</label>
                            <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nama Lengkap">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="email" :value="__('Email')">Email</label>
                            <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="password" :value="__('Password')">Password</label>
                            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="password_confirmation" :value="__('Confirm Password')">Konfirmasi Password</label>
                            <input class="form-control" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-10">
                        <!-- <div class='form-check'>
                            <div class="checkbox">
                                <input type="checkbox" id="checkbox3" class='form-check-input' checked>
                                <label for="checkbox3">Remember Me</label>
                            </div>
                        </div> -->
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/">
                            {{ __('Sudah memiliki Akun? Klik disini') }}
                        </a>
                    </div>
                    <div class="col-10 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Register') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>