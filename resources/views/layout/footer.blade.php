    <footer>
        
    </footer>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="{{ asset('public/assets/scripts/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/scripts/js.js') }}"></script>
    @if (Request::is('/'))
        {{-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> --}}
        <script src="{{ asset('public/assets/scripts/libraries/flickity.pkgd.min.js') }}"></script>
    @elseif (Request::is('supplement/category/*'))
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.min.js"></script> <!-- price range --> --}}
        <script src="{{ asset('public/assets/scripts/supplements/category.js') }}"></script>
        <script src="{{ asset('public/assets/scripts/libraries/semantic.min.js') }}"></script>
    @elseif (Request::is('supplement/product/*'))
        {{-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> --}}
        <script src="{{ asset('public/assets/scripts/libraries/flickity.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/assets/scripts/supplements/product.js') }}/"></script>
    @endif
</body>
</html>