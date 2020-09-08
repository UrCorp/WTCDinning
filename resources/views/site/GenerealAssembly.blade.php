@extends('site.templates.main')

@section('body-content')

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <iframe style="width: 100%;height: 100vh;" src="https://wtc.mybusinessmatches.com/" frameborder="0" scrolling="no" onload="resizeIframe(this)" ></iframe>
        </div>
</div>

<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
@endsection
