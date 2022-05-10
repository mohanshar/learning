if($request->hasFile('image')){
$filename = $request->image->getClientOriginalName();
$request->image->storeAs('images',$filename,'public');
Auth()->user()->update([
'name'=>$request->get('name'),
'address'=>$request->get('address'),
'contact'=>$request->get('contact'),
'email'=>$request->get('email'),
'image'=>$filename,
]);
}
return redirect('/')->withErrors($validator)->withInput();


php artisan migrate --path=database/migrations/2022_03_01_081156_create_pcs_table.php


<!-- Authentication Links -->
@guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> Register </a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        @if (Auth::user()->image)
                            <img class="image square-circle" src="{{ asset('/storage/images/' . Auth::user()->image) }}"
                                alt="" style="width: 25px;">
                        @endif
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu">

                        <a class="nav-link" href="{{ route('change.profile') }}">
                            Update profile
                        </a>

                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>


                    php artisan db:seed --class=PostingSeeder
