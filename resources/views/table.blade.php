@extends('layouts.app')
@section('title', 'All Records')
@section('content')
    <!-- Dynamic Table Simple -->
    <div class="block">
        <!-- <div class="block-header block-header-default">
            <h3 class="block-title">Dynamic Table <small>With only sorting and pagination</small></h3>
        </div> -->
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-simple class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        @foreach($columns as $column)
                            <th>{{ucfirst($column)}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr>
                        <td class="text-center">{{$record->id}}</td>
                        @foreach($columns as $column)
                            <td class="text-center">{{$record->$column}}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Simple -->
@endsection
