<div>

    <label for="exampleDataList" class="form-label">Comapnay search</label>
    <input class="form-control" wire:model="search" id="exampleDataList" placeholder="Type to search...">

    @if(session('msg'))

            <div class="alert alert-success">

                {{session('msg')}}

            </div>

    @endif

    <!-- Table Start -->
    <div class="container-fluid pt-4">
        <div class="row me-4">

        </div>
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Table</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Webside</th>
                        <th scope="col">Logo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $r)
                    <tr>
                        <th scope="row">{{$r->id}}</th>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->email }}</td>
                        <td>{{ $r->webside }}</td>
                        <td><img src='{{ url("images/$r->image")}}' height="50" width="50"></td>
                        <td><a href='{{ url("deletedata/$r->id") }}' class="btn btn-danger">DELETE</a></td>
                        <td><a href='{{ url("updatedata/$r->id") }}' class="btn btn-info">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $admins->links('admin.pagination-links') }}
        </div>
    </div>
</div>
</div>

</div>