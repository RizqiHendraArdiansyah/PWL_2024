@extends('layout.template') 

@section('content') 
    <div class="card card-outline card-primary"> 
        <div class="card-header"> 
            <h3 class="card-title">{{ $page->title }}</h3> 
            <div class="card-tools"> 
        </div> 
    </div> 
    <div class="card-body"> 
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif   
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
            </div>
          </div>
          @if (auth()->user()->level->level_nama != 'Member')
          {!! $chart->container() !!}
          <div class="btn-wrapper d-flex justify-content-end mb-3">
            <a href="{{route('member.export.excel')}}" class="btn btn-success">Export Excel <i
                    class="ml-1 far fa-file-excel"></i></a>
        </div>
        <table class="table table-bordered table-striped table-hover table-sm" id="table_user"> 
        <thead> 
        <tr><th>ID</th><th>Username</th><th>Nama</th><th>Level Pengguna</th><th>Aksi</th></tr> 
        </thead> 
        </table> 
          @else 
          <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>ID</th>
                <td>{{ auth()->user()->user_id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ auth()->user()->username }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ auth()->user()->nama }}</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>{{ auth()->user()->level->level_nama }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ auth()->user()->status == 1 ? 'Validate' : 'Unvalidate' }}</td>
            </tr>
            <tr>
                <th>Foto Profil</th>
                <td><img src="{{asset('storage/profil/'.auth()->user()->profil_img)}}" class=" "></td>
            </tr>
        </table>
          @endif
    </div> 
</div> 
@endsection 

@push('css') 
@endpush 

@push('js') 
<script> 
    $(document).ready(function() { 
        var dataUser = $('#table_user').DataTable({ 
            serverSide: true, // serverSide: true, jika ingin menggunakan server side processing 
            ajax: { 
                    "url": "{{ url('welcome/list') }}", 
                    "dataType": "json", 
                    "type": "POST",
                    "data": function(d) {
                        d.level_id = $('#level_id').val();
                    } 
            }, 
            columns: [ 
            { 
                data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn() 
                className: "text-center", 
                orderable: false, 
                searchable: false 
                },{ 
                data: "username", 
                className: "", 
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan 
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari 
                },{ 
                data: "nama", 
                className: "", 
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan 
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari 
                },{ 
                data: "level.level_nama", 
                className: "", 
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan 
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari 
                },{ 
                data: "aksi", 
                className: "", 
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan 
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari 
            } 
        ] 
    });

    $('#level_id').on('change', function() {
        dataUser.ajax.reload();
    });
    
    
}); 
</script> 
<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
@endpush 
