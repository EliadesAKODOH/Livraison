@extends('partials.navbar')
@section('content')

    <!-- Layout wrapper -->
    <div class="content-wrapper">

      <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Utilisateurs</h3>
                <div class="card-tools">
                    <a href="{{route('admin.create')}}"> <button class="btn btn-primary"> Créer un administrateur </button>  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Nom</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Telephone</th>
                    </tr>
                  </thead>
                  {{-- @foreach ($admins as $admin)
                  <tbody>
                  <tr>
                  <td> {{$admin->id}} </td>
                  <td> {{$admin->name}} </td>
                  <td> {{$admin->email}} </td>
                  <td> {{$admin->Adresse}} </td>
                  <td> {{$admin->Telephone}} </td>

                  <td>
                    <div class="row ">
                      <div class="">
                          <a href="{{ route('admin.edit', $admin->id) }}">
                            <span class="fas fa-edit"></span>
                          </a>
                      </div>
                      <div class="ml-4">
                        <form action="{{ route('admin.destroy', $admin->id) }}" method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                            <span class="fas fa-trash" style="color: red;"></span>
                          </button>
                        </form>
                      </div>
                    </div>
                  </td>
                  </tr>
                  </tbody>
                  @endforeach --}}
                </table>
              </div>
      </div>

    </div>
</div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @endsection

