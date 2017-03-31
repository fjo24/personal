@extends('hr.template.main')
<div class="container">
    <div class="page-header">
        <h1>
            Panels with nav tabs.
            <span class="pull-right label label-default">
                :)
            </span>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1default">
                                Default 1
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2default">
                                Default 2
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3default">
                                Default 3
                            </a>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" href="#">
                                Dropdown
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a data-toggle="tab" href="#tab4default">
                                        Default 4
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab5default">
                                        Default 5
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                            Default 1
                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            Default 2
                        </div>
                        <div class="tab-pane fade" id="tab3default">
                            Default 3
                        </div>
                        <div class="tab-pane fade" id="tab4default">
                            Default 4
                        </div>
                        <div class="tab-pane fade" id="tab5default">
                            Default 5
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
