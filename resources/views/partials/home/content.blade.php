{{-- Jumbotron --}}
<section data-anchor="home" class="jumbotron text-center text-light">
  <img src="{{ asset('assets/images/icon/icon.png') }}"
    alt="{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }} Logo" width="200" class="mb-3" />
  <h1 class="display-4 text-capitalize">{{ str_replace('_', ' ', config('app.name', 'Vtuber Sub Indo')) }}</h1>
  <p class="lead text-capitalize">
    @if (@$local)
      @lang('data.as')
    @else
      Komunitas Clipper | Vtuber Fans
    @endif
  </p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path class="svg_white" fill="#ffffff" fill-opacity="1"
      d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,128C672,107,768,117,864,154.7C960,192,1056,256,1152,240C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>
{{-- End Jumbotron --}}

{{-- About Section --}}
<section data-anchor="about" id="about">
  <div class="container">
    <div class="row mb-3 text-center">
      <div class="col">
        <h2>
          @if (@$local)
            @lang('data.title.about.heading')
          @else
            Tentang Kami
          @endif
        </h2>
      </div>
    </div>
    <div class="row justify-content-around fs-5 text-center">
      <div class="col-md-12">
        <p class="mb-5">
          @if (@$local)
            @lang('data.desc')
          @else
            Vtuber Sub Indo adalah sebuah komunitas Clipper yang mewadahi
            para Clipper Vtuber. Tujuan Vtuber Sub Indo yaitu menjadi garda
            terdepan Channel Clip Vtuber ber-subtitle Indonesia untuk
            menarik para penonton masuk ke lubang hitam yang sama seperti
            kita saat ini.
          @endif
        </p>
      </div>
      <div class="col-12 col-md-6">
        <p class="align-middle mb-3">
          <img src="{{ asset('assets/images/icon/discord.png') }}" alt="Discord Logo" width="50" height="50" />
          @if (@$local)
            @lang('data.title.about.discord')
          @else
            Server Discord
          @endif
        </p>
        <div
          class="embed-responsive embed-responsive-21by9 embed-responsive-16by9 embed-responsive-4by3 embed-responsive-1by1">
          <iframe class="embed-responsive-item discord"
            src="https://discordapp.com/widget?id=715019741344825417&theme=dark" width="400" height="500"
            allowtransparency="true" frameborder="0"
            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
          </iframe>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <p class="align-middle mb-3 pt-3 pt-md-0">
          <img src="{{ asset('assets/images/icon/twitter.png') }}" alt="Twitter Logo" width="50" height="50" />
          @if (@$local)
            @lang('data.title.about.twitter')
          @else
            Linimasa Twitter
          @endif
        </p>
        <div
          class="embed-responsive embed-responsive-21by9 embed-responsive-16by9 embed-responsive-4by3 embed-responsive-1by1">
          <a class="twitter-timeline embed-responsive-item" data-lang="en" data-width="400" data-height="500"
            data-theme="dark" href="https://twitter.com/VtuberSubIndo?ref_src=twsrc%5Etfw">
          </a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path class="svg_blue" fill="#3fc7f1" fill-opacity="1"
      d="M0,256L48,224C96,192,192,128,288,106.7C384,85,480,107,576,149.3C672,192,768,256,864,245.3C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>
{{-- End About Section --}}

{{-- Videos Section --}}
<section data-anchor="videos" id="videos">
  <div class="container pe-3 ps-3 pe-sm-5 ps-sm-5 pe-md-0 ps-md-0">
    <div class="row mb-5 text-center text-light">
      <div class="col">
        <h2 class="pt-3 pt-md-0 text-capitalize">
          @if (@$local)
            @lang('data.title.videos')
          @else
            Clip
          @endif
        </h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 mt-5">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            {{-- @foreach ($ListYoutube as $key => $item)
              <div class="swiper-slide">
                <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                  <iframe class="embed-item-responsive"
                    src="https://www.youtube.com/embed/{{ $item['videoId'] }}?rel=0" title="Sakura Miko Debut Video"
                    allowfullscreen></iframe>
                </div>
              </div>
            @endforeach --}}
            <div class="swiper-slide">
              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                <iframe class="embed-item-responsive" src="https://www.youtube.com/embed/dhJyQ97laCg?rel=0"
                  title="Sakura Miko Debut Video" allowfullscreen></iframe>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                <iframe class="embed-item-responsive" src="https://www.youtube.com/embed/X9zw0QF12Kc?rel=0"
                  title="Sakura Miko Debut Video" allowfullscreen></iframe>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                <iframe class="embed-item-responsive" src="https://www.youtube.com/embed/Y8o4goeVM0o?rel=0"
                  title="Sakura Miko Debut Video" allowfullscreen></iframe>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                <iframe class="embed-item-responsive" src="https://www.youtube.com/embed/HiLnCY9qjSo?rel=0"
                  title="Sakura Miko Debut Video" allowfullscreen></iframe>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="ratio ratio-16x9 ratio-4x3 ratio-1x1">
                <iframe class="embed-item-responsive" src="https://www.youtube.com/embed/uRB1G0cKpIk?rel=0"
                  title="Sakura Miko Debut Video" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          {{-- <div class="swiper-pagination"></div> --}}
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          {{-- <div class="swiper-scrollbar"></div> --}}
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path class="svg_white" fill="#ffffff" fill-opacity="1"
      d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,128C672,107,768,117,864,154.7C960,192,1056,256,1152,240C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>
{{-- End Videos Section --}}

