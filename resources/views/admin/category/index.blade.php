@extends('admin.templates.default')

@section('content')


<div class="page-content-inner">
    @include('admin.templates.partials._alerts')
    <nav id="breadcrumbs" class="mb-3">
        <ul>
            <li><a href="{{ route('admin.index') }}"> <i class="uil-home-alt"></i> </a></li>
            <li> Categories </li>

        </ul>
    </nav>
    <div class="card">
        <!-- Card header -->
        <div class="card-header actions-toolbar border-0">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="d-inline-block mb-0">Category </h4>
                <div class="d-flex">

                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="Search product">
                        <i class="uil-search"></i>
                    </a>
                    <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input shadow-0 uk-form-small" type="search"
                                placeholder="Search..." autofocus>
                        </form>
                    </div>

                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="filter">
                        <i class="uil-filter"></i>
                    </a>
                    <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-active"><a href="#"> Newest </a></li>
                            <li><a href="#">From A-Z</a></li>
                            <li><a href="#">From Z-A</a></li>
                        </ul>
                    </div>


                    <a href="#" class="btn btn-icon btn-hover  btn-circle" uk-tooltip="More">
                        <i class="uil-ellipsis-h"></i>
                    </a>
                    <div uk-dropdown="pos: bottom-right ; mode: click ;animation: uk-animation-scale-up">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li><a href="#"> Refresh </a></li>
                            <li><a href="#">Manage</a></li>
                            <li><a href="#">Setting</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">
                            <div>
                                <a href="{{ route('category.create') }}" class="btn btn-default">
                                    <i class="uil-plus"> </i> New Category
                                </a>
                            </div> </th>
                    </tr>
                </thead>
                <tbody class="list">

                    @foreach ($categories as $category)
                    <tr>
                        <th>#</th>
                        <th scope="row">
                            <a href="#" class="name h6 mb-0 text-sm">{{ $category->name }}</a>
                        </th>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->describtion }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td class="text-center">
                            <!-- Actions -->
                            <div class="actions ml-2">
                                <a href="{{ route('category.edit', $category) }}" class="btn btn-icon btn-hover btn-sm btn-circle"
                                    uk-tooltip="Edit">
                                    <i class="uil-pen "></i> </a>
                                <button id="delete" data-title="{{ $category->name }}" href="{{ route('category.destroy',$category) }}" class="btn btn-icon btn-hover btn-sm btn-circle"
                                        uk-tooltip="Delete user">
                                    <i class="uil-trash-alt text-danger"></i>
                                </button>
                            </div>

                            <form action="" method="post" id="deleteForm">
                                @csrf
                                @method("DELETE")
                                <input type="submit" style="display:none" value="">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    {{-- <ul class="uk-pagination my-5 uk-flex-center" uk-margin>
        <li class="uk-active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li class="uk-disabled"><span>...</span></li>
        <li><a href="#"><span uk-pagination-next></span></a></li>
    </ul> --}}

    <div class="box-footer clearfix">
        {{ $categories->links('vendor.pagination.adminlea') }}
    </div>






</div>
@endsection

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $('button#delete').on('click', function(){
            var href = $(this).attr('href');
            var title = $(this).data('title');
Swal.fire({
  title: "Are you sure to delete "+ title +" category?",
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
      document.getElementById('deleteForm').action = href;
      document.getElementById('deleteForm').submit();
        Swal.fire(
      'Deleted!',
      'Your category has been deleted.',
      'success'
    )
  }
})
        });
    </script>
@endpush
