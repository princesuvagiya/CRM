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
                        <th scope="col">categorie_id</th>
                        <th scope="col">ID</th>
                        <th scope="col">Project name</th>
                        <th scope="col">Projectmanager</th>
                        <th scope="col">Employename</th>
                        <th scope="col">Post</th>
                        <th scope="col">Budget</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $r)
                    <tr>
                        <td scope="row">{{$r->categorie_id}}</td>
                        <td scope="row">{{$r->id}}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->projectmanager }}</td>
                        <td>{{ $r->employename }}</td>
                        <td>{{ $r->post }}</td>
                        <td>{{ $r->	budget }}</td>
                        <td><a href='{{ url("productdeletedata/$r->id") }}' class="btn btn-danger">DELETE</a></td>
                        <td><a href='{{ url("productupdatedata/$r->id") }}' class="btn btn-info">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links('admin.pagination-links') }}
        </div>
    </div>
</div>
</div>

</div>