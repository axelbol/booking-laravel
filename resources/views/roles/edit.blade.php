@extends('layouts.main', ['activePage' => 'roles', 'titlePage' => 'Editar Rol'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('roles.update', $role->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Editar rol</h4>
              <p class="card-category">Editar datos del rol</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Nombre del rol</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="name" value="{{ old('name', $role->name) }}" autocomplete="off" autofocus>
                </div>
              </div>
              <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <table class="table">
                          <tbody>
                            @foreach ($permissions as $id => $permission)
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                      value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : '' }}>
                                    <span class="form-check-sign">
                                      <span class="check" value=""></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                {{ $permission }}
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection