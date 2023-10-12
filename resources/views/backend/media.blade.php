@extends('backend.layouts.app')
@section('controller', 'Media')
@section('action','Media')
@section('content')
<div class="container">
    <div class="ckfinder-widget" id="ckfinder-widget"></div>
</div>
@stop
@section('scripts')
<script>
    CKFinder.modal( {
        chooseFiles: true,
        width: 1200,
        height: 600,
        onInit: function( finder ) {
        finder.on( 'files:choose', function( evt ) {
            var file = evt.data.files.first();
            // alert(file.getUrl())
            navigator.clipboard.writeText(file.getUrl());
            document.getElementById( 'url' ).value = file.getUrl();
        });
        finder.on( 'file:choose:resizedImage', function( evt ) {
            navigator.clipboard.writeText(evt.data.resizedUrl);
            document.getElementById( 'url' ).value = evt.data.resizedUrl;
        });
        }
    });
</script>
@endsection
    
