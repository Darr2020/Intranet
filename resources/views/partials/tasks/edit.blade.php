<form action="POST" @submit.prevent="updateTask(fillTask.id)">
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editTask" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="editTask">Editar tarea</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <div class="input-div one">
                    <div class="i">
                        <img src=" {{asset('icons/task.svg')}} ">
                    </div>
                    <div>
                        <h5 class="focus">Tarea</h5>
                        <input class="inputModal" type="text" name="name" value="{{ old('name') }}" v-model="fillTask.name">
                    </div>                   
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <img src=" {{asset('icons/description.svg')}} ">
                        </div>
                        <div>
                            <h5>Descripción</h5>
                            <input class="inputModal" type="text" name="description" v-model="fillTask.description">
                        </div>
                    </div>
                    <span v-for="e in errors" class="text-danger"> @{{ e }} </span>
                </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Actualizar" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>  
                </div>
            </div>
        </div>
    </div>
</form>