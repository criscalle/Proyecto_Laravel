@extends('layouts.maestra')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User') }}
                            </span>

                           
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th hidden="true">No</th>
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Foto</th>
                                        <th>Password</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $user)
                                    @if(Auth::user()->email == $user->email)
                                        <tr>
                                            <td hidden="true">{{ ++$i }}</td>
                                            
											<td>{{ $usuario->name }}</td>
											<td>{{ $usuario->email }}</td>
                                            <td>{{ $usuario->foto }}</td>
											<td>{{ $usuario->password }}</td>

                                            <td>
                                                <form action="{{ route('user.destroy',$usuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('user.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('user.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection