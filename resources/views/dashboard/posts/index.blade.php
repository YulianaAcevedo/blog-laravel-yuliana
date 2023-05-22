@extends('layouts.app')
@extends('dashboard.master')

@section('content')

<a class="btn btn-success mt-3 mb-3 href="{{route('posts.create')}}">
    crear
</a>


<table class="table ">
    <thead>
        <tr>
            <td>
               Id 
            </td>
            <td>
                Nombre 
             </td>
             <td>
                Categoría
             </td>
             <td>
                Estado Publicación
             </td>
             <td>
                Creación
             </td>
             <td>
                Actualización
             </td>
             <td>
                Acciones
             </td>
        </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post )
        <tr>
            <td>
                {{$post->id}}
            </td>
            <td>
                {{$post->title}}
                </td>
                <td>
                    {{ $post->slug }}
                    </td>
                    <td>
                        {{ $post->description }}
                        </td>
                        <td>
                            {{ $post->content }}
                        
                            </td>
                            <td>
                                {{ $post->image }}
                                </td>
                               
                    <td>
                        {{ $post->posted}}
                    </td>
                    <td>
                        {{ $post->created_at->format('d-m-Y') }}
                    </td>
                    <td>
                        {{ $post->updated_at->format('d-m-Y') }}

                    </td>
                    <td>
                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-primary">Editar</a>
                        <a href="{{route('post.show', $post->id)}}" class="btn btn-primary">Ver</a>
                    
                        <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->category_id }}"
                                class="btn btb-danger">Eliminar</button>
                    </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $posts->links() }}

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estas seguro de eliminar el registro?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secundary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" method="POST" action="{{ route('posts.destroy',0) }}"
                data-action="{{ route('posts.destroy',0) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                </div>
        </div>
    </div>
</div>
<script>
    window.onload=function(){
        $('#deleteModal').on('show.bs.modal', function(event){
            var button = $(event.relatedTarget)
            var id=button.data('id')
            action0$('#formDelete').attr('data-action').slice(0,-1)
            action +=id
            $('#formDelete').attr('action',action)
            var modal=$(this)
            modal.find('.modal-title').text('Vas a borrar el POST: '+id)
        });
    };
    </script>
