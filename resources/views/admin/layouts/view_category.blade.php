
@extends('Admin.Layouts.app')

@section('content')

{{-- Sidebar Starts --}}

@include('Admin.Layouts.sidebar')

{{--Sidebar Ends--}}


<div id="right-panel" class="right-panel">

    {{--Header Content start--}}

    @include('Admin.Layouts.header_nav')

    {{--    Header Content Ends --}}

    

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Category</a></li>
                        <li class="active">All</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

{{--  Table datas Starts--}}


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                        <a href="{{ url('./administration/add_category') }}" class=" float-right btn btn-success" style="border-radius: 5px;">Add Category</a>
                    </div>
                    
                    <div class="card-body">
                        <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="bootstrap-data-table-export_length">
                                <label>Show <select name="bootstrap-data-table-export_length" aria-controls="bootstrap-data-table-export" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>                                   
                                    <option value="-1">All</option>
                                </select>
                                 entries</label>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label>
                                </div>
                            </div>
                        </div>
                        </div>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Is Parent</th>
                                    <th>Parent Category</th>
                                    <th>Photos</th>
                                    <th> Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
    @if ( count( $categs ) > 0 )
    {{$n = 1;}}
    @foreach( $categs as $ctgs )
                                <tr>
                                    <td>{{$n}}</td>
                                    <td>{{$ctgs->Parent_cat_title}}</td>
                                    <td>wement-wears</td>
                                    <td>{{$ctgs->cat_is_parent}}</td>
                                    <td>
                                        @if( $ctgs->cat_is_parent == 'yes' )
                                            {{$ctgs->Parent_cat_title}}
                                        @else
                                            Parent
                                        @endif
                                    </td>
                                    <td><img src="" width="" height=""></td>
                                    <td>{{$ctgs->Parent_cat_status}}</td>
                                    <td>
                                        <a href="#largeModal" type="button" data-toggle="modal" data-target="#largeModal"><span style="background-color: royalblue; color:#fff; padding:5px; margin:5px; border-radius:50%"><i class="menu-icon ti-pencil-alt"></i></span></a>
                                        <a href="#"><span style="background-color: red; color:#fff; padding:5px; margin:5px; border-radius:50%"><i class="menu-icon ti-trash"></i></span></a>
                                    </td>

                                </tr>
        {{$n++;}}
    @endforeach
    @endif
   

                                </tr>
                                
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- Card Ends --}}

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="bootstrap-data-table-export_info" role="status" aria-live="polite">Showing 1 to 50 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table-export_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="bootstrap-data-table-export_previous">
                                    <a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="bootstrap-data-table-export_next"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                                    and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                                    Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                                    horse-like. All three belong to the genus Equus, along with other living equids.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Col-md-12 Ends --}}
        </div>
    </div>
</div>
                    

    {{--  Tables Datas Ends --}}



</div>





@endsection
