<div class="container text-center text-md-start">
    <div class="footer-wrap">
        <div class="about">
            <img src="{{ Session::get('site_setting') ? Session::get('site_setting')->logo : '' }}" alt=""
                width="auto" height="80px">
            <p class="text-muted py-4">

            </p>
            <div class="social-media">
                <a href="{{ Session::get('site_setting') ? Session::get('site_setting')->instagram : '' }}"
                    class="me-2 text-reset" target="_blank"><img src="{{ 'img/icon/instagram-icon.svg' }}" alt=""></a>
                <a href="{{ Session::get('site_setting') ? Session::get('site_setting')->facebook : '' }}"
                    class="me-2 text-reset" target="_blank"><img src="{{ 'img/icon/facebook-icon.svg' }}" alt=""></a>
                <a href="{{ Session::get('site_setting') ? Session::get('site_setting')->twitter : '' }}"
                    class="me-2 text-reset" target="_blank"><img src="{{ 'img/icon/twitter-icon.svg' }}" alt=""></a>
                <a href="{{ Session::get('site_setting') ? Session::get('site_setting')->youtube : '' }}"
                    class="me-2 text-reset" target="_blank"><img src="{{ 'img/icon/youtube-icon.svg' }}" alt=""></a>
            </div>
        </div>
        <div class="company">
            <p class="fw-bold" href="{{ url('/') }}">
                {{ Session::get('site_setting') ? Session::get('site_setting')->site_name : '' }}</p>
            <p><a href="{{ url('/about') }}">About</a></p>
            <p><a href="{{ url('/post') }}">User Posting</a></p>
            <p>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                @else
                    <a href="">
                        {{ Auth::user()->name }}</span>
                    </a>
                @endguest
            </p>
        </div>
        <div class="useful-links">
            <p class="fw-bold">Useful links</p>
            <p><a href="">Services</a></p>
            <p><a href="">Privacy Policy</a></p>
            <p><a href="">Documentation</a></p>
        </div>
        <div class="newsletter">
            <p class="fw-bold">Newsletter</p>
            <p class="text-muted">Sign up and receive the latest tips
                via email.</p>
            <form id="subscribe" action="{{ route('send.mail') }}" method="POST">
                @csrf
                <label for="email">Your E-mail:</label>
                <input type="email" placeholder="E-mail:" name="email" required>
                <button type="submit" class="main-btn">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="copyright">
        <p>Copyrights &copy; {{ Session::get('site_setting') ? Session::get('site_setting')->copyright : '' }}
            Pollution Control System | Created by PCS Group</p>
    </div>
</div>

?>