{{-- Contact Us Section --}}
<section data-anchor="contact" id="contact">
  <div class="row mb-5 text-center">
    <div class="col">
      <h2>
        @if (@$local)
          @lang('data.title.contact.heading')
        @else
          Kontak Kami
        @endif
      </h2>
    </div>
  </div>
  <div class="row mb-3 justify-content-center">
    <div class="col-10 col-lg-8">
      <div id="alertSuccess" class="alert alert-success alert-dismissible fade show d-none" role="alert">
        @if (@$local)
          <strong>@lang('data.title.contact.form.alert.lead.success')</strong>
          @lang('data.title.contact.form.alert.paragraph.success')
        @else
          <strong>Terima kasih!</strong> data Anda sudah berhasil terkirim.
        @endif
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div id="alertFailed" class="alert alert-danger alert-dismissible fade show d-none" role="alert">
        @if (@$local)
          <strong>@lang('data.title.contact.form.alert.lead.failed')</strong>
          @lang('data.title.contact.form.alert.paragraph.failed')
        @else
          <strong>Mohon maaf.</strong> data gagal terkirim.
        @endif
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <form action="?" method="POST" name="form">
        @csrf
        <label for="name" class="form-label">
          @if (@$local)
            @lang('data.title.contact.form.content.name')
          @else
            Nama Lengkap
          @endif
        </label>
        <div class="input-group flex-nowrap mb-3">
          <span class="input-group-text" id="name"><i class="bi bi-person-fill"></i></span>
          <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap"
            aria-label="name" aria-describedby="name" data-bs-toggle="tooltip" data-bs-placement="top"
            title="{{ @$local ? __('data.title.contact.form.title') : 'Harap Diisi' }}" autocomplete="name" required
            spellcheck />
        </div>
        <label for="email" class="form-label">
          @if (@$local)
            @lang('data.title.contact.form.content.email')
          @else
            Alamat Email
          @endif
        </label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="email"><i class="bi bi-envelope-fill"></i></span>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email"
            aria-label="email" aria-describedby="email" data-bs-toggle="tooltip" data-bs-placement="top"
            title="{{ @$local ? __('data.title.contact.form.title') : 'Harap Diisi' }}" autocomplete="email" required
            spellcheck />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label text-capitalize">
            @if (@$local)
              @lang('data.title.contact.form.content.message')
            @else
              Pesan
            @endif
          </label>
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tulis Pesan"
            data-bs-toggle="tooltip" data-bs-placement="top"
            title="{{ @$local ? __('data.title.contact.form.title') : 'Harap Diisi' }}" required spellcheck>
          </textarea>
        </div>
        <div class="mb-3">
          <div class="g-recaptcha" data-callback="recaptchaCallback"
            data-sitekey="6LdDWnwaAAAAAOIkCFh7EDnYDgSAEEPheUpWJo7-">
            {{-- <div class="captcha">
              <div>
                <iframe
                  src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfemLsZAAAAAIKitf7srENDko3KFbuEwMyw9_R2&amp;co=aHR0cHM6Ly9oYXJ1bm96dWthLmlkOjQ0Mw..&amp;hl=en&amp;v=jxFQ7RQ9s9HTGKeWcoa6UQdD&amp;size=normal&amp;cb=hi6lmepctk7c"
                  width="304" height="78" role="presentation" name="a-fekub1qv2b0s" frameborder="0" scrolling="no"
                  sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                </iframe>
              </div>
              <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="
                width: 250px;
                height: 40px;
                border: 1px solid rgb(193, 193, 193);
                margin: 10px 25px;
                padding: 0px;
                resize: none;
                display: none;">
              </textarea>
            </div>
            <iframe style="display: none"></iframe> --}}
          </div>
        </div>
        <button type="submit" id="btnSend" class="btn text-light"
          title="{{ @$local ? __('data.title.contact.form.button.title') : 'Kirim Pesan' }}">
          @if (@$local)
            @lang('data.title.contact.form.button.content')
          @else
            Kirim
          @endif
        </button>
        <button id="btnLoad" class="btn text-light d-none" type="button" disabled
          title="{{ @$local ? __('data.title.contact.form.button.loader') : 'Memuat...' }}">
          <span class="spinner-border spinner-border-sm ml-2" role="status" aria-hidden="true"></span>
          @if (@$local)
            @lang('data.title.contact.form.button.loader')
          @else
            Memuat...
          @endif
        </button>
      </form>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path class="svg_blue" fill="#3fc7f1" fill-opacity="1"
      d="M0,256L48,224C96,192,192,128,288,106.7C384,85,480,107,576,149.3C672,192,768,256,864,245.3C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
</section>
{{-- End Contact Us Section --}}
