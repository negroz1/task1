@extends('layouts.app')
@section('content')

        <main id="main-container">
            <div class="content">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Forms Table</h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <div class="col-sm-6 col-xl-4">
                                    <a href="/" class="btn btn-hero-primary">Add Form</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content" id="vue-form">
                        <!-- If you put a checkbox in thead section, it will automatically toggle all tbody section checkboxes -->
                      <task-forms></task-forms>
                    </div>
                </div>
            </div>
        </main>
        
        @endsection
