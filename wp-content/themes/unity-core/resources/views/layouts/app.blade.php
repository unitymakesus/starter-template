<!doctype html>
@php
  $text_size = $_COOKIE['data_text_size'] ?? '';
  $contrast = $_COOKIE['data_contrast'] ?? '';
@endphp
<html {!! language_attributes() !!} data-text-size="{{ $text_size }}" data-contrast="{{ $contrast }}">
  @include('partials.head')
  <body {!! body_class() !!}>
    <a href="#content" class="screen-reader-text">Skip to content</a>
    <!--[if IE]>
      <div class="alert alert-warning">
        {!! __('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage') !!}
      </div>
    <![endif]-->
    @php do_action('get_header') @endphp
      @include('partials.header-inline')
    <div id="content" class="content" role="document">
      <div class="wrap">
        @if (App\display_sidebar())
          <aside id="aside" class="sidebar" role="complementary">
            @include('partials.sidebar')
          </aside>
        @endif
        <main role="main" class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
