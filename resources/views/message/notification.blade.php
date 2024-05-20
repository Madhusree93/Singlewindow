<div id="message">
@if (session('success'))
<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{session('success')}}</div>
@endif
@if (session()->has('error'))
<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{session('error')}}</div>
@endif
@if (session('warning'))
<div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{session('warning')}}</div>
@endif
</div>



<script>
setTimeout(function(){
  document.getElementById('message').style.display = 'none';
}, 6000);
</script>
