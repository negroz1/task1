@extends('layouts.app')
@section('content')

<main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center"></div>
        </div>
    </div>
    <!-- END Hero -->

    <div class="content" >

        <div class="row">
            <div class="col-md-6" style="margin: 0 auto;" >
                <div  id="vue-form" class="js-wizard-simple block block-rounded">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#wizard-simple-step1" data-toggle="tab">1. Info</a>
                        </li>

                    </ul>
                    <task-form></task-form>
                </div>
            </div>
        </div>

    </div>

</main>

@endsection
