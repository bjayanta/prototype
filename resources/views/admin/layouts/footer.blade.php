<p>
	<strong>Copyright &copy; 2018-{{ Carbon\Carbon::now()->year }}</strong>
	<a href="https://usitsolution.net/" target="_blank">US IT Solution</a>
	All rights reserved.
</p>

{{-- jquery --}}
 <script type="text/javascript" src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>

{{-- bootstrap js --}}
 <script type="text/javascript" src="{{ asset('admin/js/popper.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 
{{-- add scripts --}}
@stack('scripts')
