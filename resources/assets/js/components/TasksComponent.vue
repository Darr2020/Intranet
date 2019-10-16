<template>
    <div>
        <h4>Crear Tareas</h4>
        <form @submit.prevent="create">
            <input type="text" placeholder="Nombre" class="form-control" v-model="task.name">
            <input type="text" placeholder="Descripción" class="form-control" v-model="task.description">
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                tasks: [],
                task: {name: '', description: ''},
            }
        },
        methods:{
            create(){
                if(this.task.name.trim() === ''){
                    alert('Para poder crear una tarea debes colocarle un nombre');
                    return;
                }
                const dates = {
                    name: this.task.name,
                    description: this.task.description
                };
                
                this.nota = {nombre: '', descripcion: ''};  

                axios.post('/tareas', dates)
                    .then(res => {
                      //  const tasksServidor = res.data;
                        this.tasks.push(res.data);
                    })
                    .catch(function (error) {
                        alert(error);
                    });
            }   
        }
    }
</script>