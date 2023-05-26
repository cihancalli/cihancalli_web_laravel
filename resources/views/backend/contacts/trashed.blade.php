@extends('backend.layouts.master')
@section('backendTitle','Trashed Contacts')
@section('backendContent')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('backendTitle')
                <span class="float-right">Found {{$contacts->count()}} posts.</strong>
                    <a href="{{route('admin.contacts.index')}}" class="btn btn-success btn-sm">All Contacts ({{$untrashed->count()}})</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="text-align:center; vertical-align: middle;">Created</th>
                        <th style="text-align:center; vertical-align: middle;">Deleted</th>
                        <th style="text-align:center; vertical-align: middle;">Name</th>
                        <th style="text-align:center; vertical-align: middle;">Email</th>
                        <th style="text-align:center; vertical-align: middle;">Phone</th>
                        <th style="text-align:center; vertical-align: middle;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($contact->created_at)->format('d.m.Y')}}</td>
                            <td style="text-align:center; vertical-align: middle;">{{\Carbon\Carbon::parse($contact->deleted_at)->format('d.m.Y')}}</td>

                            <td style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.contacts.show', $contact->id)}}" target="_blank"
                                   class="btn btn-link">{{$contact->name}}</a>
                            </td>

                            <td style="text-align:center;  vertical-align: middle;">
                                <a href="mailto:{{$contact->email}}" target="_blank"
                                   class="btn btn-link">{{$contact->email}}</a></td>

                            <td style="text-align:center;  vertical-align: middle;" title="{{$contact->phone}}">
                                <a href="tel:{{$contact->phone}}" target="_blank"
                                   class="btn btn-link">{{$contact->phone}}</a>
                            </td>
                            <td width="200" style="text-align:center;  vertical-align: middle;">
                                <a href="{{route('admin.contact.undelete', $contact->id)}}" title="Undelete"
                                   class="btn btn-sm btn-primary"><i class="fa fa-undo"></i></a>
                                <a href="{{route('admin.contact.harddelete', $contact->id)}}" title="Delete"
                                   class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
