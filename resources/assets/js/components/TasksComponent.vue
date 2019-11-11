<template>
    <div>

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
                            <td class="text-center" v-text="task.value+1"></td>
                            <td class="text-center" v-text="task.name"> </td>
                            <td class="text-center" v-text="task.description"></td>
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
       
    </div>
</template>

<script>
    export default {
        data() {
            return{ 
                tasks: [],
                pagination:{
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0
                },
                fillTask: { name: '', description: '' },
                name: '',
                description: '',
                errors: []   
            }  
        },
        created() {
            this.getTasks();
        },
        computed: {
            isActived(){
                return this.pagination.current_page;
            },
            pagesNumber(){
                if(!this.pagination.to){
                return [];
                }

                let from = this.pagination.current_page - this.offset;
                if(from < 1){
                from = 1;
                }

                let to = from + (this.offset * 2)
                if(to >= this.pagination.last_page){
                to = this.pagination.last_page;
                }

                let pageArray = [];
                while(from <= to){
                pageArray.push(from);
                from++;
                }
                
                return pageArray;
            }
        },
        methods:{
            getTasks(page){
                let url = '/tarea?page=' + page;
                axios.get(url).then(res => {
                this.tasks = res.data.tasks.data;
                this.pagination = res.data.pagination
                });
            },
            deleteTask(task){
                let url = 'tarea/' + task.id;
                axios.delete(url).then(res => {
                let text = this.tasks.find(t => t.id === task.id);
                let index = this.tasks.indexOf(text);
                this.tasks.splice(index, 1);
                toastr.warning('eliminado');
                });
            },
            editTask(task){
                this.fillTask.id = task.id;
                this.fillTask.name = task.name;
                this.fillTask.description = task.description;
                $('#edit').modal('show')
            },
            updateTask(id){
                let url = 'tarea/' + id;
                axios.post(url, this.fillTask)
                .then(res => {
                    this.getTasks();
                    this.fillTask =  { name: '', description: '' };
                    this.errors = [];
                    $('#edit').modal('hide');
                    toastr.warning('actualizado');
                }).catch(error => {
                    this.errors = error.res.data;
                })
            },
            createTask(){
                let url = '/tarea';
                axios.post(url, {
                name: this.name,
                description: this.description
                }).then(res => {
                    this.getTasks();
                    this.name = ''; 
                    this.description = '';
                    this.errors = [];
                    $('#create').modal('hide');
                    toastr.success('creado');
                }).catch(error => {
                    this.errors = error.res.data;
                })
            },
            changePage(page){
                this.pagination.current_page = page;
                this.getTasks(page);
            }
        }
    }
</script>