@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @verbatim
            <h1 class="text-danger text-center">
                <countdown :time="60 * 60 * 1000" :auto-start="true">
                    <template slot-scope="props">{{ props.hours }} : {{ props.minutes }} : {{ props.seconds }}</template>
                </countdown>
            </h1>
            @endverbatim
        </div>
    </div>
</div>
@endsection
