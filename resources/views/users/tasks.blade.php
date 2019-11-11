@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">#</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripción</th>
                            <th class="text-center">Creado</th>
                            <th colspan="2" class="text-center">
                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create">
                                    Crear Tarea
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(task, value) in tasks" :key="value">
                            <td class="text-center"> @{{value+1}} </td>
                            <td class="text-center" v-text="task.name">  </td>
                            <td class="text-center"> @{{task.description}} </td>
                            <td class="text-center"> @{{task.created_at | taskCreatedAt}} </td>
                            <td class="text-center">
                                <a href="#" @click.prevent="editTask(task)">
                                    <img src=" {{asset('icons/edit.svg')}} ">
                                </a>
                            </td>
                            <td>
                                <a href="#" @click.prevent="deleteTask(task)">
                                    <img src=" {{asset('icons/delete.svg')}} ">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class=" row justify-content-center">
                <nav  aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item" v-if="pagination.current_page > 1">
                            <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">Atras</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                      
                        <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                            <a class="page-link" href="#"  @click.prevent="changePage(pagination.current_page + 1)">Siquiente</a>
                        </li>
                    </ul>
                </nav>
                </div>
                @include('partials.tasks.create')  
                @include('partials.tasks.edit')             
            </div>
           
        </div>
    </div>

@endsection
