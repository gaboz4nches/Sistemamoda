<!-- @extends("layouts.app")

@section('title', 'Empresas Agremiadas')

@section('content')

<div class="col-md-12">
	<br>
	<h1 class="text-center txtb"><i class="far fa-building"></i> Empresas Agremiadas</h1>
	<hr>
	<a href="{{ url('unionized_companies/create')}}" class="btn btn-outline-info">
        <i class="fa fa-plus"></i> Empresa
    </a>
    <hr>
    <div class="row justify-content-center aling-items-center">
    	@foreach($unis as $uni)
        <div class="card col-md-4" style="width: 18rem; border: none;">
            <div class="card-img-top" style="background: url({{ asset($uni->logo) }}) no-repeat center / cover; width: 100%; height: 350px;"></div>
            <div class="card-body text-white bg-dark">
                <h5 class="card-title">{{ $uni->contacto }}</h5>
                <hr style="background-color: #fff;">
                <div id="summary">
                    <p class="collapse" id="collapseExample">
                        {{ $uni->direccion }}
                    </p>
                    <a href="https://{{ $uni->web }}">
                        {{ $uni->web }}
                    </a>
                </div>
                <div class="text-center">
	                <a href="{{ url('unionized_companies/'.$uni->id.'/edit') }}" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
	                <form action="{{ url('unionized_companies/'.$uni->id) }}" method="post" style="display: inline-block">
						@method('delete')
						@csrf
						<button class="btn btn-danger btn-delete" type="button"> 
							<i class="fa fa-trash"></i> 
						</button>
					</form>
				</div>
            </div>
        </div>
        @endforeach
    </div>
    <tfoot>
        <tr>
            <td colspan="4"> 
                <div class="row justify-content-center align-items-center">
                    {!! $unis->render() !!}  
                </div>
            </td>
        </tr>
    </tfoot>
</div>
@endsection -->