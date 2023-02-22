@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<div class="col-md-12">

    <div class="widget"><br>
        <div class="m-b-lg nav-tabs-horizontal">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="{{ checkRouteActive('tracer-study') }}"><a href="{{ url('tracer-study') }}" style="text-transform: capitalize"1. >Evaluasi pembelajaran saat kuliah</a></li>

                <li role="presentation" class="{{ checkRouteActive('tracer-study-form-ii') }}"><a href="{{ url('tracer-study-form-ii') }}" style="text-transform: capitalize">2. Informasi tentang pekerjaan Alumni</a></li>

                <li role="presentation" class="{{ checkRouteActive('tracer-study-form-iii') }}"><a href="{{ url('tracer-study-form-iii') }}" style="text-transform: capitalize">3. Perbaikan Proses Pembelajaran</a></li>

                <li role="presentation" class="{{ checkRouteActive('tracer-study-form-iv') }}"><a href="{{ url('tracer-study-form-iv') }}" style="text-transform: capitalize">4. Kompetensi Alumni</a></li>

                <li role="presentation" class="{{ checkRouteActive('tracer-study-form-v') }}"><a href="{{ url('tracer-study-form-v') }}" style="text-transform: capitalize">5. Kontribusi Kompetensi yang diperlukan dalam pekerjaan</a></li>
            </ul>
        </div>
    </div>
</div>