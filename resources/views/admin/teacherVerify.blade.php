@extends('admin.layouts.app')
@section('content')
    <section id="content">
        <div class="container">
            <div class="c-header">
                <h2>Data Table</h2>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>Verify Teacher <small>If each teacher is registered under your institute click on verify, otherwise deny</small></h2>
                </div>

                <table id="data-table-command" class="table table-striped table-vmiddle">
                    <thead>
                    <tr>
                        <th data-column-id="id" data-type="numeric" data-order="desc">Reg Number</th>
                        <th data-column-id="nic">NIC</th>
                        <th data-column-id="name">Name</th>
                        <th data-column-id="institute">Institute</th>
                        <th data-column-id="course">Course</th>
                        <th data-column-id="commands" data-formatter="commands" data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allteachers as $teacher)
                        @foreach($teacher->institutes as $institute)
                            @foreach(auth()->user()->institutes as $userInstitute)
                                <script>console.log("done")</script>
                                @if($institute->id==$userInstitute->id)
                                    <tr>
                                        <td>{{$institute->pivot->regNumber}}</td>
                                        <td>{{$teacher->nic}}</td>
                                        <td>{{$teacher->user->firstname." ".$teacher->user->Lastname}}</td>
                                        <td>{{$institute->name}}</td>
                                        <td>{{$institute->pivot->course_id}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection
@push('js')
    <!-- Data Table -->
    <script src="/admin/vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            //Basic Example
            $("#data-table-basic").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
            });

            //Selection
            $("#data-table-selection").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
                selection: true,
                multiSelect: true,
                rowSelect: true,
                keepSelection: true
            });

            //Command Buttons
            $("#data-table-command").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
                formatters: {
                    "commands": function(column, row) {
                        return "<button type=\"button\" class=\"btn btn-icon palette-Green bg command-edit waves-effect waves-circle waves-float\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-check\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon palette-Red bg command-edit waves-effect waves-circle waves-float\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-close\"></span></button>";
                    }
                }
            });
        });
    </script>

@endpush