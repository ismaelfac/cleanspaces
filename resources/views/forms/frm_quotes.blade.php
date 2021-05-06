<div id="app" class="bg-white">
    <div class="w-100 heading-title bg-primary text-center">
        <h2 class="mb-0">Consigue una cotización</h2>
    </div>
    <form method="POST" action="{{ url('/') }}" class="appointment bg-white p-4 p-md-5">
        @csrf
            <quotes-component></quotes-component>
    </form>
</div>
<script src="{{ asset('/js/app.js') }}"></script>
